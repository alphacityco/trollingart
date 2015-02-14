<?php

    function estilos_temas(){

      wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css');
      wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
      wp_enqueue_style('fontawsome_css', get_template_directory_uri() . '/css/font-awesome.min.css');

    }
    add_action('wp_enqueue_scripts','estilos_temas');

    function temas_js(){

      global $wp_scripts;

      wp_register_script('html5_shiv','https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js','','',false);
      wp_register_script('respond_js','https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js','','',false);

      $wp_scripts->add_data('html5_shiv','conditional','lt IE 9');
      $wp_scripts->add_data('respond_js','conditional','lt IE 9');

      wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'),'',true);
      wp_enqueue_script('sticky_js', get_template_directory_uri() . '/js/jquery.sticky.js', array('jquery'),'',true);
    }


    add_action('wp_enqueue_scripts','temas_js');
    add_theme_support( 'post-thumbnails' );

    /**
    * Sorts a WordPress result array by custom criterias
    *
    * Works for all kinds of results that are arrays of the form $result[0]->memberVariable1 etc.
    *
    * @param   array   $results    WordPress results
    * @param   string  $by         Member variable to sort by.
    * @param   string  $order      (optional) 'desc' for 'descending', everything else will be treated as 'ascending'
    * @return  array               The newly sorted results array.
    */
    function sortWpResults( $results, $by, $order = 'asc' ) {

      $by         = strtolower( $by );

      $orderComp  = ( strtolower( $order ) == 'desc' ) ? ' -1 : +1' : ' +1 : -1';

      usort( $results, create_function( '$a,$b', 'return ( $a->' . $by . ' > $b->' . $by  . ' ) ? ' . $orderComp . ';' ) );

      return $results;

    }
    

    /*===================================================================================
    * Add Author Links
    * =================================================================================*/
    function add_to_author_profile( $contactmethods ) {

      $contactmethods['rss_url'] = 'RSS URL';
      $contactmethods['google_profile'] = 'Google Profile URL';
      $contactmethods['twitter_profile'] = 'Twitter Profile URL';
      $contactmethods['facebook_profile'] = 'Facebook Profile URL';
      $contactmethods['linkedin_profile'] = 'Linkedin Profile URL';

      return $contactmethods;
    }
    add_filter( 'user_contactmethods', 'add_to_author_profile', 10, 1);

?>
