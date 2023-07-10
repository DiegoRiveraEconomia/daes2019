<?php 

	get_header(); 

 	$tag = get_queried_object();
    
?>

 <section id="fondos_tag" style="padding: 50px 0 0 0; margin-bottom:50px;">
    <div class="container">
    
    
     <div class="row">
     
	     <div class="col-lg-12 pb-4">
	     		
	     		<h1><?php _e( 'Fondos ', 'html5blank' ); echo single_tag_title('', false); ?></h1>
	     		
	     </div>

     </div>
      
      <div class="row">
      
      <div class="col-lg-8">
      
      <?php $query_posts = new WP_Query( array('post_type' => 'fondos', 'taxonomies' => array('post_tag'), 'tag' => $tag->slug)); ?>
      
				<?php
				
				 if ( $query_posts->have_posts() ) : while ( $query_posts->have_posts() ) : $query_posts->the_post(); 				
					$imagen = get_field('imagen');  
				
				?>   
					   <div class="col-lg-12 ml-0 pl-0">
					   
				         <a href="<?php the_permalink(); ?>"><?php the_title(''); ?></a>
				          <p><?php echo excerpt(25); ?></p>
				          
				       </div>
				       
					
				<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>
				<?php wp_reset_query(); ?>
				
			
      </div>
      
      
      <div class="col-lg-4">
      	
      	
      	<div class="row">
      	
	     		<div class="col-lg-12">				
							<h2 class="section-heading">Instituciones</h2>
							<hr class="redline" align="left">
				</div>
				
				<div class="col-lg-12">		      	
	      	
	      	<ul class="lista_tags">
     <?php
     
       $args = array(       
       'child_of'                 => 0,
       'parent'                   => '',
       'orderby'                  => 'id',
       'exclude'				  => $exclude,
       'order'                    => 'ASC',
       'hide_empty'               => 1,
       'hierarchical'             => 1,
       'taxonomy'                 => 'tags',
       'pad_counts'               => false );
       $tags = get_tags($args);
   ?> 
   
   	<?php
   	   	
       foreach ($tags as $tag) {
       		
		if($tag->name=="destacado"){
			echo "";	
		}else{
			$tag_link = get_tag_link( $tag->term_id );		        
     ?>
     
    	<li><a href="<?php echo $tag_link; ?>"><?php echo $tag->name; ?></a></li>
    		    		    
	<?php } }?>
      	</ul>
     			</div>
      	
      		</div>
      
      
      </div>
      
      </div>
      
      	<div class="row">
			<div class="col-lg-8 mx-auto">
				<?php get_template_part('pagination'); ?>
			</div>
		</div>   
      
    </div>
  </section>

<?php get_footer(); ?>