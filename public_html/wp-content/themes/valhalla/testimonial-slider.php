<div id="testimonials" class="<?php echo $pagename; ?>">
	<div class="container">
		<h1>Testimonials</h1>
		<div class="flexslider">
			<ul class="slides">
				<?php if(function_exists(get_field)): if(get_field('testimonials',$post->ID)): if(have_rows('testimonials',$post->ID)): while(have_rows('testimonials',$post->ID)): the_row(); ?>
				<li>
					<div class="author">
						<span style="display:block;"><i class="fa fa-user"></i></span>
						<?php the_sub_field('author'); ?>
					</div>
					<div class="testimonial">
						<?php the_sub_field('testimonial'); ?>
					</div>
				</li>
				<?php endwhile; endif; endif; endif; ?>
			</ul>
		</div>
		<?php if($pagename == "dealerships"): ?>
		<img src="<?php echo get_template_directory_uri(); ?>/images/down-chevrons.png" class="down-chevrons"/>
		<?php endif; ?>
	</div>
</div>