<html> <!--Fecha no footer-->
    <head>
        <meta name="viewimport" content="width=device-width, initial-scale=1, maximun-scale=1, user-scalable=no"><!--função para ajustes mobile-->
        <title>HELLO BITCHESSS!!!!</title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"> <!--Ligação do wp para encontrar o css-->
        
        
        <!-- links bootstrap online --!
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      
        <?php wp_head(); ?>
    </head>
    
<?php 
//referenciando as categorias
$id_games = get_cat_ID( 'games' );
$id_filmes = get_cat_ID( 'filmes' );
$id_series = get_cat_ID( 'series' );
$id_livros = get_cat_ID( 'livros' );
$id_hqs = get_cat_ID( 'hqs' );
    
$link_games = get_category_link( $id_games );
$link_filmes = get_category_link( $id_filmes );
$link_series = get_category_link( $id_series );
$link_livros = get_category_link( $id_livros );
$link_hqs = get_category_link( $id_hqs );
?>
    
<body class="homie"> <!--fecha depois tambem-->
        
<!-- CARROSSEL  *#*#*#**#*#**#*#**#*#*#*#**#**#*#**#*#**#*#*#**#*#*#**#**-->

	<div id="meu-carousel" class="carousel slide" data-ride="carousel">
        
  

		<div class="carousel-inner">
			<div class="item active">
				<img src="<?php echo img_principal("7") ?>" alt="" />
	<!--				<div class="carousel-caption">
						<h1><a href="<?php //the_permalink(); ?>"> <?php //the_title(); ?> </a></h1>
						<p class="lead">Just turns the Twitter Bootstrap Carousel in fullscreen mode, and scale to fit the screen resolution</p> lead do bootstrap, formata o paragrafo
					</div>-->
			</div>
            
           <div class="item">
				<img src="<?php echo img_principal("2") ?>" alt="" />
                    <div class="carousel-caption">
						<h1><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h1>
						<p class="lead">Just turns the Twitter Bootstrap Carousel in fullscreen mode, and scale to fit the screen resolution</p>
					</div>
			</div>

            <div class="item">
				<img src="<?php echo img_principal("9") ?>" alt="" />
                    <div class="carousel-caption">
						<h1><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h1>
						<p class="lead">Just turns the Twitter Bootstrap Carousel in fullscreen mode, and scale to fit the screen resolution</p>
					</div>
            </div>

            <div class="item">
				<img src="<?php echo img_principal("4") ?>" alt="" />
                    <div class="carousel-caption">
						<h1><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h1>
						<p class="lead">Just turns the Twitter Bootstrap Carousel in fullscreen mode, and scale to fit the screen resolution</p>
					</div>
			</div>
            
            <div class="item">
				<img src="<?php echo img_principal("8") ?>" alt="" />
                    <div class="carousel-caption">
						<h1><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h1>
						<p class="lead">Just turns the Twitter Bootstrap Carousel in fullscreen mode, and scale to fit the screen resolution</p>
					</div>
			</div>
		</div>
    
        <!-- COMEÇA O MENU / JUMBOTRON -->
            <div id="menu" class="page-header jumbotron" ><!--class pertece ao bootstrap --><!--id="header"-->
                <p><a href="<?php bloginfo('url');?>"><img class="img-responsive" id="logo" src="wp-content/themes/WPBaron/imgs/logo.png"/></a></p>
                <p><img class="img-responsive" src="wp-content/themes/WPBaron/imgs/faixa.fw.png" style="margin: 0 auto;" /></p>
                    
        
        
        
<div class="btncontainer">
	<div class="btn_inteiro">
		<div class="btn_fora">
			<a href="<?php echo esc_url($link_games); ?>">
				<div class="btn_dentro" id="btnGames">
				    <span>GAMES</span><img src="http://i57.tinypic.com/2a5yg7a.png" alt="" />
				</div>	
			</a>
		</div>
	</div>

	<div class="btn_inteiro">
		<div class="btn_fora">
			<a href="<?php echo esc_url($link_filmes); ?>">
				<div class="btn_dentro" id="btnFilmes">
					<span>FILMES</span><img src="http://i59.tinypic.com/t8srhg.png" alt="" />
				</div>
			</a>
		</div>
	</div>

	<div class="btn_inteiro">
		<div class="btn_fora">
			<a href="<?php echo esc_url($link_series); ?>">			
				<div class="btn_dentro" id="btnSeries">
					<span>SERIES</span><img src="http://i61.tinypic.com/j5xkbb.png" alt="" />
				</div>	
			</a>
		</div>
    </div>
    
    <div class="btn_inteiro">
		<div class="btn_fora">
			<a href="<?php echo esc_url($link_livros); ?>">			
				<div class="btn_dentro" id="btnLivros">
					<span>LIVROS</span><img src="http://i62.tinypic.com/33f9k0l.png" alt="" />
				</div>	
			</a>
		</div>
    </div>
    
    <div class="btn_inteiro">
		<div class="btn_fora">
			<a href="<?php echo esc_url($link_hqs); ?>">			
				<div class="btn_dentro" id="btnHQs">
					<span>HQs</span><img src="http://i58.tinypic.com/2hef3eo.jpg" alt="" />
				</div>	
			</a>
		</div>
    </div>
    
    
	</div>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        </div>
        <!-- FIM DO MENU -->
        
    
</div><!--fecha DIV INICIAL DO CARROSEL-->

<!-- FIM CARROSSEL *#*#*#**#*#**#*#**#*#*#*#**#**#*#**#*#**#*#*#**#*#*#**#**-->

        
        