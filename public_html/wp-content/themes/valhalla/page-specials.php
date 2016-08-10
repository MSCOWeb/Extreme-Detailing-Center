<?php get_header(); ?>
<div id="title">
	<div class="container">
		<h1><?php the_title(); ?></h1>
		<img src="<?php echo get_template_directory_uri(); ?>/images/down-chevrons.png" class="down-chevrons"/>
	</div>
</div>
<div id="primary"<?php if(!empty($pagename)) echo ' class="'.$pagename.'"'; ?>>
	<div class="container">
		<div class="content">
			<?php if(function_exists(get_field)): if(have_rows('specials')): while(have_rows('specials')): the_row(); $image = get_sub_field('coupon'); if($image): ?>
			<div class="coupon">
				<a href="<?php echo $image['url']; ?>" target="_blank"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="aligncenter size-full"></a>
				<a href="javascript:window.print()" class="print">print</a>
			</div>
			<?php endif; endwhile; endif; endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>