<?php get_header(); ?>    
<?php the_post() ?>

<?php 
$imagen = get_field('imagen');
$epigrafe = get_field('epigrafe');
$bajada = get_field('bajada');
?>

 <section style="padding: 50px 0 0 0;">
    <div class="container" style="max-width: 800px;">
      
      <div class="row">
      	
      	<div class="col-lg-12 pt-0 pr-0 pb-0">
      	<!--<p class="text-muted"><?php the_time('j') ?>
      	de
      	<?php the_time('F') ?>
      	de 
      	<?php the_time('Y') ?></p> -->
      	</div>
      	      	
      	<div class="col-lg-12">
      	<p><?php echo  $epigrafe; ?></p>
      	</div>
      	
      	<div class="col-lg-12">      	
      	<h1><?php the_title(); ?></h1>      	
      	</div>
      	
      	<div class="col-lg-12 pb-4">      	
      	<img src="<?php echo $imagen['url']; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" width="100%" />      	
      	</div>
      
      	<div class="col-lg-12 pt-0 pb-0">
      	<p><b><i><?php	echo $bajada ?></i></b></p>
      	</div>
      
     	<div class="col-lg-12 pb-4">  	
     	<p><?php the_content(); ?></p>     	
     	</div>
      
      </div>
      
    </div>
  </section>


<?php get_footer(); ?>