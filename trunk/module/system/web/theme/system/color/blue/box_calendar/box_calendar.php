<style>.box_calendar_container{	width:99%;	margin-top:10px;	margin-bottom:10px;}.box_calendar_container .box_calendar{	background-color:#29527E;	color:#ffffff;}.box_calendar_container .box_calendar_img{	background-color:#29527E;	height:100px;}.box_calendar_container .box_calendar .title{	font-size:14px;	font-weight:bold;	color:#ffffff;}.box_calendar_container .box_calendar .content,.box_calendar_container .box_calendar .content TD,.box_calendar_container .box_calendar .content FIELDSET,.box_calendar_container .box_calendar .content LEGEND{	color:#4E5F72;	font-weight:bold;}</style><?php$v_box_img_path .= 'box_calendar/';?><div class="box_calendar_container">	<table border="0" cellpadding="0" cellspacing="0" width="100%" >		<tr>			<td width="1%"><img src="<?php echo $v_box_img_path; ?>box_corner_top_left.gif"></td>			<td width="98%" background="<?php echo $v_box_img_path; ?>box_border_top.gif"></td>			<td width="1%"><img src="<?php echo $v_box_img_path; ?>box_corner_top_right.gif"></td>		</tr>		<tr width=100%>			<td width="100%" class="box_calendar" colspan="3" >				<br>			</td>		</tr>		<tr width=100%>			<td class="box_calendar_img" colspan="3" valign="bottom" background="<?php echo $v_box_img_path; ?>calendar.jpg">				<br>			</td>		</tr>		<tr width=100%>			<!--<td width="1%" background="<?php echo $v_box_img_path; ?>box_border_left.gif"><br></td>-->			<td width="100%" class="box_calendar" colspan="3">				<div class="title" ><?php echo $v_box_title; ?></div>				<div class="content"><?php echo $v_box_content; ?></div>			</td>			<!--<td width="1%" background="<?php echo $v_box_img_path; ?>box_border_right.gif"><br></td>-->		</tr>		<tr width=100%>			<td width="1%"><img src="<?php echo $v_box_img_path; ?>box_corner_bottom_left.gif"></td>			<td width="98%" background="<?php echo $v_box_img_path; ?>box_border_bottom.gif"></td>			<td width="1%"><img src="<?php echo $v_box_img_path; ?>box_corner_bottom_right.gif"></td>		</tr>	</table></div>