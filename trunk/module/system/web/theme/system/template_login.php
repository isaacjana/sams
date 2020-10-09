<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv=content-type content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php 
		if(isset($v_html_head)){
			echo \V::output_variable($v_html_head);
		}
		?>
	</head>
	<body class="bg-light" onLoad="if (window.runOnLoad){runOnLoad()}">
		<?php
		if(isset($v_body)){
			echo \V::output_variable($v_body);
		}
		?>
	</body>
</html>