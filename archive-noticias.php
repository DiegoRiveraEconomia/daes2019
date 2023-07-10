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
				 
				<?php
				
				if($page==0)	{			
				
				$featured_noticias = get_posts(array('post_type' => 'noticias', 'numberposts' => '1', 'tag' => 'destacado'));
				
				foreach ($featured_noticias as $post) : setup_postdata($post);
				
				$imagen = get_field('imagen');					  
				
				?>
				
					<div class="row mt-4">

						<div class="col-lg-6">
			
							 <a href="<?php the_permalink(); ?>"><img src="<?php echo $imagen['url'];?>" width="100%" /></a>
			
						</div>
						
						<div class="col-lg-6 pt-5">
			
							<a href="<?php the_permalink(); ?>"><h2 class="service-heading" style="font-size:25px; padding-left:0;"><?php the_title(''); ?></h2></a>
				
								<p style="text-align:left;">
									<?php echo excerpt(25); ?>
								</p>
			
						</div>
			
					</div>
					
			  <?php endforeach; }?>

	</div>
</section>
	
	
	<section id="services" style="padding: 50px 0 0 0;">
    <div class="container">
      
      <div class="row">
      
			
			<?php get_template_part('loop-noticias'); ?>
			
		</div>
		
		<div class="row">
			<div class="col-lg-8 mx-auto">
				<?php get_template_part('pagination'); ?>
			</div>
		</div>
	
	</div>
	
</section>  
    
<?php get_footer(); ?>
