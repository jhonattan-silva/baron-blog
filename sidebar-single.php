    

    <div class="col-md-3"> 
        <?php if ( function_exists( 'wp_tag_cloud' ) ) : ?>
            <ul class="sidebars">
                <span>TAGS POPULARES</span>
                <li><?php wp_tag_cloud( 'smallest=8&largest=22' ); ?></li>
            </ul>
        <?php endif; ?>
    </div>




    <div class="col-md-3"><!-- Offset joga ele na posição 8 mesmo que não existam colunas a esquerda-->
        <ul class="sidebars">
        	<span>ULTIMOS POSTS</span>
            <?php $ultimos_posts = new WP_Query('showposts=5');
            while ($ultimos_posts->have_posts()) : $ultimos_posts->the_post(); ?>
            <li> 
                <div class="miniatura"> <?php the_post_thumbnail(); ?>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
                    <?php the_meta(); ?>
                </div> 
            </li>
            <?php endwhile; ?>
        </ul>
    </div>


    <div class="col-md-3">
        <ul class="sidebars">
            <span>DESCUBRA O QUE NÃO PROCURAVA</span>
            <?php $posts = get_posts('orderby=rand&numberposts=5'); foreach($posts as $post) { ?>
            <li>
                <div class="miniatura"> <?php the_post_thumbnail(); ?>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
                    <?php the_meta(); ?>
                </div>
            </li>
            <?php } ?>
        </ul>
    </div>