 <?php
       $args = array(
       'type'                     => 'faqs',
       'child_of'                 => 0,
       'parent'                   => '',
       'orderby'                  => 'id',
       'order'                    => 'ASC',
       'hide_empty'               => 1,
       'hierarchical'             => 1,
       'taxonomy'                 => 'category',
       'pad_counts'               => false );
       $categories = get_categories($args);
   ?> 
   
   	<?php   	
       foreach ($categories as $category) {        
     ?>
           <div class="col-lg-12 pl-0 pr-0 pb-4 pt-4">
	         <h2 class="section-heading"><?php echo $category->name; ?></h2>
	         <hr class="redline" align="left">  
	        </div>

	<div id="accordion-<?php echo $category->cat_ID; ?>" class="accordion-faqs">
	        
        	<?php 
        	    $o=1;   		        	
	        	$featured = get_posts(array('post_type' => 'faqs', 'numberposts' => '100',  'orderby' => 'date', 'category' => $category->cat_ID));				
				foreach ($featured as $post) : setup_postdata($post);		
				
			?>
			
			<div>
			    <div id="heading<?php echo $o; ?>">
			      <h5 class="mb-0">
			        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?php echo $o; ?>" aria-expanded="true" aria-controls="collapse<?php echo $o; ?>">
			         	<?php the_title(); ?>
			        </button>
			      </h5>
			    </div>
			
			    <div id="collapse<?php echo $o; ?>" class="collapse" aria-labelledby="heading<?php echo $o; ?>" data-parent="#accordion-<?php echo $category->cat_ID; ?>">
			      <div class="card-body">
						<?php the_content();?>
			      </div>
			    </div>
			 </div>
		
			<?php wp_reset_query(); ?>   	
			<?php $o++; endforeach; ?>
	</div>		
<?php }?>