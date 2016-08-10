<?php /*
Template name: Contact
*/ get_header(); ?>
<div id="title">
	<div class="container">
		<h1><?php the_title(); ?></h1>
		<img src="<?php echo get_template_directory_uri(); ?>/images/down-chevrons.png" class="down-chevrons"/>
	</div>
</div>
<div class="contact-us">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3042.9536086340972!2d-74.01043500000002!3d40.298988999999985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2256b9620d277%3A0x3620cf10dcd7a11e!2s845+Broadway%2C+West+Long+Branch%2C+NJ+07764!5e0!3m2!1sen!2sus!4v1437760734509" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<div id="primary"<?php if(!empty($pagename)) echo ' class="'.$pagename.'"'; ?>>
	<div class="container">
		<div class="content">
			<form action="" method="post">
				<input type="hidden" value="General Inquiry" name="subject"/>
				<input type="text" name="Name" value="Name" class="req"/>
				<input type="text" name="Email" value="Email" class="req email"/>
				<input type="text" name="Phone" value="Phone" class="req"/>
				<textarea name="Message" class="req">Message</textarea>
				<div class="ra">
					<span class="status">&nbsp;</span>
					<input type="submit" value="Submit"/>
				</div>
			</form>
			<?php if(have_posts()): while(have_posts()): the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</div>
	</div>
</div>
<?php if($pagename == "about-us") get_template_part("testimonial-slider"); ?>
<?php get_footer(); ?>