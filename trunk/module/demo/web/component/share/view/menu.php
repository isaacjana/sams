<?php
$v_menu_items = array(
					0=>array(
							'label'=>'Dashboard',
							'url'=>MOONLIGHT_FOLDER_PATH,
							'comp'=>'home',
							'action'=>'index',
							'display'=>\E::get('obj_curr_module')->get_right_to_access_component('dashboard'),
							'iconinactive'=>\E::get( 'obj_system_module')->get_image_tag('dashg.png'),
							'iconactive'=>\E::get( 'obj_system_module')->get_image_tag('dashb.png')
						),
					1=>array(
							
							'label'=>'Nomination',
							'url'=>\E::get('obj_curr_module')->build_action_path('nomination','index'),
							'comp'=>'nomination',
							'action'=>'index',
							'display'=>\E::get('obj_curr_module')->get_right_to_access_component('nomination'),
							'iconinactive'=>\E::get( 'obj_system_module')->get_image_tag('nomg.png'),
							'iconactive'=>\E::get( 'obj_system_module')->get_image_tag('nomb.png')
						),
					2=>array(
							
							'label'=>'Committee Decision',
							'url'=>\E::get('obj_curr_module')->build_action_path('shortlist','index'),
							'comp'=>'shortlist',
							'action'=>'index',
							'display'=>\E::get('obj_curr_module')->get_right_to_access_component('shortlist'),
							'iconinactive'=>\E::get( 'obj_system_module')->get_image_tag('shortg.png'),
							'iconactive'=>\E::get( 'obj_system_module')->get_image_tag('shortb.png')
						),
					3=>array(
							
							'label'=>'Award Invitation',
							'url'=>\E::get('obj_curr_module')->build_action_path('attendance','index'),
							'comp'=>'attendance',
							'action'=>'index',
							'display'=>\E::get('obj_curr_module')->get_right_to_access_component('attendance'),
							'iconinactive'=>\E::get( 'obj_system_module')->get_image_tag('attg.png'),
							'iconactive'=>\E::get( 'obj_system_module')->get_image_tag('attb.png')
						),
					4=>array(
							
							'label'=>'Report',
							'url'=>\E::get('obj_curr_module')->build_action_path('report','index'),
							'comp'=>'report',
							'action'=>'index',
							'display'=>\E::get('obj_curr_module')->get_right_to_access_component('report'),
							'iconinactive'=>\E::get( 'obj_system_module')->get_image_tag('repg.png'),
							'iconactive'=>\E::get( 'obj_system_module')->get_image_tag('repb.png')
						),
				);

function menu_generate($p_menu_items, $p_level=1){
	$v_menu_html = '';
	$v_show = 'n';
	if($p_level>2){
		$v_space = $p_level * 2;
	}else{
		$v_space = 1;
	}
	if(is_array($p_menu_items)){
		foreach($p_menu_items as $v_menu_item){
			$v_active = 'n';
			if(isset($v_menu_item['sub'])){
				$v_sub_html = menu_generate($v_menu_item['sub'], $p_level + 1);
				
				$v_temp = explode('@', $v_sub_html);
				
				$v_show = $v_temp[0];

				$v_sub_id = str_ireplace(' ','_',$v_menu_item['label']);
				$v_sub_id = 'sm_'.$v_sub_id;
				$v_menu_html .= '<li>';
                $v_menu_html .= '<a href="#'.$v_sub_id.'" data-toggle="collapse"';
				if($v_show=='y'){
					$v_menu_html .= ' aria-expanded="true"';
					$v_menu_html .= '>';
					if(isset($v_menu_item['iconinactive']) && $v_menu_item['iconinactive']!=''){
						$v_menu_html .= $v_menu_item['iconactive'].'<br>';
					}
				}else{
					$v_menu_html .= '>';
					if(isset($v_menu_item['iconinactive']) && $v_menu_item['iconinactive']!=''){
						$v_menu_html .= $v_menu_item['iconinactive'].'<br>';
					}
				}
				$v_menu_html .= str_repeat('&nbsp;', $v_space).$v_menu_item['label'];
                $v_menu_html .= '</a>';
                $v_menu_html .= '<ul id="'.$v_sub_id.'" class="list-unstyled collapse';
				if($v_show=='y'){
					$v_menu_html .= ' show';
				}
				$v_menu_html .= '">';
				$v_menu_html .= $v_temp[1];
				$v_menu_html .= '</ul>';
                $v_menu_html .= '</li>';
			}else{
				if(isset($v_menu_item['comp']) && $v_menu_item['comp']==\E::get('MOONLIGHT_CURRENT_COMPONENT')){
					$v_active = 'y';
				}
				if(isset($v_menu_item['display'])){
					if ($v_menu_item['display']=='none') {
						$v_display='d-none';
					}else{
						$v_display='';
					}
				}
				if(isset($v_menu_item['action'])){
					if(($v_menu_item['comp']==\E::get('MOONLIGHT_CURRENT_COMPONENT'))){
						$v_active = 'y';
					}else{
						$v_active = 'n';
					}
				}
				if($v_show=='n' && $v_active=='y'){
					$v_show = 'y';
				}

				$v_menu_html .= '<li class="'.$v_display.' ';
				if($v_active=='y'){
					$v_menu_html .= ' active"';

					$v_menu_html .= '>';
					$v_menu_html .= '<a href="' . $v_menu_item['url'] . '">';
					if(isset($v_menu_item['iconinactive']) && $v_menu_item['iconinactive']!=''){
						$v_menu_html .= $v_menu_item['iconactive'].'<br>';
					}
				}else{

					$v_menu_html .= '">';
					$v_menu_html .= '<a href="' . $v_menu_item['url'] . '">';
					if(isset($v_menu_item['iconinactive']) && $v_menu_item['iconinactive']!=''){
						$v_menu_html .= $v_menu_item['iconinactive'].'<br>';
					}
				}

				
				$v_menu_html .= $v_menu_item['label'];
				$v_menu_html .= '</a></li>';
			}
		}
	}
	return $v_show . '@' . $v_menu_html;
}

$v_temp = menu_generate($v_menu_items);
$v_temp_arr = explode('@', $v_temp);
$v_menu_html = $v_temp_arr[1];
?>
<div class="sidebar sidebar-light bg-white">
	<ul class="list-unstyled">
		<?php
		echo $v_menu_html;
		?>
	</ul>
</div>