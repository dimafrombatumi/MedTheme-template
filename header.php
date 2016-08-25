<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	

<script type="Text/Javascript" src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
	 <script src="http://code.jquery.com/jquery-latest.min.js"></script>

<script type="text/javascript" src=src="<?php echo get_template_directory_uri(); ?>/js/jquery.sudoSlider.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/easing.js" type="text/javascript"></script>
<!-- UItoTop plugin -->
<script src="http://wordpress/wp-content/themes/mytheme/js/jquery.ui.totop.js" type="text/javascript"></script>
<!-- Starting the plugin -->
<title>Клиника сной</title>
<meta http-equiv="Content-Type" content="text/xml; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="http://wordpress/wp-content/themes/mytheme/style.css">

<!-- jquery -->
	<script type="text/javascript">

					//Функция показа
			function show(state){

					document.getElementById('window').style.display = state;			
					document.getElementById('wrap').style.display = state; 			
			}
			
		</script>
</head>

<body>

<div id="all">
<div class="head">

		<div id="header_top">

				<img src="http://wordpress/wp-content/themes/mytheme/images/logo.png" width="490" height="103">
				<img class="logo_two" src="http://wordpress/wp-content/themes/mytheme/images/logo2.png" width="400" height="103">
				   <span class="tel">+7(925) 515-17-14<br><span class="tel_desc">горячая линия</span></span>
				   	<ul class="socials_ico">
				   		<li><a href="#"><img class="soc_img" src="http://wordpress/wp-content/themes/mytheme/images/youtube.png" width="32" height="32"></a></li>	
				   		<li><a href="#"><img class="soc_img" src="http://wordpress/wp-content/themes/mytheme/images/facebook.png" width="32" height="32"></a></li>	
				   		<li><a href="#"><img class="soc_img" src="http://wordpress/wp-content/themes/mytheme/images/vkontakte.png" width="32" height="32"></a></li>	

				   	</ul>

			

</div>
<div class="menu_top_wrap">
						<div id="menu_top">
<?php 
wp_nav_menu( array(
	'menu_class'=>'menu',
    'theme_location'=>'top',
    'after'=>''
) );
?>

							</div>
								<a href="#"><span  onclick="show('block')" class="myButton online_zakaz top_zakaz">ЗАПИСЬ НА ПРИЕМ</span></a>	
			</div>
			</div>