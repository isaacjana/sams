<?php
echo  '<div>' . \E::get( 'obj_curr_module')->get_image_tag('banner.png') . '</div>';
echo  '<div style="font-size:74px; font-weight:bold; margin-top:-100px; color:#FFFFFF; text-align:right;">moonlight</div>';
echo  '<div style="font-size:24px; font-weight:bold; margin-top:-24px; color:#000000; text-align:right; margin-right:130px;">framework</div>';
echo  "<div style='background:#004080;padding:5px; margin:0px; border:0px solid #ff0000; height:24px;'>";
	echo  "<div style='float:left; color:white; '>". $o_kernel_lang->get('WELCOME') . ', ' . \E::get_session('full_name')."</div>";
	if ( ! \E::is_anonymous() ){ 
		echo '<div style="float:right; ">' . \E::get( 'obj_system_module')->get_logout_tag() . '</div>';
	}
	echo  '<div style="clear:both;"></div>';
echo  '</div>';
?>