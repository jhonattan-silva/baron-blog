	<div class="col-md-3"> <!--class bootstrap id="sidebar"-->
	    <?php if( is_active_sidebar('widget_dir_1')) : ?>
	    <div id="primary-sidebar">
	        <?php dynamic_sidebar('widget_dir_1'); ?>
	    </div>
	    <?php endif; ?>
	</div>


    <div class="col-md-3">
        <ul class="ultimos-posts">
        	<span>ULTIMOS POSTS</span>
            <?php $ultimos_posts = new WP_Query('showposts=5');
            while ($ultimos_posts->have_posts()) : $ultimos_posts->the_post(); ?>
            <li> 
                <div class="miniatura"> <?php the_post_thumbnail(); ?>
                    <a href="<?php the_permalink() ?>"><?php the_title(); ?> </a>
                    <?php the_meta(); ?>
                </div> 
            </li>
            <?php endwhile; ?>
        </ul>
    </div>