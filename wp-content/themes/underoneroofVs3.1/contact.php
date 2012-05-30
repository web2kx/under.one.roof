<?php
	/*
		Template Name: Contact
	*/
?>

		<?php get_header(); ?>
	
				<div class="labelbanner"> <img src="<?php bloginfo('template_url'); ?>/images/contact_bann.png" alt="contact"> </div>
				<?php while (have_posts()) : the_post(); ?>
					<?php  
						$contenido = get_the_content();
						$regexp = "<img(.*)src=(.*)>";
						if(preg_match_all("/$regexp/siU", $contenido, $imagenes, PREG_SET_ORDER)) 
						{ 
							foreach($imagenes as $imagen) 
							{
								$imagen = $imagen[0];
								echo $imagen;
							}
						} 
					?>
				<?php endwhile;?>	
			</div>
			
			<div class="g4">
				<?php echo do_shortcode ('[google-map-sc option = "option value"]') ?>
			</div>
			
			<div class="g8 bgwhite">
		
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<div class="page" style="padding-bottom:0px;" id="page-<?php the_ID();?>">
						
						<?php the_content(); ?>
						
					</div>
					<div class="pages">
						<div class="box_contact">
							<a href="http://www.twitter.com/underoneroof">
								<div class="contact_twitter"><strong>Follow us on Twitter</strong></div>
								<img style="float:right;" src="<?php bloginfo('template_url'); ?>/images/twiiter.jpg" alt="FolloOnTwitter">
							</a>
						</div>
					</div>
				<?php endwhile; endif; ?>		
			
			</div>
		</div><!-- end content -->
		<?php  get_footer(); ?>