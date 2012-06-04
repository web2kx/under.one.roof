<?php
	/*
		Template Name: Contact
	*/
?>

		<?php get_header(); ?>
		<style>
			#menu li.contact a { color: #009d4c; }
		</style>
		<!-- change body image background-->
		<script type="text/javascript">
		$(document).ready(function(){
			/*$("body").css("background", "url('<?php bloginfo('stylesheet_directory'); ?>/images/contact-bg.jpg') repeat");*/
			$("body").css("background", "#009d4c url('<?php bloginfo('stylesheet_directory'); ?>/images/bg_contact.png') 0 63px repeat");
		});
		</script>
				<div class="contactbanner"><!--<div class="contactbannertri"></div>-->
				</div>
				<div class="labelbanner"> <img src="<?php bloginfo('template_url'); ?>/images/contact-circle.png" alt="contact"> </div>
				
			</div>
			
			<div class="g4">
				<img border="0" src="<?php bloginfo('stylesheet_directory'); ?>/images/map.jpg" />
			</div>
			
			<div class="g8 bgwhite">
		
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<div class="page" style="padding-bottom:0px;" id="page-<?php the_ID();?>">
						
						<?php the_content(); ?>
						<div style="margin-top:5px;width:242px;height:37px;"><div style="float:left;width:200px;height:37px;"><input type="text" class="email_sub_field" name="emailtosubscribe" id="emailtosubscribe" /></div><div style="float:left;width:40px;height:37px;"><input type="button" class="email_sub_button" name="emailsubscribesubmit" id="emailsubscribesubmit" value="Join" /></div></div><br /><div id="email_sub_response" class="fontf12 redtext"></div>
						<script type="text/javascript">
							$(document).ready(function(){
								//hide email subscription response box
								$("#email_sub_response").hide();
								//initialize email box value
								$("#emailtosubscribe").css("color", "#ccc");
								$("#emailtosubscribe").val("Your E-Mail");
							});
							$("#emailtosubscribe").click(function(){
								$(this).css("color", "#000");
								if($(this).val() == "Your E-Mail"){
									$(this).val("");
								}
								$("#email_sub_response").hide();
							});
							$("#emailtosubscribe").blur(function(){
								if($(this).val() == ""){
									$(this).css("color", "#ccc");
									$(this).val("Your E-Mail");
								}
								$("#email_sub_response").hide();
							});
							$("#emailsubscribesubmit").click(function(){
								var email = $("#emailtosubscribe").val();
								//alert(email);
								var dataString = "emailsubscription=go&email="+email;
								//alert(dataString);
								$.ajax({
									type: "POST",
									url: "<?php bloginfo('stylesheet_directory'); ?>/ec/inc/submit_address.php",
									data: dataString,
									success: function(returndata){
										//alert(returndata);
										$("#email_sub_response").show();
										$("#email_sub_response").html(returndata);
									}
								});
							});
						</script>
					</div>
					<!--
					<div class="pages">
						<div class="box_contact">
							<a href="http://www.twitter.com/underoneroof">
								<div class="contact_twitter"><strong>Follow us on Twitter</strong></div>
								<img style="float:right;" src="<?php bloginfo('template_url'); ?>/images/twiiter.jpg" alt="FolloOnTwitter">
							</a>
						</div>
					</div>-->
				<?php endwhile; endif; ?>		
			
			</div>
		</div><!-- end content -->
		<?php  get_footer(); ?>