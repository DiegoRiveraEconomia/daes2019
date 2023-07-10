<?php get_header(); ?>    
<?php the_post() ?>

 <section style="padding: 50px 0 0 0; min-height: 550px;">
    <div class="container">
      
     <div class="row">
         
      <div class="col-lg-8">
      
       <div class="row">
      	      	      	      	
      	<div class="col-lg-12">      	
      	<h1><?php the_title(); ?></h1>      	
      	</div>
      	      	      
     	<div class="col-lg-12 pb-4">  	
     	<p><?php the_content(); ?></p>     	
     	</div>
     	
     	</div>
      
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
  </section>


<?php get_footer(); ?>