	<div id="accordion-cooperativas" class="accordion-faqs">
	        
        	<?php 
        	    $o=1;   		        	
	        	$featured = get_posts(array('post_type' => 'faqs', 'numberposts' => '100',  'orderby' => 'date', 'category' => 5, 'order' => 'ASC'));				
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
			
			    <div id="collapse<?php echo $o; ?>" class="collapse" aria-labelledby="heading<?php echo $o; ?>" data-parent="#accordion-cooperativas">
			      <div class="card-body">
						<?php the_content();?>
			      </div>
			    </div>
			 </div>
		
			<?php wp_reset_query(); ?>   	
			<?php $o++; endforeach; ?>
	</div>