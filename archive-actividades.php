<?php get_header(); 

$page = get_query_var('paged');

?>

<section style="padding: 50px 0 50px 0; background-color:#f6f6f6;">
	<div class="container">

		<div class="row">
			<div class="col-lg-12">
				<h1 class="titulo"><?php post_type_archive_title(); ?></h1>		
			</div>
		</div>
		
	</div>
</section>
	
	
	<section id="services" style="padding: 50px 0 0 0;">
    <div class="container">
      
      <div class="row">
      
			
			<?php get_template_part('loop-actividades'); ?>
			
		</div>
		
		<div class="row">
			<div class="col-lg-8 mx-auto">
				<?php get_template_part('pagination'); ?>
			</div>
		</div>
	
	</div>
	
</section>  
    
<?php get_footer(); ?>
