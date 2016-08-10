<?php get_header(); ?>
<div id="title">
	<div class="container">
		<h1>Page Not Found</h1>
		<p>We're sorry, but the page you requested cannot be located. Please use the navigation menu above to get back on track.</p>
		<img src="<?php echo get_template_directory_uri(); ?>/images/down-chevrons.png" class="down-chevrons"/>
	</div>
</div>
<div id="primary"<?php if(!empty($pagename)) echo ' class="'.$pagename.'"'; ?>>
	<div class="container">
		<div class="content">
			<?php if(have_posts()): while(have_posts()): the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</div>
	</div>
</div>
<?php if($pagename == "about-us") get_template_part("testimonial-slider"); ?>
<?php get_footer(); ?>