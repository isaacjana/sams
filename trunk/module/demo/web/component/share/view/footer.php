<?php
if (\E::get('obj_curr_module')->get_right_to_access_component('setting')=='none') {
	$display='d-none';
}else {
	$display='';
}

?>
<footer class="fixed-bottom bg-white">
	
	<div style="display: flex;float: right;height: 100%;align-items: center;">
		copyright 2020 @ Sarawak Information System
	</div>
	<div style="display: flex;height: 100%;align-items: center;">
		<div class="footer-menu <?php echo $display ?>">
			<a href="<?php echo \E::get('obj_curr_module')->build_action_path('setting','index'); ?>" class="footer-menu"><?php echo \E::get( 'obj_system_module')->get_image_tag('setting.png'); ?></a>
		</div>
		<div class="footer-menu">
			<a href="#" class="footer-menu"><?php echo \E::get( 'obj_system_module')->get_image_tag('usermanual.png'); ?></a>
		</div>
		<div class="footer-menu">
			<a href="#" class="footer-menu"><?php echo \E::get( 'obj_system_module')->get_image_tag('email.png'); ?></a>
		</div>

	</div>
</footer>