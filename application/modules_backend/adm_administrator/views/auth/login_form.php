<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="description"  content=""/>
<meta name="keywords" content=""/>
<meta name="robots" content="ALL,FOLLOW"/>
<meta name="Author" content="AIT"/>
<meta http-equiv="imagetoolbar" content="no"/>
<title>TERMINATOR: Login Page</title>

<link rel="stylesheet" href="<?= base_url(); ?>css/admin/reset.css" type="text/css"/>
<link rel="stylesheet" href="<?= base_url(); ?>css/admin/screen.css" type="text/css"/>
<link rel="stylesheet" href="<?= base_url(); ?>css/admin/fancybox.css" type="text/css"/>
<link rel="stylesheet" href="<?= base_url(); ?>css/admin/jquery.wysiwyg.css" type="text/css"/>
<link rel="stylesheet" href="<?= base_url(); ?>css/admin/jquery.ui.css" type="text/css"/>
<link rel="stylesheet" href="<?= base_url(); ?>css/admin/visualize.css" type="text/css"/>
<link rel="stylesheet" href="<?= base_url(); ?>css/admin/visualize-light.css" type="text/css"/>
<!--[if IE 7]>
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>css/admin/ie7.css" />
<![endif]-->	
</head>

<body class="login">

<div class="login-box">
<div class="login-border">
<div class="login-style">
	<div class="login-header">
		<div class="logo clear">
			<img src="<?= base_url(); ?>images/admin/logo_earth_bw.png" alt="" class="picture" />
			<span class="textlogo">
				<span class="title">ADMINISTRATOR LOGIN</span>
				<span class="text">ZENDVN.CO.CC</span>
			</span>
		</div>
	</div>
	<form action="" method="post">

		<div class="login-inside">

			<div class="notification note-error">
				<a href="#" class="close" title="Close notification">close</a>
				<p><strong>Error notification:</strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>	
			
			<div class="login-data">
				<div class="row clear">
					<label for="user">Username:</label>
    					<input type="text" value="admin" size="25" class="text" id="user" />
    				</div>
 				<div class="row clear">
					<label for="password">Password:</label>
					<input type="password" value="password" size="25" class="text" id="password" />
				</div>
				<input type="submit" name="btnSubmit" class="button" value="Login" />
			</div>
			<p>&nbsp;</p>
		</div>
		<div class="login-footer clear">
			<span class="remember">
				<input type="checkbox" class="checkbox" checked="checked" id="remember" /> <label for="remember">Remember</label>
			</span>
			<a href="#" class="button green fr-space">Back to Page</a>
		</div>
	</form>

</div>
</div>
</div>

<div class="login-links">
	<p><strong>&copy; 2010 Copyright by <a href="http://www.zonemafia.info/">ZONEMAFIA.INFO</a></strong> All rights reserved.</p> 
</div>

<script type="text/javascript" src="<?= base_url(); ?>js/jquery.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>js/jquery.visualize.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>js/jquery.wysiwyg.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>js/tiny_mce/jquery.tinymce.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>js/jquery.fancybox.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>js/jquery.idtabs.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>js/jquery.datatables.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>js/jquery.jeditable.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>js/jquery.ui.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>js/jquery.jcarousel.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>js/jquery.validate.js"></script>

<script type="text/javascript" src="<?= base_url(); ?>js/excanvas.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>js/cufon.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>js/Zurich_Condensed_Lt_Bd.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>js/script.js"></script>

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
