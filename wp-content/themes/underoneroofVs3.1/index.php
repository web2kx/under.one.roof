<?php get_header(); ?>

			<div class="slider-homepage">
			<?php query_posts('category_name=slider&posts_per_page=1' ); 
					while ( have_posts() ) : the_post(); ?>							
							<?php the_post_thumbnail( 'homepage-slider' );?>
							<div class="slider-homepage-box">
								<div class="slider-homepage-title">
									<h2><?php the_title(); ?></h2>
								</div>
								<div class="button_space button-a">
									<a href="#">SPACES & RATES</a>
								</div>
								<div class="button_how button-a">
									<a href="#">HOW TO JOIN</a>
								</div>
								<div class="button_host button-a">
									<a href="#">HOST A PUBLIC EVENT</a>
								</div>
							</div>
							<?php the_excerpt(); ?>
			<?php endwhile; wp_reset_query(); ?>
			</div><!-- end of slider-homepage-->
				
			<?php if ( is_sidebar_active('slider') ) : ?>
					<div id="primary" class="widget-slider">
						<ul class="xoxo">
							<?php dynamic_sidebar('slider'); ?>
						</ul>
					</div><!-- #primary .widget-area -->
			<?php endif; ?> 			
			
				<?php get_sidebar(); ?>

				<div id="featured">
					<h1>Events</h1>
					<?php echo do_shortcode( '[google-calendar-events id="1" type="list" title="Events" max="3"]' ); ?>
					<span><a href="#">View all Events ></a></span>
				</div><!-- end of featured -->

				<?php query_posts('category_name=Noticias&posts_per_page=2' ); 
					while ( have_posts() ) : the_post(); ?>
						<div class="news">
							<?php the_post_thumbnail( 'homepage-thumb' );  ?>
							<h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
							<?php the_excerpt(); ?>
						</div>
				<?php endwhile; wp_reset_query(); ?>
				
				<div id="contact">
					<img src="<?php bloginfo('template_url'); ?>/images/icon.png" />	
					<div id="information">
						<h1><a href="#">Under One Roof Properties</a></h1>
						<p>Tel: 613 533 3448 / Email: info@underoneroof.ca</p>
						<p>251 Bank Street, 2nd floor, Ottwa ON K2P 1X3</p>				
						<span>Under One Roof Properties is a registered non-for-profit organization.</span>
					</div>
					<div id="newsletter">
						<h1>Stay Connected</h1>
						<p>Subscribe to our Newsletter.</p>
						<div class="wysija-msg ajax" id="msg-form-wysija-nl-1337446152"></div>
						<form class="widget_wysija form-valid-sub" action="" method="post" id="form-wysija-nl-1337446152"><p><input type="text" name="wysija[user][email]" class="wysija-email validate[required,custom[email]]" id="form-wysija-nl-1337446152-wysija-to"><span class="wysija-p-firstname abs-req"><label for="form-wysija-nl-1337446152-abs-firstname">First name</label><input type="text" name="wysija[user][abs][firstname]" class="validated[abs][req]" id="form-wysija-nl-1337446152-abs-firstname"></span><span class="wysija-p-lastname abs-req"><label for="form-wysija-nl-1337446152-abs-lastname">Last name</label><input type="text" name="wysija[user][abs][lastname]" class="validated[abs][req]" id="form-wysija-nl-1337446152-abs-lastname"></span><span class="wysija-p-email abs-req"><label for="form-wysija-nl-1337446152-abs-email">Email</label><input type="text" name="wysija[user][abs][email]" class="validated[abs][email]" id="form-wysija-nl-1337446152-abs-email"></span><input type="submit" value="Join" name="submit" class="wysija-submit wysija-submit-field"></p><input type="hidden" value="form-wysija-nl-1337446152" name="formid">
							<input type="hidden" value="save" name="action">
							<input type="hidden" value="1" name="wysija[user_list][list_ids]">
							<input type="hidden" value="You’ve successfully subscribed. Check your inbox now to confirm your subscription." name="message_success">
							<input type="hidden" value="subscribers" name="controller"><input type="hidden" value="68cec8d22a" name="_wpnonce" id="_wpnonce"><input type="hidden" value="/demos/pady/UnderOneRoof/contact/" name="_wp_http_referer"><input type="hidden" name="wysija-page" value="1"><input type="hidden" id="wysijax" value="996ed32c87">
						</form>
					</div>				
					
				</div><!-- end contact -->
				
			</div><!-- grid 12 -->	
			
		</div><!-- end content -->	
			
<?php  get_footer(); ?>