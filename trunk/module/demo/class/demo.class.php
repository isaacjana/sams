<?php
namespace moonlight\demo;

class demo extends \moonlight\module_base implements \moonlight\moonlight_module{

	protected $co_config;
	public $co_db;

	// General module information
	public function get_codename()		{ return 'VUI'; }
	public function get_shortname()		{ return 'VenusUI'; /*Will be use for the session */ }
	public function get_fullname()		{ return 'SAMS';}
	public function get_version()		{ return '1.0.0'; }
	public function get_icon()			{ return ''; } 
	public function get_module_folder()	{ return 'demo/'; }
	public function get_component_folder()	{ return $this->get_module_folder().'web/component/'; }
	
	public function set_acl(){
		$v_user_acl_infor = \E::get( 'obj_curr_module')->setting_user_acl_get(\E::get_session('usr_id'));
		if(isset($v_user_acl_infor)){
			$v_user_group_infor = \E::get( 'obj_curr_module')->setting_user_group_get($v_user_acl_infor);
			$v_user_group_access = \E::get( 'obj_curr_module')->setting_group_access_get($v_user_acl_infor);
		}
	
		if(isset($v_user_group_infor)){
			$v_session_acl['access'] = 1;
			$v_session_acl['group_id'] = $v_user_acl_infor;
			$v_session_acl['group_level'] = $v_user_group_infor;
			foreach($v_user_group_access as $v_key => $v_acl){
				if(substr($v_key,0,9)=="group_com"){
					$v_session_acl[$v_key] = $v_acl;
				}
			}
		}else{
			$v_session_acl['access'] = 0;
		}

		\E::set_session($this->get_codename(), $v_session_acl);
	}

	public function auto_set_acl_group($p_info){
		return true;
	}
	
	public function user_add( $p_usr_id, $p_array_param ){}

	public function user_remove( $p_usr_id ){}

	public function user_change_name( $p_usr_id, $p_usr_old_name, $p_usr_new_name ){}
	
	public function get_theme(){
		return \E::get('obj_kernel_config')->get('gui/theme');
	}

	public function get_theme_color(){
		return \E::get('obj_kernel_config')->get('gui/color');
	}

	public function is_able_to_access( $p_usr_id, $p_usr_name){ 

		// Login bypass on action level
		$v_bypass_login = array();

		// Sample bypass set for "forgot" action under "user" component
		$v_bypass_login[] = 'shortlist/test_print';
		$v_bypass_login[] = 'nomination/print_borang';
		$v_bypass_login[] = 'report/print_nom_profile';
		$v_bypass_login[] = 'report/pdf_senarai_ringkas';
		$v_bypass_login[] = 'report/concurrence_cm';
		$v_bypass_login[] = 'report/senarai_pencalonan';
		$v_bypass_login[] = 'report/gazette_list';
		$v_bypass_login[] = 'report/historical_nomlist';
		$v_bypass_login[] = 'report/historical_numaward';
		$v_bypass_login[] = 'report/historical_nomstat';
		$v_bypass_login[] = 'report/historical_successnom';
		$v_bypass_login[] = 'report/historical_age_gender';
		$v_bypass_login[] = 'report/pdf_nomination_source';
		$v_bypass_login[] = 'report/pdf_audit_trail';
		
		$v_current_component_action = \E::get('MOONLIGHT_CURRENT_COMPONENT') . '/' . \E::get('MOONLIGHT_CURRENT_ACTION');
		if ( in_array($v_current_component_action, $v_bypass_login) ){
			return true;
		}

		// Login bypass on component level
		$v_bypass_login_component = array();

		// Sample bypass set for "cronjob" component
		// $v_bypass_login_component[] = 'cronjob';

		if ( in_array(\E::get('MOONLIGHT_CURRENT_COMPONENT'), $v_bypass_login_component) ){
			return true;
		}
	
		// determine access control
		if ( \E::is_anonymous() ){
			return false;
		}else{
			$this->c_usr_id = $p_usr_id;
			$this->c_usr_name = $p_usr_name;
			return true;
		}
	}

	public function __construct( $p_config_path='' ){
		$this->init( __NAMESPACE__, __CLASS__, $p_config_path );
		$this->c_usr_id = \E::get_session('usr_id');
	}
	
	public function get_config( $p_config='' ){
	if ($p_config==''){
		return $this->co_config;
	}else{
		return $this->co_config->get( $p_config );
	}
}
	/*
	 * Check for access right for each component. Read, Add, Edit and Delete
	 * New added acl name. If not pass, will use current comp as default.
	 */
	public function get_right_to_access_component($comp){

		$v_acl_var = "group_com_".$comp;

		//Get acl value stored in session
		unset( $v_acl_val );
		$v_acl_val = \E::get_session($this->get_codename().'/'.$v_acl_var);

		if ($v_acl_val==0) {
			return 'none';
		}else{
			return '';
		}
	}

	public function get_right_to_access_nomination($p_access){
		unset( $v_acl_val );
		$v_acl_val = \E::get_session($this->get_codename().'/group_id');

		if ($v_acl_val==7 || $v_acl_val==$p_access) {
			return '';
		}else{
			return 'd-none';
		}
	}
	/*
	 * Check for access right for each component. Read, Add, Edit and Delete
	 * New added acl name. If not pass, will use current comp as default.
	 */
	public function get_right_to_access( $p_action = 'read' , $p_acl_name=NULL ){
		if(is_null($p_acl_name)){
			$v_current_component 		= \E::get('MOONLIGHT_CURRENT_COMPONENT');
			$v_current_component_action = \E::get('MOONLIGHT_CURRENT_COMPONENT') . '/' . \E::get('MOONLIGHT_CURRENT_ACTION');

			//Build acl variable name in used in session
			$v_acl_var_postfix = str_replace( " ", "_", trim($v_current_component) );
			$v_acl_var = "group_com_".$v_acl_var_postfix;
		}else{
			$v_acl_var = "group_com_".$p_acl_name;
		}

		//Get acl value stored in session
		unset( $v_acl_val );
		$v_acl_val = \E::get_session($this->get_codename().'/'.$v_acl_var);

		//Convert acl value into binary (4 digit binary)
		$v_tmp_val = substr( "0000".decbin($v_acl_val), -4 );

		//Turn the binary code to array
		$v_acl_arr = str_split( $v_tmp_val );

		//cell 0 = delete, 1 = edit, 2 = add, 3 = read
		switch( strtolower( $p_action ) ){
			case "read":
				$v_acl_check = $v_acl_arr[3];
				break;
			case "add":
				$v_acl_check = $v_acl_arr[2];
				break;
			case "edit":
				$v_acl_check = $v_acl_arr[1];
				break;
			case "delete":
				$v_acl_check = $v_acl_arr[0];
				break;
		}

		if($v_acl_check==1){
			return true;
		}else{
			return false;
		}
	}

	/**
	 * Get Component listing in current module.
	 *
	 * @access public
	 * @param string $p_array_ignore_comp Which folder to ignore.
	 */
	public function get_component_list($p_array_ignore_comp=NULL){
		$v_path = MOONLIGHT_MODULE_PATH . \E::get( 'obj_curr_module')->get_component_folder();
		$v_array_components=\U::get_all_dirs_name($v_path);
		if(!empty($p_array_ignore_comp)){
			foreach($v_array_components as $compName){
				if(!in_array($compName,$p_array_ignore_comp)){
					$v_array_components_final[]=$compName;
				}
			}
		}else{
			$v_array_components_final=$v_array_components;
		}
		return $v_array_components_final;
	}

	public function get_component_acl_list(){
		$v_ignore_list = array("cronjob","home","share");
		return $this->get_component_list( $v_ignore_list );
	}

	public function paging_build($o_kernel_lang, $p_total_rows, $p_rows_per_page, $p_page_num, $p_js_function='', $p_param="", $p_align="center", $p_display_total=1, $p_display_label=1 ){
		if($p_align=="")	$p_align="center";
		
		if ( substr( $p_param, 0, 1 )=='?' ){
			$p_param = "&" . substr( $p_param, 1 );
		}
		
		$active_icon = "NAV_ACT_";
		$inactive_icon = "NAV_INACT_";
		
		$max_pages = ceil($p_total_rows/$p_rows_per_page);
		$max_pages = ($max_pages == 0) ? 1 : $max_pages;
		
		$self = $_SERVER['REDIRECT_URL'];
		
		if ($p_js_function!='')	$txt_box_link = $p_js_function."(\"$self?page=\"+this.value+\"$p_param\")";
		else	$txt_box_link = "window.location=\"$self?page=\"+this.value+\"$p_param\"";
		
		$page_box = "<input class='mb-0' type=text name='p_page_num' value='$p_page_num' maxlength=5 size=1 style='padding:0px;width:40px;text-align:center' onBlur='javascript:if(isNaN(this.value)||this.value<1 || this.value>" . $max_pages . "){this.value=$p_page_num}else if (this.value!=\"$p_page_num\"){ $txt_box_link }'>";
		
		$page_n_of_x = str_replace('<n>',$page_box,$o_kernel_lang->get('PG_PAGE_N_OF_X'));
		$page_n_of_x = str_replace('<x>','<b>'.$max_pages.'</b>',$page_n_of_x);
		$page_n_of_x = '<li">' . $page_n_of_x . '</li>';
		
		// FIRST and PREV link
		if ($p_page_num > 1 ){
			// active link
			$page = $p_page_num - 1;
			
			$v_url = $self.'?page='.$page.$p_param;
			if ($p_js_function!=''){
			  $v_url = 'javascript:'.$p_js_function.'(\''.$v_url.'\')';
			}
			$prev  = '<li class="page-item">';
			$prev .= '<a class="page-link" href="'.$v_url.'" TITLE="'.$o_kernel_lang->get('PG_PREVIOUS_PAGE').'">';
			$prev .= '<i class="fa fa-fw fa-angle-left"></i>';
			$prev .= ' '.$o_kernel_lang->get('PG_PREVIOUS_PAGE');
			$prev .= '</a>';
			$prev .= '</li>';
			$prev .= chr(10);
			
			$v_url = $self.'?page=1'.$p_param;
			if ($p_js_function!=''){
			  $v_url = 'javascript:'.$p_js_function.'(\''.$v_url.'\')';
			}
			$first  = '<li class="page-item">';
			$first .= '<a class="page-link" href="'.$v_url.'" TITLE="'.$o_kernel_lang->get('PG_FIRST_PAGE').'">';
			$first .= '<i class="fa fa-fw fa-angle-double-left"></i>';
			$first .= " ".$o_kernel_lang->get('PG_FIRST_PAGE');
			$first .= "</a>";
			$first .= "</li>";
			$first .= chr(10);
		}else{
			// inactive link
			$prev  = '<li class="page-item disabled"><span class="page-link">';
			$prev .= '<i class="fa fa-fw fa-angle-left"></i>';
			$prev .= " ".$o_kernel_lang->get('PG_PREVIOUS_PAGE');
			$prev .= "</span></li>";
			$prev .= chr(10);
			
			$first  = '<li class="page-item disabled"><span class="page-link">';
			$first .= '<i class="fa fa-fw fa-angle-double-left"></i>';
			$first .= " ".$o_kernel_lang->get('PG_FIRST_PAGE');
			$first .= "</span></li>";
			$first .= chr(10);
		}
		
		// NEXT and LAST link
		if ( $p_page_num < $max_pages ){
			// active link
			$page = $p_page_num + 1;
			
			$v_url = $self.'?page='.$page.$p_param;			
			if ($p_js_function!=''){
			  $v_url = 'javascript:'.$p_js_function.'(\''.$v_url.'\')';
			}
			$next  = '<li class="page-item">';
			$next .= "<a href=\"$v_url\" TITLE=\"{$o_kernel_lang->get('PG_NEXT_PAGE')}\">";
			$next .= '<i class="fa fa-fw fa-angle-right"></i>';
			$next .= \R::get_image_tag($active_icon.'NEXT');
			$next .= "</a>";
			$next .= "</li>";
			$next .= chr(10);
			
			$v_url = $self.'?page='.$max_pages.$p_param;
			if ($p_js_function!=''){
			  $v_url = 'javascript:'.$p_js_function.'(\''.$v_url.'\')';
			}
			$last  = '<li class="page-item">';
			$last .= "<a href=\"$v_url\" TITLE='{$o_kernel_lang->get('PG_LAST_PAGE')}'>";
			$last .= '<i class="fa fa-fw fa-angle-double-right"></i>';
			$last .= \R::get_image_tag($active_icon.'LAST');
			$last .= "</a>";
			$last .= "</li>";
			$last .= chr(10);
		}else{
			// inactive link
			$next  = '<li class="page-item disabled"><span class="page-link">';
			$next .= '<i class="fa fa-fw fa-angle-right"></i>';
			$next .= " ".$o_kernel_lang->get('PG_NEXT_PAGE');
			$next .= "</span></li>";
			
			$last  = '<li class="page-item disabled"><span class="page-link">';
			$last .= '<i class="fa fa-fw fa-angle-double-right"></i>';
			$last .= " ".$o_kernel_lang->get('PG_LAST_PAGE');
			$last .= "</span></li>";
			$last .= chr(10);
		}
		
		$total_rec = ($p_display_total==0) ? '' : '<li class="page-item disabled"><span class="page-link">' . $o_kernel_lang->get('PG_TOTAL_RECORDS') . $p_total_rows . '</span></li>';
		
		$v_page_html = '<ul class="pagination justify-content-center">';
		$v_page_html .= $first . $prev . $total_rec . $next . $last ;
		$v_page_html .= '</ul>';
		$v_page_html .= chr(10).chr(13);
		$v_page_html .= '<ul class="pagination justify-content-center">';
		$v_page_html .= $page_n_of_x ;
		$v_page_html .= '</ul>';
		$v_page_html .= chr(10).chr(13);
		
		return $v_page_html;
	}

	public function __call($name, $arguments){
		$v_namespace = "\\". __NAMESPACE__ . "\\"; /* Using namespace to allow duplicate modules in single project */
		$v_temp_arr = explode("_",$name);
		$v_temp_arr = array_reverse( $v_temp_arr );
		$v_temp_name = array_pop( $v_temp_arr );
		$v_temp_name = strtolower($v_temp_name);
		$v_module_code=\E::get('obj_curr_module')->get_config()->get('general/module_code');
		$v_cls_name_prefix = $v_namespace.$v_module_code."_";
		// moonlight_autoload_class( $v_cls_name_prefix.$v_temp_name );
		$v_count = 0;  /* Set a limit to avoid endless loop */
		$v_continue = ( class_exists( $v_cls_name_prefix.$v_temp_name) && method_exists( $v_cls_name_prefix.$v_temp_name, $name ));
		while(!$v_continue){
			$v_temp_val = array_pop( $v_temp_arr );
			if(empty($v_temp_val)){ /* If is null mean last item in the array or not array, stop loop */
				break;
			}
			// moonlight_autoload_class( $v_cls_name_prefix.$v_temp_name );
			if(class_exists( $v_cls_name_prefix.$v_temp_name) && method_exists( $v_cls_name_prefix.$v_temp_name, $name )){
				break;
			}
			$v_temp_name .= "_".$v_temp_val;
			$v_temp_name = strtolower($v_temp_name);
			if(strtoupper($v_temp_name)==strtoupper($name)){ /* Stop the loop when the key is already same as the estimate class name */
				break;
			}
			$v_count++;
			if($v_count>5){
				break;
			}
		}

		$v_call_obj = $v_cls_name_prefix.$v_temp_name;
		if(!isset($this->co_obj[$v_temp_name])){
			$this->co_obj[$v_temp_name] = new $v_call_obj($this->co_db);
		}
		if(isset($this->co_obj[$v_temp_name])){
			return call_user_func_array(array($this->co_obj[$v_temp_name], $name), $arguments);
		}
	}
}
?>