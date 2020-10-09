<h2 class="mb-4">User Group</h2>
<a href="<?php echo \E::get( 'obj_curr_module')->build_action_path('user_group','add');?>" class="mb-4 btn btn-primary" role="button">
	<i class="fa fa-fw fa-plus"></i>&nbsp;<?php echo \E::get('obj_kernel_lang')->get('BTN_ADD'); ?>
</a>
<div class='card mb-4'>
	<div class="card-body">
		<div id="div_listing_area"></div>
	</div>

<script language="javascript">
$(document).ready(
	function(){
		rec_list('<?php echo \E::get( 'obj_curr_module')->build_action_path('user_group','list_ajax') ?>');
	}
)

function rec_list(p_url){
	if (p_url!=''){
		makeGETRequest( p_url, 'div_listing_area' );
	}
}

function del_confirm(p_id){
	if(p_id != ''){
		if(confirm("<?php echo \E::get( 'obj_curr_module_lang')->get('CONFIRM_DELETE')?>")){
			window.location = "<?PHP echo \E::get( 'obj_curr_module')->build_action_path('user_group','delete'); ?>"+p_id;
		}
	}
}

function add_new(){
	window.location="<?php echo \E::get( 'obj_curr_module')->build_action_path('user_group','add')?>";
}
</script>
</div>