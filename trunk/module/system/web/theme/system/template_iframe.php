<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><meta http-equiv=content-type content="text/html; charset=utf-8"><html><head><?php 	if(isset($v_html_head)){		echo \V::output_variable($v_html_head);	}?></head><body class="themeMain" onLoad="if (window.runOnLoad){runOnLoad()}" style='width:100%;height:auto;'><?phpif(isset($v_html_common)){ echo \V::output_variable($v_html_common);  /*include "require_div.php";*/ } ?><center>	<table cellspacing="0" border="0" cellpadding="0" width='100%'>	<tr>		<td id="themeBody" class="themeBody" <?PHP			if (isset($v_main_body_style)  && is_array($v_main_body_style) ){				echo ' style="' . \V::output_variable($v_main_body_style) . '"';			}else{				echo '';			}		?>>			<table cellpadding="0" cellspacing="0" border="0" width="100%">			<tr>				<?php					// body centre					echo '<td id="themeBodyCentre" class="themeBodyCentre"';					if (isset($v_body_style)  && is_array($v_body_style) ){						echo ' style="' . \V::output_variable($v_body_style) . '"';					}					echo '>';					echo \V::output_variable($v_body);					echo '</td>';				?>			</tr>			</table>		</td>	</tr>	</table></center><?phpif(isset($v_page_end)){	echo \V::output_variable($v_page_end);} ?></body></html>