<div id="sidebar">
<div class="newstitle font25 fontproxima textwhite">EVENTS</div>
<!--<div style="font-size:20px;padding-left:29px;color:#fff;">Welcome to our new site</div>-->
<!-- <ul>
<?php query_posts('category_name=news&posts_per_page=3' ); 
while ( have_posts() ) : the_post(); ?>
	<li>
		<div class="news-date">Date posted / <?php the_date(); ?></div>
		<div class="news-title"> <strong><?php the_title(); ?></strong></div>
		<div class="news-more">
			<a href="<?php echo get_permalink(); ?>">More ></a>
		</div>
	</li>
<?php endwhile; wp_reset_query(); ?>	
</ul>
<p><a href="#">View All News</a></p> -->
<div class="newsbox newsboxbottomline">
	<div class="newsboxtitle font11">June 5</div>
	<div class="newsboxcontent font17 fontproxima textwhite">Book Launch</div>
	<div class="newsboxcontent font13 fontproxima textwhite">A Healthy Society: How a Focus on Health Can Revive Canadian Democracy</div>
	<!--<a href="#">More &gt;</a>-->
</div>
<div class="newsbox newsboxbottomline">
	<div class="newsboxtitle font11">June 14</div>
	<div class="newsboxcontent font17 fontproxima textwhite">Book Launch</div>
	<div class="newsboxcontent font13 fontproxima textwhite">Warrior Nation: Rebranding Canada in and Age of Anxiety</div>
	<!--<a href="#">More &gt;</a>-->
</div>
<div class="newsbox">
	<div class="newsboxtitle font11">September 27</div>
	<div class="newsboxcontent font17 fontproxima textwhite">Open House</div>
	<div class="newsboxcontent font13 fontproxima textwhite">Under One Roof Properties</div>
	<!--<a href="#">More &gt;</a>-->
</div>
<?php 
if (is_home()) {
	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Home') ) : endif;
} elseif (is_category()) {
	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Categoria') ) : endif;
} elseif (is_page()) {
	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Pagina') ) : endif;
	}
?>

</div><!-- end of sidebar -->