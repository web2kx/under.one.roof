<div id="sidebar">
<h3>NEWS</h3>
<ul>
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
<p><a href="#">View All News</a></p>
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