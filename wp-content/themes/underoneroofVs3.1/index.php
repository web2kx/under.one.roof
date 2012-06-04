<?php get_header(); ?>

			<div class="homepage-middle-banner">
				<img border="0" src="<?php bloginfo('stylesheet_directory'); ?>/images/UnderOneRoof_banner_homepage.jpg" width="985" height="590" />
				<div class="homepage-middle-banner-text textwhite">
					Under One Roof fosters an environment of interaction<br /> 
					&amp; collaboration for social change. Connect with a <br />
					like-minded network of creative thinkers &amp; innovators.
				</div>
			<!-- <?php query_posts('category_name=slider&posts_per_page=1' ); 
					while ( have_posts() ) : the_post(); ?>							
							<?php the_post_thumbnail( 'homepage-slider' );?>
							<div class="slider-homepage-box">
								<div class="slider-homepage-title">
									<h2><?php the_title(); ?></h2>
								</div>
								<div class="button_space button-a">
									<a href="#">SPACES &amp; RATES</a>
								</div>
								<div class="button_how button-a">
									<a href="#">HOW TO JOIN</a>
								</div>
								<div class="button_host button-a">
									<a href="#">HOST A PUBLIC EVENT</a>
								</div>
							</div>
							<?php the_excerpt(); ?>
			<?php endwhile; wp_reset_query(); ?> -->
			</div><!-- end of slider-homepage-->
				
			
			<div id="homepage-slider-2" class="homepage-slider-2">
				<!--<ul>
						
				</ul>-->
				<img border="0" src="<?php bloginfo('stylesheet_directory'); ?>/images/our-members.jpg" width="713" height="449" />
				<div class="homepage-slider-2-title font25 fontproxima textwhite">OUR MEMBERS</div>
				
				<div class="homepage-slider-2-text1 font17 fontproxima textwhite">We are so pleased and excited<br />to be part of this vibrant<br />community"</div>
				<div class="homepage-slider-2-text2 font13 fontproxima textwhite">Action Canada for Population<br />and development.</div>
			</div>
						
				<?php get_sidebar(); ?>

				<!--<div id="featured">
					<h1>EVENTS</h1>-->
					<!-- <?php echo do_shortcode( '[google-calendar-events id="1" type="list" title="Events" max="3"]' ); ?>-->
					<!--<span><a href="#">View all Events ></a></span>-->
				<!--</div>--><!-- end of featured --> 

				<?php query_posts('category_name=Noticias&posts_per_page=2' ); 
					while ( have_posts() ) : the_post(); ?>
						<div class="news">
							<?php the_post_thumbnail( 'homepage-thumb' );  ?>
							<h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
							<?php the_excerpt(); ?>
						</div>
				<?php endwhile; wp_reset_query(); ?>

			</div><!-- grid 12 -->	
			
			<?php include("contact-block.php"); ?>
			
		</div><!-- end content -->	
			
<?php  get_footer(); ?>homepage-middle-banner-text