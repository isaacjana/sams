<h2 class="mb-4">User Profile</h2>
<a href="<?php echo \E::get( 'obj_curr_module')->build_action_path('user','add');?>" class="mb-4 btn btn-primary" role="button">
	<i class="fa fa-fw fa-plus"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_ADD'); ?>
</a>
<div class='card mb-4'>
	<div class="card-body">
		<div class="form-group row">
			<label for="usr_name" class="col-sm-2 col-form-label"><?php echo \E::get('obj_system_lang')->get('USER_NAME'); ?></label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="usr_name" id="usr_name" placeholder="full name">
			</div>
		</div>
		<div class="form-group row">
			<label for="usr_email" class="col-sm-2 col-form-label"><?php echo \E::get('obj_system_lang')->get('USER_EMAIL'); ?></label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="usr_email" id="usr_email" placeholder="mail@mail.com">
			</div>
		</div>
		<div class="form-group row">
			<div class="col-sm-2"></div>
			<div class="col-sm-10">
				<a href="javascript:search();" class="btn btn-primary" role="button">
					<i class="fa fa-fw fa-search"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_SEARCH'); ?>
				</a>
				<a href="javascript:rec_list('')" class="btn btn-danger" role="button">
					<i class="fa fa-fw fa-times"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_RESET'); ?>
				</a>
			</div>
		</div>
	</div>
</div>

<div class='card mb-4'>
	<div class="card-body">
		<div id="div_listing_area"></div>
	</div>


<?PHP
\I::load_error();
?>

<script language="javascript">
var v_list_url = '<?php echo \E::get('obj_curr_module')->build_action_path('user','list_ajax'); ?>';
var v_cookie_name = "<?php echo \U::generateUniqueCookieName(MOONLIGHT_DNS_PATH.MOONLIGHT_FOLDER_PATH); ?>_admin_list_user";

$(document).ready(
	function()
	{
			v_url = getLocalStorage( v_cookie_name );
			rec_list(v_url);
			if(v_url!=""){
				v_usr_name = getUrlQueryItem( "usr_name", v_url );
				if(v_usr_name!=""){
					document.getElementById('usr_name').value = v_usr_name;
				}

				v_usr_email = getUrlQueryItem( "usr_email", v_url );
				if(v_usr_name!=""){
					document.getElementById('usr_email').value = v_usr_email;
				}
			}
    }
)

function rec_list(p_url){
	if (p_url==''){
		p_url = v_list_url;
		document.getElementById('usr_name').value="";
		document.getElementById('usr_email').value="";
	}
	makeGETRequest( p_url, 'div_listing_area', 'reorder_listing' );

	vTodaysDate = new Date();
	vTodaysDate.setDate(62);
	vExpire = vTodaysDate.toGMTString();
	setLocalStorage(v_cookie_name,p_url,vExpire);
}

function del_confirm(p_id){
  if(p_id != ''){
    if(confirm("<?php echo \E::get( 'obj_curr_module_lang')->get('CONFIRM_DELETE')?>")){
      window.location = "<?PHP echo \E::get( 'obj_curr_module')->build_action_path('user','delete'); ?>"+p_id;
    }
  }
}

function search(){
	obj = document.getElementById('usr_name');
	usr_name1 = escape(obj.value);
	obj1 = document.getElementById('usr_email');
	usr_email2 = escape(obj1.value);
	url = v_list_url + '?usr_name=' + usr_name1 + '&usr_email=' + usr_email2;
	rec_list(url);
}

</script>
</div>