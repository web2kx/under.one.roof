<?php if($post->ID == 6 || $post->ID == 16){
	?>
	<div class="breadcrums textwhite">
	<?php
}else{
	?>
	<div class="breadcrums">
	<?php
} ?>
	<?php the_breadcrumb(); ?>
	<!--<a href="/">HOME</a>-->
</div>