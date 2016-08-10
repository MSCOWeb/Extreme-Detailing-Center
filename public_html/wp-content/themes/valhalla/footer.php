<div class="schedule">
	<div class="container cf">
		<div class="half">
			<h4>
				<a href="https://www.facebook.com/ValhallaDetailing" target="_blank"><span class="fa-stack fa-lg">
  					<i class="fa fa-circle fa-stack-2x"></i>
  					<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
				</span></a>
				<a href="https://instagram.com/valhalla_detailing/" target="_blank"><span class="fa-stack fa-lg">
  					<i class="fa fa-circle fa-stack-2x"></i>
  					<i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
				</span></a> Follow us on instagram to see our latest work!
			</h4>
			<?php echo do_shortcode('[si_feed limit="8" size="small"]'); ?>
		</div>
		<div class="half">
			<h4>
				<!-- <span class="fa-stack fa-lg">
  					<i class="fa fa-circle fa-stack-2x"></i>
  					<i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
				</span> --><img src="<?php echo get_template_directory_uri(); ?>/images/calendar.png"/> &nbsp; <span id="sched-app">Schedule an Appointment</span>
			</h4>
			<form action="" method="post">
				<input type="hidden" value="Valhalla Appointment Request" name="subject"/>
				<input type="text" name="Name" value="Name" class="req"/>
				<input type="text" name="Email" value="Email" class="req"/>
				<div class="cf">
					<div class="most">
						<input type="text" name="Phone" value="Phone" class="req"/>
					</div>
					<div class="least">
						<input type="text" class="datepicker req" name="Select a date" value="Select a date"/>
					</div>
				</div>
				<div class="cf">
					<div class="most">
						<select name="Services" class="req">
							<option value="">What services are you interested in?</option>
							<option value="Cars and SUVs">Cars & SUVs</option>
							<option value="Motorcycles">Motorcycles</option>
							<option value="Motor Homes">Motor Homes/Trailers</option>
							<option value="Boats">Boats</option>
							<option value="Addtional Services">Addtional Services</option>
						</select>
					</div>
					<div class="least">
						<select name="Time" class="req">
							<option value="">Select a time</option>
							<?php $times = array(
								"9:00 AM",
								"10:00 AM",
								"11:00 AM",
								"12:00 PM",
								"1:00 PM",
								"2:00 PM",
								"3:00 PM",
								"4:00 PM",
								"5:00 PM",
								"6:00 PM"
							); foreach($times as $time): ?>
							<option value="<?php echo $time; ?>"><?php echo $time; ?></option>
							<?php endforeach; ?>
						</select>
					</div>
				</div>
				<div class="cf">
					<div class="most"><span class="status">&nbsp;</span></div>
					<div class="least">
						<input type="submit" value="Send" id="send"/>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<footer>
	<div class="top">
		<div class="container">
			<div id="challenge">
				Ready to take the <span>Extreme Challenge?</span>
			</div>
			<p>We are offering all dealerships a FREE detailing to compare our work to your current supplier.</p>
			<p class="callnow">CALL NOW TO SCHEDULE!</p>
			<p class="phone">(908) 623-7676</p>
		</div>
	</div>
	<div class="bottom">
		<div class="container cf">
			<div class="half">
				<a href="<?php echo site_url(); ?>/about-us/">About Us</a><span>|</span>
				<a href="<?php echo site_url(); ?>/sitemap/">Sitemap</a><span>|</span>
				<a href="<?php echo site_url(); ?>/news/">News</a>
			</div>
			<div class="half">
				Connect with us: <a href="https://www.facebook.com/ValhallaDetailing" target="_blank"><span class="fa-stack fa-lg">
  					<i class="fa fa-circle fa-stack-2x"></i>
  					<i class="fa fa-facebook fa-stack-1x"></i>
				</span></a>
				<a href="https://instagram.com/valhalla_detailing/" target="_blank"><span class="fa-stack fa-lg">
  					<i class="fa fa-circle fa-stack-2x"></i>
  					<i class="fa fa-instagram fa-stack-1x"></i>
				</span></a>
			</div>
		</div>
	</div>
</footer>
<script>
var viewportWidth = Math.max(document.documentElement.clientWidth,window.innerWidth || 0);
var viewportHeight = Math.max(document.documentElement.clientHeight,window.innerHeight || 0);
function loadCSS(name){
	var fileref=document.createElement("link")
	fileref.setAttribute("rel","stylesheet")
	fileref.setAttribute("type","text/css")
	fileref.setAttribute("href",name)
	document.getElementsByTagName("head")[0].appendChild(fileref)
}
loadCSS('<?php echo get_template_directory_uri(); ?>/style.css');
loadCSS('https://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,300,600,700,800');
loadCSS('https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');
</script>
<?php wp_footer(); ?>
<script>
if (!window.jQuery) {
  var jq = document.createElement('script'); jq.type = 'text/javascript';
  // Path to jquery.js file, eg. Google hosted version
  jq.src = 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js';
  document.getElementsByTagName('head')[0].appendChild(jq);
}
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-68723729-1', 'auto');
  ga('send', 'pageview');

</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.slicknav.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/backstretch.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.samesizr.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.centerr.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.validatr.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<?php if($pagename == "about-us" || $pagename == "dealerships"): // ABOUT US ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider.js"></script>
<script>loadCSS("<?php echo get_template_directory_uri(); ?>/css/flexslider.css");</script>
<?php endif; if(is_page_template('services.php') || $pagename == "premium-services"): ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fancybox.js"></script>
<script>
loadCSS('<?php echo get_template_directory_uri(); ?>/css/jquery.fancybox.css');
</script>
<?php endif; ?>
<script>
loadCSS("https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css");
jQuery(document).ready(function($){

	$('nav>ul').slicknav();
	$('.slicknav_menu .logo').prependTo('.slicknav_menu');

	$('.woocommerce .zoom').unbind().on("click",function(e){
		e.preventDefault();
	}).css('cursor','default');

<?php if(is_front_page()): // HOME PAGE ?>

	$.backstretch("<?php echo get_template_directory_uri(); ?>/images/black-car.jpg");
	$('#yellow-sportscar').backstretch("<?php echo get_template_directory_uri(); ?>/images/yellow-sportscar.jpg");

	$(window).on("load resize",function(){
		setPrimaryHeight();
		$('.schedule .half').samesizr();
	});

	function setPrimaryHeight(){
		viewportWidth = Math.max(document.documentElement.clientWidth,window.innerWidth || 0);
		viewportHeight = Math.max(document.documentElement.clientHeight,window.innerHeight || 0);
		var headerHeight = $('header').outerHeight();			
		if(viewportWidth < 768) headerHeight = $('.slicknav_menu').outerHeight();
		var h1Height = $('#home-primary>.container').outerHeight();
		$('#home-primary').css({
			'height':viewportHeight - headerHeight,
			'padding-top':(viewportHeight - headerHeight) / 2 - h1Height
		});
	}

<?php else: // NOT HOME PAGE?>

	<?php if($pagename == "about-us" || $pagename == "dealerships"): // ABOUT US ?>

	$('.flexslider').flexslider({
		controlNav:false
	});

	<?php endif; if($pagename == "dealerships"): ?>

	$('.content p span').append('<form class="email-here" method="post"><input type="text" name="email"/><input type="hidden" name="admin" value="<?php echo get_option('admin_email'); ?>"/></form>');

	// Submit form on input blur
	$('.email-here input').on("blur",function(){
		var emailHere = $(this).val().trim();
		if(isEmail(emailHere)) $('.email-here').trigger("submit").find('input').prop('disabled',true);
	});

	$('.email-here').on("submit",function(e){
		e.preventDefault();
		$.post("<?php echo get_template_directory_uri(); ?>/emailHereForm.php",$('.email-here').serialize());
	});

	<?php endif; if($pagename == "contact-us"): ?>

	$('.contact-us form').validatr({
		useFontAwesome:true,
		useAJAX:true,
		handlerPath:'<?php echo get_template_directory_uri(); ?>/handleForm.php',
		filterSpam:true
	});

	<?php endif; if(is_page_template('services.php') || $pagename == "premium-services"): ?>

	$('.fancybox').fancybox();

	$(window).on('load resize',function(){
		// $('.service').each(function(){
		// 	var $service = $(this),
		// 	serviceHeight = $service.outerHeight(),
		// 	serviceWidth = $service.outerWidth(),
		// 	$box = $service.find('.box'),
		// 	boxHeight = $box.outerHeight();
		// 	boxWidth = $box.outerWidth();
		// 	var top = (serviceHeight - boxHeight) / 2;
		// 	var left = (serviceWidth - boxWidth) / 2 - ((serviceWidth - boxWidth) / 4.15);
		// 	$box.css({
		// 		'top':top,
		// 		'left':left
		// 	});

		// });
	});

	<?php endif; if(is_shop()): ?>

	$(window).on("load resize",function(){
		$('.woocommerce>.cf').each(function(){
			$(this).find('li.product').samesizr({
				mobile:480
			});
		});
	});

	<?php endif; if($pagename == "specials"): ?>

	$('.print').on("click",function(){
		var $coupons = $('.coupon');
		var $coupon  = $(this).parent();
		$coupons.addClass("no-print");
		$coupon.removeClass("no-print");
	});

	<?php endif; ?>

<?php endif; ?>

	//$('input:first').focus();

	$('input,textarea').on("focus",function(){
		if($(this).val().trim() == $(this).attr("Name")){
			$(this).val('');
		} else {
			this.select();
		}
	}).on("blur",function(){
		if($(this).val().trim() == "") $(this).val($(this).attr("name"));
	});

	$('.datepicker').datepicker({changeMonth:true,changeYear:true,yearRange:"+nn:2016",numberOfMonths:1,minDate:0,maxDate:365});

	$('.schedule form').validatr({
		useFontAwesome:true,
		useAJAX:true,
		handlerPath:'<?php echo get_template_directory_uri(); ?>/handleForm.php',
		filterSpam:true,
		successMessage:"Thanks for scheduling an appointment!"
	});

	function isEmail(email){ // Real basic email validation
		var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		return regex.test(email);
	}

});
</script>
<?php if($pagename == "premium-services"): ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/premium-services.js"></script>
<?php endif; ?>
</html>
</body>