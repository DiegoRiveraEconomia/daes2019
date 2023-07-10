<?php
/*
 * Template Name: Plantilla Preguntas Frecuentes
 * Author: Juan Génova.
 *
 */
?>

<?php get_header(); ?>
<?php the_post()
?>

<section style="padding: 50px 0 50px 0; background-color:#f6f6f6;">
	<div class="container">

		<div class="row">
			<div class="col-lg-12">
				<h1><?php the_title(); ?></h1>
			</div>
			
			<!--<div class="col-lg-12 pt-4">
		        <div class="input-group input-group-lg">
		            <input type="search" class="busqueda form-control search-field" placeholder="Buscar preguntas..." value="" name="search_text">           
			          <div class="input-group-btn">		            
			          <button type="submit" class="btn btn-info busqueda-documentos">Buscar</button>
			          </div>
			   	</div>
	      	</div>-->
			
		</div>		

	</div>
</section>


<section id="fondos" style="padding: 50px 0 50px 0; min-height: 400px;">
    <div class="container">     
      
      
        <div class="row">
	<?php 
	
	if(is_page('cooperativas')){	      	
      	 get_template_part('loop-cooperativas');
	} else if(is_page('asociaciones-gremiales-y-consumidores')){
		  get_template_part('loop-asociaciones-de-consumidores-y-gremiales');
	}  else if(is_page('asociaciones-de-consumidores')){
		 get_template_part('loop-asociaciones-de-consumidores');	
	} else{
		 //get_template_part('loop-faqs');
	?>
	
			<div class="col-md-4 col-sm-6 portfolio-item">          
			   <div class="portfolio-caption" style="min-height: 115px;">
			       <h4 style="text-align: center;"><a style="font-size:1.3em; color:#fff;" href="cooperativas">Cooperativas</a></h4>
			   </div>
	       </div>
	       
	       <div class="col-md-4 col-sm-6 portfolio-item">          
			   <div class="portfolio-caption" style="min-height: 115px;">
			       <h4 style="text-align: center;"><a style="font-size:1.3em; color:#fff;" href="asociaciones-gremiales-y-consumidores">Asociaciones Gremiales y Consumidores</a></h4>
			   </div>
	       </div>	
	       
	       
	
	<?php } ?>
     	</div>
      
      
      </div>
 </section>


<?php get_footer(); ?>