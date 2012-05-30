<?php get_header(); ?>

<div id="wrapper">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="dos-tercios listado">
	<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>	
	<?php the_excerpt(); ?>
	<?php the_time('F jS, Y') ?> | <?php the_author() ?>
	</div><!-- end of dos-tercios -->
<?php endwhile; else: ?>
<h2>No encontrado</h2>
<p>Lo sentimos, intente utilizar nuestro formulario de b&uacute;squedas.</p>
<?php endif; ?>
</div><!-- end of wrapper-->
<?php get_sidebar(); ?>

<?php get_footer(); ?>
