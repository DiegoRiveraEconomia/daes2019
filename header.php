<!DOCTYPE html>
<html lang="es">

<head>

  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="https://www.economia.gob.cl/wp-content/uploads/2015/08/favicon.ico" type="image/x-icon" />
   <title>
    
    <?php 
	   //flush_rewrite_rules();
	   
	   if ( is_category() ) {
                echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
            } elseif ( is_tag() ) {
                echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
            } elseif ( is_archive() ) {
                wp_title(''); echo ' Archive | '; bloginfo( 'name' );
            } elseif ( is_search() ) {
                echo 'Search for &quot;'.wp_specialchars($s).'&quot; | '; bloginfo( 'name' );
            } elseif ( is_home() || is_front_page() ) {
                bloginfo( 'name' );
            }  elseif ( is_404() ) {
                echo 'Error 404 Not Found | '; bloginfo( 'name' );
            } elseif ( is_single() ) {
                wp_title('');
            } else {
                echo wp_title( ' | ', false, 'right' ); bloginfo( 'name' );
            } ?>
            
    
    </title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">	
  
  <!-- Custom fonts for this template -->
  <link href="<?php bloginfo('template_url') ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="<?php bloginfo('template_url') ?>/css/agency.min.css" rel="stylesheet">
  
    <!-- Custom Style DAES -->
  <link href="<?php bloginfo('template_url') ?>/style.css" rel="stylesheet">
  
  <?php wp_head();?>


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-JF3NZR5FKH"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-JF3NZR5FKH');
</script>


<?php $texto_landing = get_field('texto_landing','2'); ?>

</head>

<body id="page-top">



  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="<?php bloginfo('url') ?>">
      <img src="/wp-content/uploads/2021/04/Logo-DAES_2021.png" />
      <!--Start Bootstrap-->
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php bloginfo('url') ?>/quienes-somos">Quiénes Somos</a>
          </li>
          <li class="nav-item dropdown">          
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Recursos
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
            <a class="dropdown-item" href="<?php bloginfo('url') ?>/normativas/">Normativas</a>
			      <a class="dropdown-item" href="<?php bloginfo('url') ?>/guias-fichas-y-estatutos/">Guías, fichas y estatutos tipo</a>
            <a class="dropdown-item" href="<?php bloginfo('url') ?>/capacitacion/">Ofertas de capacitación</a>
            <a class="dropdown-item" href="#">Tutoriales (Vídeos)</a>
			  </div>
          </li>		
							 
			    <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Estadísticas</a>	
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="<?php bloginfo('url') ?>/documentos/estadisticas/">Informes Estadísticos</a>				  
                <a class="dropdown-item" href="#">Mapa Organizaciones</a>				  
                <a class="dropdown-item" href="#">Registro de cooperativas activas y vigentes</a>				  
            </div>
          </li>
		<!--<li class="nav-item">
            <a class="nav-link" href="<?php bloginfo('url') ?>/beneficios">Beneficios</a>
          </li>-->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Noticias</a>	
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Noticias</a>				  
                <a class="dropdown-item" href="#">En los medios</a>				  
                
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://tramites.economia.gob.cl/DAES">DAES Digital</a>
          </li>
         <li class="nav-item">
            <a class="nav-link" href="<?php bloginfo('url') ?>/contacto" >Atención ciudadana</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  
  <!--<header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">
        
        <?php echo $texto_landing; ?>
                
        </div>       
      </div>
    </div>
  </header>-->
  
  
  <header class="masthead" style="background-color:#011c41; background-image: none; height: 160px;">
    <div class="container">
      
    </div>
  </header> 	
 	
 		<section style="padding:5px 0 5px 0 !important; background-color:#f6f6f6;"> 		
		 		<div class="container">
		 			<div class="row">
		 				<div class="col-lg-12">
				  			<?php if(function_exists('bcn_display_list')):?>
							<nav class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/" aria-label="breadcrumb">
							    <ol class="breadcrumb">
							        <?php bcn_display_list();?>
							    </ol>
							</nav>
							<?php endif; ?>
			            </div>
		            </div>
		        </div>        
      	</section>
  

