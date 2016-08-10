<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title('|',true,'right'); ?></title>
	<script>document.cookie='resolution='+Math.max(screen.width,screen.height)+'; path=/';</script>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
	<meta name="google-site-verification" content="-OooDRSTRlh6K7lhPYLWDNdjVD_tf24k0MvkGqZr5yM" />
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" type="image/ico"/>
	<style>
	@-o-viewport{width:device-width;}
	@-ms-viewport{width:device-width;}
	@viewport{width:device-width;}
	*{margin:0;padding:0;-webkit-text-size-adjust:100%;}
	*,*:before,*:after{-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box;}
	body,html{margin:0;padding:0;}
	body{position:relative;font-size:12pt;font-family:'Open Sans',sans-serif;}
	.container{width:1120px;margin:0 auto;position:relative;}
	.cf:before,.cf:after{content:"";display:table;}
	.cf:after{clear:both;}
	.cf{zoom:1;}
	p,ul,ol{margin-bottom:20px;}
	img{max-width:100%;height:auto;}
	body>header{background:#151515;color:#fff;}
	body>header .top{position:absolute;top:58px;right:58px;}
	body>header .top a{color:#ffe806;text-decoration:none;font-size:11pt;font-style:italic;}
	body>header .top .fa{margin-right:5px;}
	nav{text-align:center;}
	#slm{padding-top:80px;}
	nav ul{list-style:none;}
	nav ul li{display:inline-block;padding:10px 25px 100px;font-size:13pt;font-style:italic;position:relative;}
	.logo{padding:0;width:240px;height:1px;overflow:visible;position:relative;}
	.logo img{position:absolute;top:-110px;left:10px;}
	nav ul li a{display:block;color:inherit;text-decoration:none;}
	nav ul ul{position:absolute;visibility:hidden;}
	.slicknav_menu{display:none;}
<?php if(is_front_page()): // HOME PAGE STYLES ?>
	.home{background:transparent;}
	#home-primary{padding-top:250px;color:#fff;text-align:center;}
	h1{font-size:49pt;font-weight:600;}
	h1 span{color:#ffe806;}
	#home-primary p{font-style:italic;font-size:14pt;}
<?php else: // NON HOME-PAGE STYLES ?>
	<?php if((is_page() && !is_page_template()) || is_page_template('white-header.php') || is_product() || is_404() || is_page_template('dealerships.php') || is_page_template('contact.php') || is_page_template('services.php') || is_page_template('sitemap.php')): // NORMAL PAGES ?>
	#title{padding:40px 0;text-align:center;}
	h1{font-size:31pt;text-align:center;margin-bottom:10px;font-weight:600;}
	#primary{padding:80px 0 40px;}
	.content{width:620px;margin:0 auto;}
	.content p{font-style:italic;}
	#title{background:#ffe806;position:relative;}
	#title p{margin-bottom:10px;}
	.down-chevrons{position:absolute;left:50%;margin-left:-39px;bottom:-89px;z-index:9;}
	#featured-image{position:relative;}
	#featured-image img:first-child{width:100%;height:auto;display:block;}
	#featured-image .down-chevrons{bottom:-35px;}
	<?php endif; if(is_page_template('white-header.php') || is_404() || is_page_template('dealerships.php') || is_page_template('services.php')): // WHITE HEADER PAGE STYLES ?>
	#title{background:#fff;}
	#title p{font-style:italic;}
	<?php endif; if(is_404()): // 404 ERROR ?>
	.down-chevrons{display:none;}
	<?php endif; if(is_page_template('contact.php')): ?>
	#title{box-shadow:0 5px 10px rgba(0,0,0,0.5);}
	.contact-us iframe{width:100%;height:500px;display:block;}
	<?php endif; if(is_page_template('services.php')): ?>
	.service img{width:100%;display:block;}
	<?php endif; if(is_cart() || is_checkout() || is_account_page() || is_woocommerce()): ?>
	.content{width:100%;}
	.woocommerce h2,.woocommerce h3{color:#0b0b0b;}
	<?php endif; if(is_checkout()): ?>
	input,textarea,select,option{padding:5px;font-size:inherit;font-family:inherit;}
	<?php endif; if(is_product()): ?>
	.container.woocommerce{padding:0;}
	<?php endif; ?>
<?php endif; ?>
	</style>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slicknav.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/print.css" type="text/css" media="print"/>
	<?php wp_head(); ?>
</head>
<body>
<header class="<?php echo (empty($pagename)) ? 'home' : $pagename; ?>">
	<div class="container">
		<div class="top">
			<a href="<?php echo site_url(); ?>/cart/"><i class="fa fa-shopping-cart"></i> Cart (<?php echo WC()->cart->cart_contents_count; ?>)</a>
		</div>
		<nav>
			<ul id="slm">
				<li><a href="<?php echo site_url(); ?>/standard-services/" title="Services" onclick="return false;">Services</a>
					<ul>
						<li><a href="<?php echo site_url(); ?>/ceramic-pro/" title="Ceramic Pro">Ceramic Pro</a></li>
						<li><a href="<?php echo site_url(); ?>/standard-services/" title="Standard Services">Standard Services</a></li>
					</ul>
				</li><!--
				--><li><a href="<?php echo site_url(); ?>/mobile-detailing/" title="Mobile Detailing">Mobile Detailing</a></li><!--
				--><li><a href="<?php echo site_url(); ?>/shop/" title="Products">Products</a></li><!--
				--><li class="logo"><a href="<?php echo site_url(); ?>/"><img src="<?php echo get_template_directory_uri(); ?>/images/ExtremeDetailCenter_Logo.png"/></a></li><!--
				--><li><a href="<?php echo site_url(); ?>/specials/" title="Specials">Specials</a></li><!--
				--><li><a href="<?php echo site_url(); ?>/dealerships/" title="Dealerships">Dealerships</a></li><!--
				--><li><a href="<?php echo site_url(); ?>/contact-us/" title="Contact Us">Contact Us</a></li>
			</ul>
		</nav>
	</div>
</header>