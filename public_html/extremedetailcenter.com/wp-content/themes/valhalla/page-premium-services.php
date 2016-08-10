<?php get_header(); ?>
<style>
#title{background:#fff;}
#car{width:100%;text-align:center;color:#fff;padding:240px 0;text-shadow:8px 8px 12px rgba(55,55,55,0.5),-8px 8px 12px rgba(55,55,55,0.5),8px -8px 12px rgba(55,55,55,0.5),-8px -8px 12px rgba(55,55,55,0.5);}
#car h1{font-size:46pt;}
.hr{line-height:0.1em;border-top:1px solid #fff;width:130px;display:inline-block;position:relative;bottom:5px;}
.yellow-button{background:#ffe806;color:#090909;padding:12px 0;width:100%;display:block;text-decoration:none;font-style:italic;border-radius:2px;box-shadow:-2px -2px 12px rgba(55,55,55,0.6);text-shadow:none;font-size:13pt;}
#car .half{padding:0 20px;margin:40px 0;}
#car .container{max-width:616px;}
#car p{font-size:18pt;font-style:italic;}
.lbeez{padding:60px;border-radius:20px;max-width:100%;width:767px;font-size:11pt;}
.nmb{margin-bottom:0;}
.lbeez ul,.wordss ul{list-style:none;padding-left:40px;}
.lbeez h4{text-align:center;font-weight:bold;margin-bottom:20px;font-size:17pt;}
#prods{padding:20px 0;}
#prods .cf{margin:80px auto;}
#prods .cf:nth-child(odd) .half:last-child,#prods .cf:nth-child(even) .half:first-child{border-top:2px solid #a1a3a2;border-bottom:2px solid #a1a3a2;}
.wordss{position:relative;}
#prods .half{width:52%;}
#prods .wordss{padding:40px 0;font-size:11pt;width:48%;}
.wordss h5{font-size:19pt;margin-bottom:10px;}

@media screen and (max-width: 960px){
	#car{padding:160px 0;}
	#prods .half{width:46%;}
	#prods .wordss{width:54%;font-size:10pt;}
	.wordss h5{font-size:17pt;margin-bottom:0;}
	#car .half{width:100%;padding:0 100px;margin:40px 0 0;}
	.hr{width:97px;}
}

@media screen and (max-width: 767px){
	#car h1{font-size:40pt;}
	#prods .half,#prods .wordss{width:100%;font-size:11pt;}
	#prods .cf{margin:100px 0;}
}

@media screen and (max-width: 767px){
	#car h1{font-size:30pt;}
	.hr{display:none;}
	#car .half{padding:0;}
}



</style>
<div id="title" class="<?php echo $pagename; ?>">
	<div class="container">
		<h1><?php the_title(); ?></h1>
		<?php if(have_posts()): while(have_posts()): the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; endif; ?>
		<img src="<?php echo get_template_directory_uri(); ?>/images/down-chevrons.png" class="down-chevrons"/>
	</div>
</div>
<div id="car">
	<div class="container">
		<h1>The future <br>of detailing is here.</h1>
		<p><span class="hr"></span> and guaranteed for life <span class="hr"></span></p>
		<div class="buttons cf">
			<div class="half">
				<a href="#premium-packages" class="yellow-button fancybox">Premium Packages</a>
			</div>
			<div class="half">
				<a href="#additional-services" class="yellow-button fancybox">Additional Services</a>
			</div>
		</div>
	</div>
</div>
<div style="display:none;">
	<div id="premium-packages" class="lbeez">
		<h4>Premium Packages</h4>
		<p class="nmb"><strong>Gold Package</strong> – Our highest level, all-inclusive premium package offers complete protection against the elements. This package comes with a lifetime warranty.</p>
		<ul>
			<li>1 layer of <strong>Nano Polish</strong> (Primer)</li>
			<li>4 layers of <strong>9H</strong> (paint protection)
		  		  <ul><li>1 extra layer on exposed areas (front panel and hood)</li></ul></li>
			<li>1 layer of <strong>Light</strong> (top coat)</li>
			<li>1 layer of <strong>9H</strong> on plastic on exterior (protectant)</li>
			<li>1 layer of <strong>Rain</strong> on windshield and front side windows (water and dirt repellant)</li>
			<li>1 layer of <strong>9H</strong> on all rims (protectant)</li>
		</ul>

		<p class="nmb"><strong>Silver Package</strong> – Our mid-level premium package offers extraordinary protection against the elements, complete with a lifetime warranty.</p>
		<ul>
			<li>1 layer of <strong>Nano Polish</strong> (Primer)</li>
			<li>1 layer of <strong>9H</strong> (paint protection)</li>
			<li>1 layer of <strong>Light</strong> (top coat)</li>
			<li>1 layer of <strong>9H</strong> on plastic on exterior (protectant)</li>
			<li>1 layer of <strong>Rain</strong> on windshield and front side windows (water and dirt repellant)</li>
			<li>1 layer of <strong>9H</strong> on all rims (protectant)</li>
		</ul>

		<p class="nmb"><strong>Bronze Package</strong> – Our entry-level premium package offers powerful protection that lasts. This package comes with a two year warranty.</p>
		<ul>
			<li>1 layer of <strong>Nano Polish</strong> (Primer) </li>
			<li>1 layer of <strong>Light</strong> (top coat) </li>
			<li>1 layer of <strong>Light</strong> on plastic on exterior (protectant) </li>
			<li>1 layer of <strong>Rain</strong> on windshield and front side windows (water and dirt repellant) </li>
			<li>1 layer of <strong>Light</strong> on all rims (protectant)</li>
		</ul>
	</div>
</div>
<div style="display:none;">
	<div id="additional-services" class="lbeez">
		<h4>Additional Services</h4>
		<p class="nmb"><strong>Interior</strong> - Every surface inside the vehicle will be coated.</p>
		<ul>
			<li>1 coat of <strong>Leather</strong></li>
			<li>1 coat of <strong>Textile</strong></li>
			<li>1 coat of <strong>Plastic</strong></li>
			<li>1 coat of <strong>Rubber</strong></li>
		</ul>

		<p class="nmb"><strong>Rims</strong> – The entire rim will be coated.</p>
		<ul class="nmb">
			<li>1 layer of <strong>9H</strong></li>
		</ul>
		<p class="nmb"><strong>Windows</strong> – Windshield and front side windows will be coated.</p>
		<ul class="nmb">
			<li>1 layer of <strong>Rain</strong></li>
		</ul>
		<p class="nmb"><strong>Extra Layer of 9H</strong> – Entire vehicle will be coated.</p>
		<ul class="nmb">
			<li>1 layer of <strong>9H</strong></li>
		</ul>

	
	</div>
</div>
<div id="prods">
	<div class="container">
		<div class="cf">
			<div class="half">
				<img src="<?php echo get_template_directory_uri(); ?>/images/ceramic-pro-9h.jpg"/>
			</div>
			<div class="half wordss">
				<div class="centerr">
					<h5>Ceramic Pro 9H</h5>
					<p>This is a permanent nano ceramic protective paint coating. Its transparent 3D matrix structure protects the paint or surface from scratches, graffiti, dirt, aging, premature oxidation, weathering, road salt, rock chips, bugs, bird droppings and even acid rain. It offers excellent scratch, thermal (1382 degrees), UV, oxidation, corrosion and chemical resistance. A surface that has been sealed with Ceramic Pro 9H stays clean for a longer period of time due to its smoothness and hydrophobic qualities. Ceramic Pro 9H is permanent and can only be removed using machine polish. The unique formulation of 9H has enabled it to be multi-layered which means the thickness of the coating can be increased with additional layers allowing a thicker/harder film that will increase its scratch resistance.</p>
				</div>
			</div>
		</div>
		<div class="cf">
			<div class="half wordss">
				<div class="centerr">
					<h5>Ceramic Pro Light</h5>
					<p class="nmb">The super-hydrophobic and anti-graffiti effects of Ceramic Pro Light mean the coated surface will stay cleaner for longer as dirt and grime will not stick to it. Ceramic Pro Light is highly durable and leaves a high gloss surface once applied. Durability up to 24 months.</p>
					<ul>
						<li>Super-hydrophobic effect.</li>
						<li>Weather & UV resistance.</li>
						<li>High gloss finish.</li>
						<li>Anti-graffiti.</li>
						<li>Advanced chemical resistance.</li>
						<li>Oxidation & corrosion resistant.</li>
					</ul>
				</div>
			</div>
			<div class="half">
				<img src="<?php echo get_template_directory_uri(); ?>/images/ceramic-pro-light.jpg"/>
			</div>
		</div>
		<div class="cf">
			<div class="half">
				<img src="<?php echo get_template_directory_uri(); ?>/images/ceramic-pro-rain.jpg"/>
			</div>
			<div class="half wordss">
				<div class="centerr">
					<h5>Ceramic Pro Rain</h5>
					<p class="nmb">Ceramic Pro Rain protects windows from dirt and water. This is mainly used for windshields on cars and visors on helmets. What differentiates Ceramic Pro Rain from similar products is the durability and the hydrophobic characteristics. Note! This is not Rain-X. Once applied, the effects of this products last up to one year.</p>
					<ul>
						<li>Super-hydrophobic effect -110 degrees.</li>
						<li>Excellent wear resistance.</li>
						<li>Keeps glass cleaner.</li>
						<li>Allows water to roll off glass.</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="cf">
			<div class="half wordss">
				<div class="centerr">
					<h5>Ceramic Pro Leather </h5>
					<p class="nmb">Ceramic Pro Leather has a super-hydrophobic effect. Liquids spilled simply bead up on the surface and can easily be wiped away without staining or damaging your leather interior.</p>
					<ul>
						<li>The UV protection prevents the leather from aging.</li>
						<li>It has the power to make old leather look new.</li>
					</ul>
				</div>
			</div>
			<div class="half">
				<img src="<?php echo get_template_directory_uri(); ?>/images/ceramic-pro-leather.jpg"/>
			</div>
		</div>
	</div>
</div>
<style>
#more-info{background:#ffe806;padding:80px 0;text-align:center;font-size:15pt;font-style:italic;}
#more-info strong{display:block;font-size:19pt;font-style:normal;}
#more-info a{color:inherit;}
</style>
<div id="more-info">
	<div class="container">
		Visit the <a href="http://www.ceramicproamericas.com/productrange/" target="_blank">Ceramic Pro site</a> for more about their revolutionary product lineup.
		<strong>For more information and quotes on our premium services</strong>
		Call now to speak to one of our expert detailers (908) 623-7676
	</div>
</div>
<?php get_footer(); ?>