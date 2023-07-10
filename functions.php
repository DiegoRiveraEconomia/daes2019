<?php

 
// Add post thumbnail functionality
add_theme_support('post-thumbnails');
add_image_size('blog-large', 669, 272, true);
add_image_size('blog-medium', 200, 200, true);
add_image_size('tabs-img', 52, 50, true);
add_image_size('related-img', 180, 138, true);
add_image_size('recent-posts', 700, 441, true);
add_image_size('cuadrada100x100', 100, 100, true);
add_image_size('recent-works-thumbnail', 66, 66, true);
  

// Add ThickBox
add_action('init', 'init_theme_method');
 
function init_theme_method() {
   add_thickbox();
}


// Our custom post type function
function create_posttype() {
 
    register_post_type( 'noticias',
   
        array(
            'labels' => array(
                'name' => __( 'Noticias' ),
                'singular_name' => __( 'Noticia' )
            ),
            'public' => true,
            'has_archive' => true,
            'taxonomies' => array('post_tag'),
            'rewrite' => array('slug' => 'noticias'),
        )
    );
	
	/*register_post_type( 'actividades',
    
        array(
            'labels' => array(
                'name' => __( 'Actividades' ),
                'singular_name' => __( 'Actividad' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'actividades'),
        )
    );
	*/
	register_post_type( 'capacitacion',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Capacitación' ),
                'singular_name' => __( 'Capacitación' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'capacitacion'),
        )
    );
	
	register_post_type( 'fondos',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Fondos' ),
                'singular_name' => __( 'fondo' )
            ),
            'public' => true,
            'has_archive' => true,
            'taxonomies' => array('post_tag'),
            'rewrite' => array('slug' => 'fondos'),
        )
    );
	
	register_post_type( 'programas',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Programas' ),
                'singular_name' => __( 'programa' )
            ),
            'public' => true,
            'has_archive' => true,
            'taxonomies' => array('post_tag'),
            'rewrite' => array('slug' => 'programa'),
        )
    );
	
	register_post_type( 'links-daes-digital',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Links Daes Digital' ),
                'singular_name' => __( 'Link Daes Digital' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'links-daes-digital'),
        )
    );
	
	register_post_type( 'faqs',
         array(
            'labels' => array(
                'name' => __( 'Preguntas Frecuentes' ),
                'singular_name' => __( 'Preguntas Frecuentes' )
            ),
            'public' => true,
            'has_archive' => true,
            'taxonomies'  => array( 'category' ),
            'rewrite' => array('slug' => 'faqs'),
        )
    );
	
	register_post_type( 'estudios',
         array(
            'labels' => array(
                'name' => __( 'Estudios' ),
                'singular_name' => __( 'Estudios' )
            ),
            'public' => true,
            'has_archive' => true,
            'taxonomies'  => array( 'category' ),
            'rewrite' => array('slug' => 'estudios'),
        )
    );
}

add_filter('bcn_display_attributes', 'my_display_attributes_filter', 10, 3);
function my_display_attributes_filter($attribs, $types, $id)
{
    $extra_attribs = array('class' => array('breadcrumb-item'));
    //For the current item we need to add a little more info
    if(is_array($types) && in_array('current-item', $types))
    {
        $extra_attribs['class'][] = 'active';
        $extra_attribs['aria-current'] = array('page');
    }
    $atribs_array = array();
    preg_match_all('/([a-zA-Z]+)=["\']([a-zA-Z0-9\-\_ ]*)["\']/i', $attribs, $matches);
    if(isset($matches[1]))
    {
        foreach ($matches[1] as $key => $tag)
        {
            if(isset($matches[2][$key]))
            {
                $atribs_array[$tag] = explode(' ', $matches[2][$key]);
            }
        }
    }
    $merged_attribs = array_merge_recursive($atribs_array , $extra_attribs);
    $output = '';
    foreach($merged_attribs as $tag => $vals)
    {
        $output .= sprintf(' %1$s="%2$s"', $tag, implode(' ', $vals));
    }
    return $output;
}



function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }	
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}
 
function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  }	
  $content = preg_replace('/[.+]/','', $content);
  $content = apply_filters('the_content', $content); 
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}


function my_custom_get_posts( $query ) {
	
    if ( is_admin() || ! $query->is_main_query() )
        return;	

    if ( $query->is_archive() ) {
    	
			$outrepeat = array();
			$featured = get_posts(array('post_type' => 'noticias', 'numberposts' => '1', 'tag' => 'destacado'));
			foreach ($featured as $post) : setup_postdata($post);
			$outrepeat[] = $post -> ID;
			endforeach;
		
        $query->set( 'post__not_in', $outrepeat );
    }
}
add_action( 'pre_get_posts', 'my_custom_get_posts', 1 );


function bootstrap_pagination( \WP_Query $wp_query = null, $echo = true ) {
	if ( null === $wp_query ) {
		global $wp_query;
	}
	$pages = paginate_links( [
			'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
			'format'       => '?paged=%#%',
			'current'      => max( 1, get_query_var( 'paged' ) ),
			'total'        => $wp_query->max_num_pages,
			'type'         => 'array',
			'show_all'     => false,
			'end_size'     => 3,
			'mid_size'     => 1,
			'prev_next'    => true,
			'prev_text'    => __( '« ' ),
			'next_text'    => __( ' »' ),
			'add_args'     => false,
			'add_fragment' => ''
		]
	);
	if ( is_array( $pages ) ) {
		//$paged = ( get_query_var( 'paged' ) == 0 ) ? 1 : get_query_var( 'paged' );
		$pagination = '<div class="pagination"><ul class="pagination">';
		foreach ( $pages as $page ) {
			$pagination .= '<li class="page-item"> ' . str_replace( 'page-numbers', 'page-link', $page ) . '</li>';
		}
		$pagination .= '</ul></div>';
		if ( $echo ) {
			echo $pagination;
		} else {
			return $pagination;
		}
	}
	return null;
}



/* Adds */

//add_action('init', 'bootstrap_pagination'); // Add our HTML5 Pagination
add_action( 'init', 'create_posttype' ); // Hooking up our function to theme setup



//code to validate textbox
function custom_text_validation_filter($result, $tag) {  
      $type = $tag['type'];  
      $name = $tag['name'];
      //here textbox type name is 'rut'
      if($name == 'rut') { 
          $value = $_POST[$name];  
          if (preg_match('/[^-.k0-9]/i', $value)){
            $result->invalidate( $tag, "Caracteres Inválidos." );
          } 
      } 
      return $result;  
}
add_filter('wpcf7_validate_text','custom_text_validation_filter', 10, 2); 
add_filter('wpcf7_validate_text*', 'custom_text_validation_filter', 10, 2);


//Validador de Rut para CF7
add_filter( 'wpcf7_validate_text*', 'custom_is_rut_validation_filter', 20, 2 );
//custom_email_confirmation_validation_filter
//Add Validate RUT 
function custom_is_rut_validation_filter($result,$tag) {

$tag = new WPCF7_Shortcode($tag);    

if ('rut' == $tag->name ) {// Validation applies to these textfield names. Add more with || inbetween

 if(strpos($_POST['rut'],"-")==false){
        $RUT[0] = substr($_POST['rut'], 0, -1);
        $RUT[1] = substr($_POST['rut'], -1);
    }else{
        $RUT = explode("-", trim($_POST['rut']));
    }
    $elRut = str_replace(".", "", trim($RUT[0]));
    $factor = 2;
    for($i = strlen($elRut)-1; $i >= 0; $i--):
        $factor = $factor > 7 ? 2 : $factor;
        $suma += $elRut[$i]*$factor++;
    endfor;
    $resto = $suma % 11;
    $dv = 11 - $resto;
    if($dv == 11){
        $dv=0;
    }else if($dv == 10){
        $dv="k";
    }else{
        $dv=$dv;
    }
    
    if($dv != trim(strtolower($RUT[1]))){
       $result->invalidate($tag,"Rut inválido");
   }
}
return $result;
}



add_shortcode('registro_diplo', 'generate_content');
function generate_content( $atts, $content ) {
 $atts = shortcode_atts( array(
 'icono' => 'pencil'
 ), $atts ); 

global $wpdb;	    
$form_diplo = $wpdb->get_results( "SELECT form_id, form_post_id, form_value, form_date FROM daes645_db7_forms WHERE form_post_id = '300'" );

	
	$output = '';

    $output .= '<table>	
	<thead>
	<tr class="table100-head">
	<th class="column1">ID</th>
	<th class="column2">FORM ID</th>
	<th class="column3">Nombres</th>
	<th class="column4">Apellidos</th>
	<th class="column5">Rut</th>
	<th class="column6">Dirección</th>
	<th class="column7">Región</th>	
	<th class="column8">Comuna</th>
	<th class="column9">Fono</th>
	<th class="column10">Email</th>
	<th class="column11">Nivel Educacional</th>
	<th class="column12">Postitulo</th>
	<th class="column13">Cooperativa</th>
	<th class="column14">Servicio</th>
	<th class="column15">Interés</th>
	
	</tr>
	</thead>
	<tbody>';

	foreach($form_diplo as $row){
					
		$form_value = unserialize($row->form_value);
		
	
	$output .= '<tr>	
		<td>' . $row->form_id . '</td>
		<td>' .$row->form_post_id .'</td>';	
		
	$output .= '<td>' . $form_value['nombres'] . '</td>
		<td> ' . $form_value['apellidos'] . '</td>
		<td> ' . $form_value['rut'].' </td>
		<td> ' . $form_value['direccion'] . '</td>
		<td> ' . $form_value['region'] . '</td>
		<td> ' . $form_value['comuna'] . '</td>
		<td> ' . $form_value['fono'] . '</td>
		<td> ' . $form_value['email'] . '</td>
		<td> ' . $form_value['niveleduca'] . '</td>
		<td> ' . $form_value['postitulo'] . '</td>
		<td> ' . $form_value['cooperativa'] . '</td>
		<td> ' . $form_value['servicio'] . '</td>
		<td> ' . $form_value['interes'] . '</td>			
		
	</tr>';	
		
 } 
$output .= '</tbody></table>';	

    return $output;
}

/*
 * <th class="column16">FECHA</th>
 * 
 * <td> ' . $row->form_date . '</td> */


//Oculta los msg de error en Login

function no_wordpress_errors(){
  return 'Something is wrong!';
}
add_filter( 'login_errors', 'no_wordpress_errors' );

//Remueve el login por email

remove_filter( 'authenticate', 'wp_authenticate_email_password', 20 );

//Remueve Link de multimedia

function wpb_imagelink_setup() {
    $image_set = get_option( 'image_default_link_type' );
     
    if ($image_set !== 'none') {
        update_option('image_default_link_type', 'none');
    }
}
add_action('admin_init', 'wpb_imagelink_setup', 10);

//Deshabilita XML-RPC
add_filter('xmlrpc_enabled', '__return_false');

add_filter( 'rest_authentication_errors', function( $result ) {
    if ( ! empty( $result ) ) {
        return $result;
    }
    if ( ! is_user_logged_in() ) {
        return new WP_Error( 
        	'rest_not_logged_in', 
        	'You are not currently logged in.', 
        	array( 'status' => 401 ) 
        );
    }
    return $result;
});

/**
 * Eliminamos la versión de WordPress
 */
add_filter('the_generator', '__return_false');

?>