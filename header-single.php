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
<!-- Barra de menu -->
     <nav id="brn-menu" class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#meu-navbar">
            <span class="sr-only">Toggle navigation</span>
            <!-- Icon-bar são as barrinhas do cione de menu portable -->
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
            <li><a href="#brn-Games" class="page-scroll">Games</a></li>
            <li><a href="#brn-Filmes" class="page-scroll">Filmes</a></li>
            <li><a href="#brn-Series" class="page-scroll">Series</a></li>
            <li><a href="#brn-Livros" class="page-scroll">Livros</a></li>
            <li><a href="#brn-HQs" class="page-scroll">HQs</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>