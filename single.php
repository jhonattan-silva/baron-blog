<?php get_header('single'); ?>


   <div id="brn-home" class="text-center">
        <div class="overlay">
            <div class="content">
                <img src="<?php echo catch_that_image() ?>" class="img-responsive" />
                <h1><span class="titulo"><?php the_title(); ?></span></h1>
                <h4 class="subtitulo"><?php the_meta(); ?></h4>
            </div>
        </div>
    </div>


<div class="container-fluid">
    <div class="row">
    	<div class="col-md-8">
    		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    		<p><?php the_content(); ?></p>
    		<?php endwhile;?>
    		<?php else: ?>
    		<?php endif; ?>

            <div class="col-md-2"><g:plusone></g:plusone></div><!-- Google + -->
            <!-- Twitter -->
            <div class="col-md-2">
                <a href="http://twitter.com/share" class="twitter-share-button"
                    data-url="<?php the_permalink(); ?>"
                    data-text="<?php the_title(); ?>"
                    data-count="vertical"
                    data-size="large">Tweet
                </a>
            </div> <!-- fecha twitter -->
            <div class="col-md-2 fb-like"></div><!-- Facebook -->
        </div><!-- fecha o conteudo do post -->

        <?php get_sidebar('single'); ?>
    </div> <!-- Fecha a linha -->
</div> <!-- fecha o container -->



<?php get_footer(); ?>