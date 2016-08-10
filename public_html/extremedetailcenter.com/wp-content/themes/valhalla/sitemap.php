<?php /*
Template name: Sitemap
*/ get_header(); ?>
<div id="title">
	<div class="container">
		<h1><?php the_title(); ?></h1>
		<img src="<?php echo get_template_directory_uri(); ?>/images/down-chevrons.png" class="down-chevrons"/>
	</div>
</div>
<div id="primary"<?php if(!empty($pagename)) echo ' class="'.$pagename.'"'; ?>>
	<div class="container">
		<div class="content">
			<?php wp_list_pages(array('title_li'=>'')); ?>
		</div>
	</div>
</div>
<?php if($pagename == "about-us") get_template_part("testimonial-slider"); ?>
<?php get_footer(); ?>