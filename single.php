<?php get_header('single'); ?>

   <div id="brn-home" class="text-center">
        <div class="overlay">
            <div class="content">
                <img src="<?php echo catch_that_image() ?>" class="img-responsive" />
                <h1><span class="color"><?php the_title(); ?></span></h1>
                <h4 class="subtitulo"><?php the_meta(); ?></h4>
            </div>
        </div>
    </div>



	<div class="col-md-8">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile;?>
		<?php else: ?>
		<?php endif; ?>
	</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>