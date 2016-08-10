<?php /*
Template name: Services
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
<?php $args = array('posts_per_page' => -1,'post_type' => 'services'); $featured = new WP_Query($args); ?>
<?php if($featured->have_posts()): $i = 1; while($featured->have_posts()): $featured->the_post(); $uniqueid = $post->post_name; ?>
<?php if(function_exists(get_field)): ?>
<div class="<?php echo $pagename; ?> service">
	<?php if(has_post_thumbnail()) the_post_thumbnail(); ?>
	<div class="box-container<?php if($i % 2 == 0) echo ' even'; echo " $uniqueid"; ?>">
		<div class="box">
			<div class="bg-title">
				<h1><?php the_title(); ?></h1>
			</div>
			<h3><?php the_title(); ?></h3>
			<ul class="bullets cf">
			<?php if(have_rows('bullet_points')): while(have_rows('bullet_points')): the_row(); ?>
				<li><?php the_sub_field('bullet_point'); ?></li>
			<?php endwhile; endif; ?>
			</ul>
			<a href="#<?php echo $uniqueid; ?>" class="white-button fancybox">click to view prices</a>
		</div>
	</div>
</div>
<div style="display:none;">
	<div id="<?php echo $uniqueid; ?>" class="prices">
		<?php if(get_field('prices')) the_field('prices'); ?>
	</div>
</div>
<?php endif; $i++; endwhile; endif; wp_reset_query(); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<div id="primary" class="<?php echo $pagename; ?>">
	<div class="container">
		<div class="content" style="text-align:center;width:100%;">
			<?php the_content(); ?>
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/down-chevrons.png" class="down-chevrons"/>
	</div>
</div>
<?php endwhile; endif; wp_reset_query(); ?>
<?php get_footer(); ?>