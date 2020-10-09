 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<style>
		.login-block{

			background: #284253  /* fallback for old browsers */
		/*	background: -webkit-linear-gradient(white,#284253);*/  /* Chrome 10-25, Safari 5.1-6 */
			/*background: linear-gradient(white,#284253); *//* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
			width:100%;
			height:100%;
			padding : 150px 0;
			background-image: url("/app/sams/trunk/module/demo/web/theme/system/res/Picture1.png"); 
	
			background: #FFFFFF;
			width:100%;
			height:100%;
			padding : 120px 0;

		}
		.container{
			
		/*	background:#fff;*/
			border-radius: 10px;
			box-shadow:15px 20px 0px rgba(0,0,0,0.1);
			background-image: url("/app/sams/trunk/module/demo/web/theme/system/res/Picture1.png"); 
		}

		#testclass{
			background-image: url("<?php echo MOONLIGHT_FOLDER_PATH . 'module/system/web/theme/' . \E::get('obj_curr_module')->get_theme() . '/res/test.jpg'; ?>");
		  	padding: 25px;
		  	background-repeat: no-repeat;
		  	background-size: auto;	
		  	width: 90%;	
		  	height: 100%;
		  	margin-left: 100px;	
		  	margin-bottom: 10px;
		  	border-radius: 15px;
		}		
		.carousel-inner{
			border-radius:0 10px 10px 0;
		}
		.login-sec{
			padding: 60px 30px;
			position:relative;
			background-color: #201b4f;
			height: 500px;
			border-radius: 15px;
		}
		.login-sec .copy-text{
			position:absolute;
			width:80%;
			bottom:20px;
			font-size:13px;
			text-align:center;
		}
		.login-sec .copy-text a{
			color:#000000;
		}
		.login-sec h2{
			margin-bottom:30px;
			font-size:30px;
			color: #000000;
			float: left;
		}

		#mainrows{
			margin-right: -200px;
    		margin-left: 5px;
    		margin-top: 25px;
		}

	</style>
	<head>

		<meta http-equiv=content-type content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php 
		if(isset($v_html_head)){
			echo \V::output_variable($v_html_head);
		}
		?>
	</head>
	<body class="bg-light" onLoad="if (window.runOnLoad){runOnLoad()}" style="">
		<img src="">
		
		<?php
		if(isset($v_body)){
			echo \V::output_variable($v_body);
		}
		?>
	</body>
</html>