<?php 
get_header();
?>
<section style="padding: 50px 0 0 0;">
    <div class="container">
      
      <div class="row">
      
			<h1 class="titulo"><?php post_type_archive_title(); ?></h1>

			<article>		
			<?php while (have_posts()) : the_post(); ?>
				
				<div class="contenido">
					<?php the_content('');			
				
					?>
				</div>
			<?php edit_post_link('Editar'); ?>
			<?php endwhile;?>
			<?php wp_reset_query(); ?>
			</article>
			
		</div>
		
		<div class="row">
			<div class="col-lg-8 mx-auto">
				<?php get_template_part('pagination'); ?>
			</div>
		</div>
	
	</div>
	
</section>  
    
<?php get_footer(); ?>
