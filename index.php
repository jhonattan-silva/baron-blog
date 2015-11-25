<?php get_header(); ?> <!--Equivale ao include, vai chamar o header-->

<!-- 
<div class="col-md-8" class="carousel">    
    <div class="carousel-caption">
        <h1><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h1>
        <p class="lead">Just turns the Twitter Bootstrap Carousel in fullscreen mode, and scale to fit the screen resolution</p>
    </div>  
</div>
 -->


           
<div class="row" ><!--class bootstrap--><!--id="main"--> 
    <div class="col-md-8" id="conteudo"> <!--class bootstrap--><!--id="conteudo"-->

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?> <!-- comandos do wp, para verificar se tem posts para mostrar--> 
        <div id="post-<?php the_ID(); ?>" <?php post_class("col-md-5"); ?>> <!-- cmd para identificar a categoria e criar a classe com o nome + a classe md-5 -->
            <div class="thumbnail"><?php the_post_thumbnail(); ?></div><!--img do post-->
                <h3> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a> </h3> <!-- Chama o titulo do post--><!-- permalink faz ele linkar com o post correspondente-->
                <p> <?php the_excerpt(); ?> </p> <!--the_content(); Chama o conteudo do post, ja o excerpt mostra o resumo-->
        </div>
        <?php endwhile; ?>    
        <?php else: ?>
        <?php endif; ?>
    </div> <!-- Fim div conteudo -->    
    <?php get_sidebar(); ?>
</div> <!-- Fim div menu -->




<div class="paginacao"> <!-- Criar os links para mudar as paginas de acordo com a quantidade maxima configurada por pagina-->
    <ul> <!-- fica nesse ponto do if para não aparecer esses links caso não seja necessario -->
        <li> <?php next_posts_link('Posts Anteriores') ?> </li> <!-- cmd wp para posts + antigos-->
        <li> <?php previous_posts_link('Posts Novos') ?> </li> <!-- cmd wp para posts + novos-->
    </ul>
</div>
    


<?php get_footer(); ?>