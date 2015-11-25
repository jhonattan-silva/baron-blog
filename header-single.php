<html> <!--Fecha no footer-->
    <head>
        <meta name="viewimport" content="width=device-width, initial-scale=1, maximun-scale=1, user-scalable=no"><!--função para ajustes mobile-->
        <title>HELLO BITCHESSS!!!!</title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"> <!--Ligação do wp para encontrar o css-->
        
        
        <!-- links bootstrap online --!
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <?php wp_enqueue_style('single-style', get_bloginfo('template_directory') . '/css/single-style.css'); ?>
      
        <?php wp_head(); ?>
    </head>



<body>

<!-- BOTÕES SOCIAIS -->
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.5";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <script type="text/javascript" src="http://apis.google.com/js/plusone.js"></script>

    <script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>


<!-- CATEGORIAS -->
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





<!-- Barra de menu -->
    <nav id="brn-menu" class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#meu-navbar">
            <span class="sr-only">Toggle navigation</span>
            <!-- Icon-bar são as barrinhas do icone de menu portable -->
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">THE BARON</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="meu-navbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#brn-home" class="page-scroll">Home</a></li>
            <li><a href="<?php echo esc_url($link_games); ?>" class="page-scroll">Games</a></li>
            <li><a href="<?php echo esc_url($link_filmes); ?>" class="page-scroll">Filmes</a></li>
            <li><a href="<?php echo esc_url($link_series); ?>" class="page-scroll">Series</a></li>
            <li><a href="<?php echo esc_url($link_livros); ?>" class="page-scroll">Livros</a></li>
            <li><a href="<?php echo esc_url($link_hqs); ?>" class="page-scroll">HQs</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>