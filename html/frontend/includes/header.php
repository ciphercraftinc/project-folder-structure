<?php
	$compression = false;
	include("config.php");
	include("functions.php");
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />
	<meta http-equiv="Cache-control" content="public">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="format-detection" content="telephone=no" />
	<meta name="distribution" content="global">
	<meta name="revisit-after" content="1 days">
	<meta name="robots" content="index, follow" />
	<title><?php echo $PageTitle; ?></title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="keyword" content="">
	<link rel="alternate" href="<?php echo SITE_URL; ?>" />
	<link rel=canonical href="<?php echo SITE_URL; ?>">
	<meta name="msapplication-navbutton-color" content="<?php echo SITE_THEME ?>">
	<meta name="msapplication-TileColor" content="<?php echo SITE_THEME ?>">
	<meta name="theme-color" content="<?php echo SITE_THEME ?>">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo SITE_CSS ?>style.css<?php echo VER ?>" />
</head>
<body class="scrollapply" id="my-scrollbar">
<div id="myoffice_loading_containre" class="myoffice_loading"><img id="myoffice_loading" src="<?php echo SITE_IMAGES ?>animation.svg<?php echo VER ?>"></div>
<div>
	<div class="fixed_toprightlayer" style="background-image: url('<?php echo SITE_IMAGES ?>pattern_hero_right.svg<?php echo VER ?>');"></div>
	<header class="animation_part">
		<div class="nav_container">
			<div class="nav_holder">
				<div class="d-flex align-items-center leftlinks">
					<a href="javascript:;" class="d-flex align-items-center menulinkhambgurg">
						<div class="menu_icon"><img src="<?php echo SITE_IMAGES ?>ico_hamburger_menu.svg<?php echo VER ?>"></div>
						<div class="menuicon_title">Menu</div>
					</a>
					<div class="links_holder">
						<a href="javascript:;">How It Works</a>
						<a href="javascript:;">About</a>
					</div>
				</div>
				<div class="centerlinks">
					<a href="javascript:;" class="logo"><img src="<?php echo SITE_IMAGES ?>logo.svg<?php echo VER ?>"></a>
				</div>
				<div class="d-flex align-items-center justify-content-end rightlinks">
					<a href="javascript:;" class="d-flex align-items-center call_icon_imghvr">
						<div class="menu_icon_call"><img src="<?php echo SITE_IMAGES ?>ico_call_icon.svg<?php echo VER ?>"></div>
						<div class="freequote"><span>Get A Free Quote</span><div>1 800 000 0000</div></div>
					</a>
					<a href="javascript:;" class="loginboxright">
						<span class="login_icon"><img src="<?php echo SITE_IMAGES ?>ico_login.svg<?php echo VER ?>"></span>
						<span class="login_txt">Login</span>
					</a>
				</div>
			</div>
		</div>
	</header>