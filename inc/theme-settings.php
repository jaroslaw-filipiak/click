<?php
/**
 * Check and setup theme's default settings
 *
 * @package click5
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function click5_disable_author_page() {
    global $wp_query;

    if ( is_author() ) { 
        wp_redirect( home_url(), 301 );
        exit; 
    }
}
add_action('template_redirect', 'click5_disable_author_page');

function click5_disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );

	add_filter( 'tiny_mce_plugins', 'click5_disable_emojis_tinymce' );
	add_filter( 'wp_resource_hints', 'click5_disable_emojis_remove_dns_prefetch', 10, 2 );
}
add_action( 'init', 'click5_disable_emojis' );
   

function click5_disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}

function click5_disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
	if ( 'dns-prefetch' == $relation_type ) {
		$emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );

		$urls = array_diff( $urls, array( $emoji_svg_url ) );
	}

	return $urls;
}

function is_blog () {
	global  $post;
			$postType = get_post_type($post);

	return ( ((is_archive()) || (is_author()) || (is_category()) || (is_home()) || (is_single()) || (is_tag())) && ( $postType == 'post')  ) ? true : false ;
}

function click5_blog_menu_highlight($classes = array(), $menu_item = false) {
    if ( !is_404() && !is_page() && 12 == $menu_item->object_id && !in_array( 'active', $classes ) ) {
        $classes[] = 'active';        
    }

    return $classes;
}
add_filter('nav_menu_css_class', 'click5_blog_menu_highlight', 100, 2); 
   
add_filter('show_admin_bar', '__return_false');

function click5_check_background() {
	if ( has_post_thumbnail() ){
		$featured_img_url = get_the_post_thumbnail_url(get_the_ID()); 
	} else {
		$featured_img_url = esc_url( get_template_directory_uri() ) . '/img/heroes/hero.webp';
	}

	return $featured_img_url;
}

function get_primary_category( $post = 0, $taxonomy = 'category' ) {	
    if ( !$post ) {
		$post = get_the_ID();
	}

	$terms = get_the_terms( $post, $taxonomy );

	if ($terms) {
		if ( class_exists('WPSEO_Primary_Term') ) {
            $wpseo_primary_term = new WPSEO_Primary_Term( $taxonomy, $post );
            $wpseo_primary_term = $wpseo_primary_term->get_primary_term();
            $term = get_term( $wpseo_primary_term );
    
            if ( is_wp_error( $term ) ) {
                $primary_category = $terms[0]->term_id;
            } else {
                $primary_category = $term->term_id; 
            }        
        } else {
            $primary_category = $terms[0]->term_id;
        }
	} else {
		$primary_category = 0;
	}
    
	return $primary_category;
}

function get_reading_time($text) {
    $totalReadTm = ceil(str_word_count($text) / 200);

    if ($totalReadTm == 1) {
        $totalReadTm = $totalReadTm . ' minute read';
    } else {
        $totalReadTm = $totalReadTm . ' minutes read';
    }

    return $totalReadTm;
}

add_filter('wpcf7_form_elements', function ($content) {
    $content = preg_replace(
				'/<label><input type="(checkbox|radio)" name="(.*?)" value="(.*?)" \/><span class="wpcf7-list-item-label">/i', 
				'<label class="custom-control custom-\1"><input type="\1" name="\2" value="\3" class="custom-control-input"><span class="wpcf7-list-item-label custom-control-label">', 
				$content
			);

    return $content;
});

add_shortcode('bloginfo', function($atts) {
	extract(shortcode_atts(array(
		'key' => '',
	), $atts));

	if($key == 'domain') {
		$bloginfo = str_replace(array("http://","https://", "www."), "", home_url());
	} else {
		$bloginfo = get_bloginfo($key);
	}
 
	return $bloginfo;
});

add_shortcode('c5video', function($atts) {
	extract(shortcode_atts(array(
		'id' 	 => '',
		'poster' => '',
		'align'  => '',
		'style'  => '',
		'type'   => 'youtube'
	), $atts));

	if( !$poster ) {
		if( $type == 'vimeo' ) {
			$poster = 'https://vumbnail.com/'. $id .'.jpg';
		} else {
			$poster = 'https://img.youtube.com/vi/'. $id .'/hqdefault.jpg';
		}
	}

	$video = '<div class="js-video-button video '. $type .' '. $align .'" data-video-id="'. $id .'" style="background-image: url(\''. $poster .'\'); '. $style .'"></div>';
 
	return $video;
});

add_filter('wpcf7_autop_or_not', '__return_false');

/* CRM INTEGRATION */

add_action('wpcf7_before_send_mail', 'click5_recaptcha_validate', 10, 3);

function click5_recaptcha_validate($contact_form, &$abort, $submission) {
	if($submission) {
    	$posted_data = $submission->get_posted_data(); 

		if($posted_data['g-recaptcha-response']) {
			$captcha = $posted_data['g-recaptcha-response'];
		} else {
			$captcha = false;
		}
	}

	$responseCaptcha = array(
		"contact_form_id" => $_POST['_wpcf7'],
		"status" => "validation_failed",
		"message" => "Invalid reCaptcha response. Please refresh and try again.",
		"invalid_fields" => array(),
		"posted_data_hash" => "",
		"into" => "#" . $_POST['_wpcf7_unit_tag']
	);
	
	if (!$captcha) {
		echo json_encode($responseCaptcha);
		die();
	} else {
		$secret    = get_field("recaptcha_secretkey", "option");
		$gresponse = file_get_contents(
			"https://www.google.com/recaptcha/api/siteverify?secret=" . $secret . "&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']
		);
		$gresponse = json_decode($gresponse);
	
		if ($gresponse->success === false) {	
			echo json_encode($responseCaptcha);	
			die();
		} else {
			if ( isset($_COOKIE['wordpress_cf7_form_'.$_POST['_wpcf7'].'_timer']) && $_COOKIE['wordpress_cf7_form_'.$_POST['_wpcf7'].'_timer'] == true ) {
				$responseTimer = array(
					"contact_form_id" => $_POST['_wpcf7'],
					"status" => "validation_failed",
					"message" => "You have already submitted a contact form, please wait at least 5 minutes before submitting another.",
					"invalid_fields" => array(),
					"posted_data_hash" => "",
					"into" => "#" . $_POST['_wpcf7_unit_tag']
				);
		
				echo json_encode($responseTimer);		
				die();
			} else {
				setcookie("wordpress_cf7_form_".$_POST['_wpcf7']."_timer", true, time() + (60 * 5), "/");
			}
		}
	}  
}