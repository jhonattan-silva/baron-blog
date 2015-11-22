<?php get_header('single'); ?>

<div class="row">
   <div id="brn-home" class="text-center">
        <div class="overlay">
            <div class="content">
                <img src="<?php echo catch_that_image() ?>" class="img-responsive" />
                <h1><span class="titulo"><?php the_title(); ?></span></h1>
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

<?php if ( is_single() ) get_sidebar('single'); ?>

        <div class="col-md-8 social-bar">
            <div class="col-md-3"><g:plusone></g:plusone></div><!-- Google + -->
            <!-- Twitter -->
            <div class="col-md-3">
                <a href="http://twitter.com/share" class="twitter-share-button"
                    data-url="<?php the_permalink(); ?>"
                    data-text="<?php the_title(); ?>"
                    data-count="vertical"
                    data-size="large">Tweet
                </a>
            </div>
            <div class="fb-like col-md-3"></div><!-- Facebook -->
        </div>



</div>


<?php get_footer(); ?>