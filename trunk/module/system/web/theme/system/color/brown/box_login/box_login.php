<style>.box_login_container{	padding-top:5px;	width:99%;	margin-top:10px;}.box_login_container .box_profile{	padding:5px;	background-color:#8A8F95;	margin-top:5px;		margin-right:5px;	color:#ffffff;}.box_login_container .box_profile .title{	font-size:14px;	font-weight:bold;	color:#ffffff;	padding-bottom:5px;	border-bottom:1px solid #ffffff;}.box_login_container .box_profile .content,.box_login_container .box_profile .content TD,.box_login_container .box_profile .content FIELDSET,.box_login_container .box_profile .content LEGEND{	color:#ffffff;}</style><?php$v_box_img_path .= 'box_login/';?><div class="box_login_container">	<center>	<table border="0" cellpadding="0" cellspacing="0" width="<?php echo $v_box_width; ?>" >		<tr>			<td width="1%"><img src="<?php echo $v_box_img_path; ?>box_corner_top_left.gif"></td>			<td width="98%" background="<?php echo $v_box_img_path; ?>box_border_top.gif"></td>			<td width="1%"><img src="<?php echo $v_box_img_path; ?>box_corner_top_right.gif"></td>		</tr>		<tr width=100%>			<td width="1%" background="<?php echo $v_box_img_path; ?>box_border_left.gif"><br></td>			<td width="98%" class="box_profile">				<div class="title" ><?php echo $v_box_title; ?></div>				<div class="content"><?php echo $v_box_content; ?></div>			</td>			<td width="1%" background="<?php echo $v_box_img_path; ?>box_border_right.gif"><br></td>		</tr>		<tr width=100%>			<td width="1%"><img src="<?php echo $v_box_img_path; ?>box_corner_bottom_left.gif"></td>			<td width="98%" background="<?php echo $v_box_img_path; ?>box_border_bottom.gif"></td>			<td width="1%"><img src="<?php echo $v_box_img_path; ?>box_corner_bottom_right.gif"></td>		</tr>	</table>	</center></div>