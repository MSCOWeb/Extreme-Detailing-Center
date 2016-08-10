<?php /*
Template name: White Header
*/ get_header(); ?>
<div id="title" class="<?php echo $pagename; ?>">
	<div class="container">
		<h1><?php the_title(); ?></h1>
		<?php if(function_exists(get_field)): if(get_field("subheading")): ?>
		<p><?php the_field("subheading"); ?></p>
		<?php endif; endif; ?>
		<img src="<?php echo get_template_directory_uri(); ?>/images/down-chevrons.png" class="down-chevrons"/>
	</div>
</div>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<?php if(has_post_thumbnail()): ?>
<div id="featured-image" class="<?php echo $pagename; ?>">
	<?php the_post_thumbnail('full'); ?>
	<img src="<?php echo get_template_directory_uri(); ?>/images/down-chevrons.png" class="down-chevrons"/>
</div>
<?php endif; ?>
<div id="primary" class="<?php echo $pagename; ?>">
	<div class="container">
		<div class="content">
			<?php the_content(); ?>
		</div>
	</div>
</div>
<?php endwhile; endif; ?>
<?php if($pagename == "about-us") get_template_part("testimonial-slider"); ?>
<?php get_footer(); ?>