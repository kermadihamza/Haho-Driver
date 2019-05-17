<?php
class EnqueueScript
{
     /**
   * Fonction qui va ajouter des scripts dynamiquement afin que l'on puisse les inclures dans le thème avec wp_head() et wp_footer()
   * Nous avons ajouter le mot public afin que cette méthode puisse être utiliser depuis l'exterieur. Cela veut dire que l'on peut créer une instance de cette class et puis faire appel à la méthode ( ex: $instance->methode() )
   *
   * @return void
   */
public static function ajout_css_js()
   {
  // Ajout des scripts css
  // https://developer.wordpress.org/reference/functions/wp_enqueue_style/
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
  wp_enqueue_style('fontawesome', get_template_directory_uri() . '/vendor/fontawesome-free/css/all.min.css');
  wp_enqueue_style('font-montserrat', get_template_directory_uri() . "/fonts/icomoon/style.css");
  wp_enqueue_style('jquery', get_template_directory_uri() . '/css/jquery-ui.css');
  wp_enqueue_style('owl_carousel', get_template_directory_uri() . '/css/owl.carousel.min.css');
  wp_enqueue_style('owl_theme_default', get_template_directory_uri() . '/css/owl.theme.default.min.css');
  wp_enqueue_style('bootstrap-datepicker', get_template_directory_uri() . '/css/bootstrap-datepicker.css');
  wp_enqueue_style('flaticon', get_template_directory_uri() . '/fonts/flaticon/font/flaticon.css');
  wp_enqueue_style('aos', get_template_directory_uri() . '/css/aos.css');
  wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
  wp_enqueue_style('font-lato', "https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700");
  wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css');


  // Ajout des scripts js
  // https://developer.wordpress.org/reference/functions/wp_enqueue_script/
  // wp_enqueue_script('jquery-perso', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', [], null, true);
  wp_enqueue_script('jquery');
  wp_enqueue_script('jquery-migrate', get_template_directory_uri() . '/js/jquery-migrate-3.0.1.min.js', [], null, true);
  wp_enqueue_script('jquery-ui', get_template_directory_uri() . '/js/jquery-ui.js', [], null, true);
  wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', [], null, true);
  wp_enqueue_script('popper1', get_template_directory_uri() . '/js/popper.min.js', [], null, true);
  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', [], null, true);
  wp_enqueue_script('jquery-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', [], null, true);
  wp_enqueue_script('jquery-stellar', get_template_directory_uri() . '/js/jquery.stellar.min.js', [], null, true);
  wp_enqueue_script('jquery-countdown', get_template_directory_uri() . '/js/jquery.countdown.min.js', [], null, true);
  wp_enqueue_script('jquery-magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', [], null, true);
  wp_enqueue_script('jquery-bootstrap-datepicker', get_template_directory_uri() . '/js/bootstrap-datepicker.min.js', [], null, true);
  wp_enqueue_script('aos', get_template_directory_uri() . '/js/aos.js', [], null, true);
  wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', [], null, true);
}
}
 // Nous ajoutons un écouteur d'événements pour nous prévenir lorsque l'on peut ajouter des css et scripts.
// Cette écouteur va déclancher la fonction ajout_css_js()
// https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/
//enqueue_script = new EnqueueScript();
add_action('wp_enqueue_scripts', [EnqueueScript::class, 'ajout_css_js']);
?>