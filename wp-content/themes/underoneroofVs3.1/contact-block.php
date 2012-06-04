<div id="contact">
	<img width="162" height="80" src="<?php bloginfo('template_url'); ?>/images/icon.png" />	
	<div id="information">
		<!--<h1>Under One Roof Properties</h1>-->
		<h1><a href="#">Under One Roof Properties</a></h1>
		<!--<p><a href="#">Under One Roof Properties</a></p>-->
		<p>Tel: 613 533 3448 / Email: <a href="mailto:info@underoneroof.ca">info@underoneroof.ca</a></p>
		<p>251 Bank Street, 2nd floor, Ottawa ON K2P 1X3</p>				
		<!--&nbsp;<span style="margin-left:1px;">Under One Roof Properties is a registered non-for-profit organization.</span>-->
		<p style="font-size:11px;">Under One Roof Properties is a registered non-for-profit organization.</p>
	</div>
	<div id="newsletter">
		<h1 style="margin-bottom:3px;">Stay Connected!</h1>
		<p style="margin-bottom:7px;">Subscribe to our Newsletter.</p>
		<!-- <div class="wysija-msg ajax" id="msg-form-wysija-nl-1337446152"></div>
		<form class="widget_wysija form-valid-sub" action="" method="post" id="form-wysija-nl-1337446152"><p><input type="text" name="wysija[user][email]" class="wysija-email validate[required,custom[email]]" id="form-wysija-nl-1337446152-wysija-to"><span class="wysija-p-firstname abs-req"><label for="form-wysija-nl-1337446152-abs-firstname">First name</label><input type="text" name="wysija[user][abs][firstname]" class="validated[abs][req]" id="form-wysija-nl-1337446152-abs-firstname"></span><span class="wysija-p-lastname abs-req"><label for="form-wysija-nl-1337446152-abs-lastname">Last name</label><input type="text" name="wysija[user][abs][lastname]" class="validated[abs][req]" id="form-wysija-nl-1337446152-abs-lastname"></span><span class="wysija-p-email abs-req"><label for="form-wysija-nl-1337446152-abs-email">Email</label><input type="text" name="wysija[user][abs][email]" class="validated[abs][email]" id="form-wysija-nl-1337446152-abs-email"></span><input type="submit" value="Join" name="submit" class="wysija-submit wysija-submit-field"></p><input type="hidden" value="form-wysija-nl-1337446152" name="formid">
			<input type="hidden" value="save" name="action">
			<input type="hidden" value="1" name="wysija[user_list][list_ids]">
			<input type="hidden" value="Youíve successfully subscribed. Check your inbox now to confirm your subscription." name="message_success">
			<input type="hidden" value="subscribers" name="controller"><input type="hidden" value="68cec8d22a" name="_wpnonce" id="_wpnonce"><input type="hidden" value="/demos/pady/UnderOneRoof/contact/" name="_wp_http_referer"><input type="hidden" name="wysija-page" value="1"><input type="hidden" id="wysijax" value="996ed32c87">
		</form>-->
		<input type="text" class="email_sub_field" name="emailtosubscribe" id="emailtosubscribe" /><input type="button" class="email_sub_button" name="emailsubscribesubmit" id="emailsubscribesubmit" value="Join" /><br /><div id="email_sub_response" class="fontf12 redtext"></div>
	</div>				
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
</div><!-- end contact -->