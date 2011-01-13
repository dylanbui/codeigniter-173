<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="description"  content=""/>
<meta name="keywords" content=""/>
<meta name="robots" content="ALL,FOLLOW"/>
<meta name="Author" content="AIT"/>
<meta http-equiv="imagetoolbar" content="no"/>
<title>Administrator: Dashboard</title>

<link rel="stylesheet" href="<?= BASE_URL; ?>css/admin/reset.css" type="text/css"/>
<link rel="stylesheet" href="<?= BASE_URL; ?>css/admin/screen.css" type="text/css"/>
<link rel="stylesheet" href="<?= BASE_URL; ?>css/admin/fancybox.css" type="text/css"/>
<link rel="stylesheet" href="<?= BASE_URL; ?>css/admin/jquery.wysiwyg.css" type="text/css"/>
<link rel="stylesheet" href="<?= BASE_URL; ?>css/admin/jquery.ui.css" type="text/css"/>
<link rel="stylesheet" href="<?= BASE_URL; ?>css/admin/visualize.css" type="text/css"/>
<link rel="stylesheet" href="<?= BASE_URL; ?>css/admin/visualize-light.css" type="text/css"/>
<!--[if IE 7]>
	<link rel="stylesheet" type="text/css" href="<?= BASE_URL; ?>css/admin/ie7.css" />
<![endif]-->	
</head>

<body>

<div class="pagetop">
	<div class="head pagesize"> <!-- *** head layout *** -->
		<div class="head_top">
			<div class="topbuts">
				<ul class="clear">
				<li><a href="#">View Site</a></li>
				<li><a href="#">Messages</a></li>
				<li><a href="#">Settings</a></li>
				<li><a href="<?= BASE_URL; ?>adm_administrator/auth/logout" class="red">Logout</a></li>
				</ul>
				
				<div class="user clear">
					<img src="<?= BASE_URL; ?>images/admin/avatar.jpg" class="avatar" alt="" />
					<span class="user-detail">
						<span class="name">Welcome Arnold</span>
						<span class="text">Logged as admin</span>
						<span class="text">You have <a href="#">5 messages</a></span>
					</span>
				</div>
			</div>
			
			<div class="logo clear">
			<a href="index.html" title="View dashboard">
				<img src="<?= BASE_URL; ?>images/admin/logo_earth.png" alt="" class="picture" />
				<span class="textlogo">
					<span class="title">TERMINATOR</span>
					<span class="text">admin template</span>
				</span>
			</a>
			</div>
		</div>
		
		<!-- *** render file menu.html *** -->
		<?php echo Modules::run('adm_administrator/dashboard/menubar'); ?>		
		
	</div>
</div>

<!-- *** render file breadcrumb.html *** -->

<!-- *** mainpage layout ***  <div class="main pagesize"> -->

<div class="main pagesize"> <!-- *** mainpage layout *** -->
	<div class="main-wrap">
		<div class="page clear">

			<?php echo $main_content; ?>

		</div><!-- end of page -->
	</div>
</div>

<div class="footer">
	<div class="pagesize clear">
		<p class="bt-space15"><span class="copy"><strong>© 2010 Copyright by <a href="mailto:buivantienduc@yahoo.com">Bui Van Tien Duc</a></strong></span> Powered by <a href="mailto:buivantienduc@yahoo.com">SITE ADMIN.</a></p>
		<img src="<?= BASE_URL; ?>images/admin/logo_earth_bw50.png" alt="" class="block center" />
	</div>
</div>

<script type="text/javascript" src="<?= BASE_URL; ?>js/jquery.js"></script>
<script type="text/javascript" src="<?= BASE_URL; ?>js/jquery.visualize.js"></script>
<script type="text/javascript" src="<?= BASE_URL; ?>js/jquery.wysiwyg.js"></script>
<script type="text/javascript" src="<?= BASE_URL; ?>js/tiny_mce/jquery.tinymce.js"></script>
<script type="text/javascript" src="<?= BASE_URL; ?>js/jquery.fancybox.js"></script>
<script type="text/javascript" src="<?= BASE_URL; ?>js/jquery.idtabs.js"></script>
<script type="text/javascript" src="<?= BASE_URL; ?>js/jquery.datatables.js"></script>
<script type="text/javascript" src="<?= BASE_URL; ?>js/jquery.jeditable.js"></script>
<script type="text/javascript" src="<?= BASE_URL; ?>js/jquery.ui.js"></script>
<script type="text/javascript" src="<?= BASE_URL; ?>js/jquery.jcarousel.js"></script>
<script type="text/javascript" src="<?= BASE_URL; ?>js/jquery.validate.js"></script>

<script type="text/javascript" src="<?= BASE_URL; ?>js/excanvas.js"></script>
<script type="text/javascript" src="<?= BASE_URL; ?>js/cufon.js"></script>
<script type="text/javascript" src="<?= BASE_URL; ?>js/Zurich_Condensed_Lt_Bd.js"></script>
<script type="text/javascript" src="<?= BASE_URL; ?>js/script.js"></script>

<script type="text/javascript">

  	var _gaq = _gaq || [];
  	_gaq.push(['_setAccount', 'UA-12958851-8']);
  	_gaq.push(['_trackPageview']);

  	(function() {
    	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  	})();

</script>

</body>
</html>
