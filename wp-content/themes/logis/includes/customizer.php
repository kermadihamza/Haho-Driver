<?php
class MgCustomizer
{
  // <!-- BANNER -->

  public static function ajout_personnalisation_banner($wp_customize)
  {
    // panel
    $wp_customize->add_panel('coding-panel-banner', [
      'title' => __('Section Banner'),
      'description' => __('Personnalisation de la section banner')
    ]);

    // section
    $wp_customize->add_section('coding-banner-section-titre', [
      'panel' => 'coding-panel-banner',
      'title' => __('Personnalisation Banner'),
      'description' => __('Personnalisez le titre')
    ]);
    // settings
    $wp_customize->add_setting('coding-banner-h1', [
      'type' => 'theme_mod',
      'sanitize_callback' => 'sanitize_textarea_field'
    ]);
    $wp_customize->add_setting('coding-banner-h2', [
      'type' => 'theme_mod',
      'sanitize_callback' => 'sanitize_textarea_field'
    ]);

    $wp_customize->add_setting('coding-banner-colorh2', [
      'type' => 'theme_mod',
      'sanitize_callback' => 'sanitize_textarea_field'
    ]);

    $wp_customize->add_setting('coding-banner-button', [
      'type' => 'theme_mod',
      'sanitize_callback' => 'sanitize_textarea_field'
    ]);

    // control
    $wp_customize->add_control('coding-banner-h1-control', [
      'section' => 'coding-banner-section-titre',
      'settings' => 'coding-banner-h1',
      'label' => __('Titre'),
      'description' => __('Personnalisez le titre'),
      'type' => 'textarea'
    ]);
    $wp_customize->add_control('coding-banner-h2-control', [
      'section' => 'coding-banner-section-titre',
      'settings' => 'coding-banner-h2',
      'label' => __('Second titre'),
      'description' => __('Personnalisez le second titre'),
      'type' => 'textarea'
    ]);

    $wp_customize->add_control('coding-banner-button-control', [
      'section' => 'coding-banner-section-titre',
      'settings' => 'coding-banner-button',
      'label' => __('Ecriture button'),
      'description' => __('Personnalisez l écriture du button'),
      'type' => 'textarea'
    ]);

    $wp_customize->add_control(
      new WP_Customize_Color_Control(
        $wp_customize,
        'link_color',
        array(
          'label'      => __('Header Color', 'mytheme'),
          'section'    => 'coding-banner-section-titre',
          'settings'   => 'coding-banner-colorh2',
        )
      )
    );
  }

  // FIN BANNER

  // HOW IT WORK

  public static function ajout_personnalisation_work($wp_customize)
  {
    // panel
    $wp_customize->add_panel('coding-panel-work', [
      'title' => __('Section Work'),
      'description' => __('Personnalisation de la section work')
    ]);

    // section
    $wp_customize->add_section('coding-work-section-text', [
      'panel' => 'coding-panel-work',
      'title' => __('Personnalisation du texte'),
      'description' => __('Personnalisez le texte')
    ]);

    // settings
    // colonne 1
    $wp_customize->add_setting('coding-work-h1', [
      'type' => 'theme_mod',
      'sanitize_callback' => 'sanitize_textarea_field'
    ]);
    $wp_customize->add_setting('coding-work-h2col1', [
      'type' => 'theme_mod',
      'sanitize_callback' => 'sanitize_textarea_field'
    ]);

    $wp_customize->add_setting('coding-work-pcol1', [
      'type' => 'theme_mod',
      'sanitize_callback' => 'sanitize_textarea_field'
    ]);

    // colonne 2
    $wp_customize->add_setting('coding-work-h2col2', [
      'type' => 'theme_mod',
      'sanitize_callback' => 'sanitize_textarea_field'
    ]);

    $wp_customize->add_setting('coding-work-pcol2', [
      'type' => 'theme_mod',
      'sanitize_callback' => 'sanitize_textarea_field'
    ]);

    // colonne 3
    $wp_customize->add_setting('coding-work-h2col3', [
      'type' => 'theme_mod',
      'sanitize_callback' => 'sanitize_textarea_field'
    ]);
    $wp_customize->add_setting('coding-work-pcol3', [
      'type' => 'theme_mod',
      'sanitize_callback' => 'sanitize_textarea_field'
    ]);

    // control

    $wp_customize->add_control('coding-work-h1-control', [
      'section' => 'coding-work-section-text',
      'settings' => 'coding-work-h1',
      'label' => __('Ecriture Titre'),
      'description' => __('Personnalisez du Titre principal'),
      'type' => 'textarea'
    ]);
    $wp_customize->add_control('coding-work-h2col1-control', [
      'section' => 'coding-work-section-text',
      'settings' => 'coding-work-h2col1',
      'label' => __('Ecriture Titre col 1'),
      'description' => __('Personnalisez le titre de la première colonne'),
    ]);
    $wp_customize->add_control('coding-work-pcol1-control', [
      'section' => 'coding-work-section-text',
      'settings' => 'coding-work-pcol1',
      'label' => __('Ecriture p col 1'),
      'description' => __('Personnalisez le paragraphe de la première colonne'),
      'type' => 'textarea'
    ]);
    $wp_customize->add_control('coding-work-h2col2-control', [
      'section' => 'coding-work-section-text',
      'settings' => 'coding-work-h2col2',
      'label' => __('Ecriture titre col 2'),
      'description' => __('Personnalisez le titre de la deuxième colonne'),
    ]);
    $wp_customize->add_control('coding-work-pcol2-control', [
      'section' => 'coding-work-section-text',
      'settings' => 'coding-work-pcol2',
      'label' => __('Ecriture p col 2'),
      'description' => __('Personnalisez le paragraphe de la deuxième colonne'),
      'type' => 'textarea'
    ]);
    $wp_customize->add_control('coding-work-h2col3-control', [
      'section' => 'coding-work-section-text',
      'settings' => 'coding-work-h2col3',
      'label' => __('Ecriture titre col 3'),
      'description' => __('Personnalisez le titre de la troisième colonne'),
    ]);
    $wp_customize->add_control('coding-work-pcol3-control', [
      'section' => 'coding-work-section-text',
      'settings' => 'coding-work-pcol3',
      'label' => __('Ecriture p col 3'),
      'description' => __('Personnalisez le paragraphe de la troisième colonne'),
      'type' => 'textarea'
    ]);
  }









  // <!-- ABOUT -->

  public static function ajout_personnalisation_about($wp_customize)
  {
    // panel
    $wp_customize->add_panel('coding-panel-about', [
      'title' => __('Section About'),
      'description' => __('Personnalisation de la section about')
    ]);
    // section
    $wp_customize->add_section('coding-about-section-text', [
      'panel' => 'coding-panel-about',
      'title' => __('Personnalisation du texte'),
      'description' => __('Personnalisez le texte')
    ]);

    $wp_customize->add_section('coding-about-section-image', [
      'panel' => 'coding-panel-about',
      'title' => __('Image'),
      'description' => __('Personnalisez le texte')
    ]);
    // settings
    $wp_customize->add_setting('coding-about-text-left', [
      'type' => 'theme_mod',
      'sanitize_callback' => 'sanitize_textarea_field'
    ]);

    $wp_customize->add_setting('coding-about-image', [
      'type' => 'theme_mod',
      'sanitize_callback' => 'sanitize_textarea_field'
    ]);
    $wp_customize->add_setting('coding-li-first', [
      'type' => 'theme_mod',
      'sanitize_callback' => 'sanitize_textarea_field'
    ]);
    $wp_customize->add_setting('coding-li-second', [
      'type' => 'theme_mod',
      'sanitize_callback' => 'sanitize_textarea_field'
    ]);
    $wp_customize->add_setting('coding-li-third', [
      'type' => 'theme_mod',
      'sanitize_callback' => 'sanitize_textarea_field'
    ]);
    //  control
    $wp_customize->add_control('coding-about-text-left-control', [
      'section' => 'coding-about-section-text',
      'settings' => 'coding-about-text-left',
      'label' => __('Texte colonne gauche'),
      'description' => __('Personnalisez le texte de la colonne gauche'),
      'type' => 'textarea'
    ]);
    $wp_customize->add_control('coding-about-image-control', [
      'section' => 'coding-about-section-text',
      'settings' => 'coding-about-text-image',
      'label' => __('image'),
      'description' => __('Personnalisez le texte de la colonne droite'),
      'type' => 'textarea'
    ]);
    $wp_customize->add_control('coding-li-first-control', [
      'section' => 'coding-about-section-text',
      'settings' => 'coding-li-first',
      'label' => __('Texte first li'),
      'description' => __('Personnalisez le li-first'),
      'type' => 'textarea'
    ]);
    $wp_customize->add_control('coding-li-second-control', [
      'section' => 'coding-about-section-text',
      'settings' => 'coding-li-second',
      'label' => __('Texte second li'),
      'description' => __('Personnalisez le li-second'),
      'type' => 'textarea'
    ]);
    $wp_customize->add_control('coding-li-third-control', [
      'section' => 'coding-about-section-text',
      'settings' => 'coding-li-third',
      'label' => __('Texte third li'),
      'description' => __('Personnalisez le li-third'),
      'type' => 'textarea'
    ]);

    $wp_customize->add_control(
      new WP_Customize_Image_Control(
        $wp_customize,
        'logo',
        array(
          'label'      => __('Upload a logo', 'theme_name'),
          'section'    => 'coding-about-section-text',
          'settings'   => 'coding-about-image',
          'context'    => 'sanitize_textarea_field'
        )
      )
    );
  }

  // FIN ABOUT          


  // <!-- CONTACT -->
  public static function ajout_personnalisation_contact($wp_customize)
  {
    // panel
    $wp_customize->add_panel('coding-panel-contact', [
      'title' => __('Section Contact'),
      'description' => __('Personnalisation de la section contact')
    ]);
    // section
    $wp_customize->add_section('coding-contact-section-phone', [
      'panel' => 'coding-panel-contact',
      'title' => __('Phone'),
      'description' => __('Personnalisez')
    ]);
    $wp_customize->add_section('coding-contact-section-mail', [
      'panel' => 'coding-panel-contact',
      'title' => __('Email'),
      'description' => __('Personnalisez')
    ]);
    $wp_customize->add_section('coding-contact-section-button', [
      'panel' => 'coding-panel-contact',
      'title' => __('Button'),
      'description' => __('Personnalisez')
    ]);


    // settings
    $wp_customize->add_setting('coding-contact-phone', [
      'type' => 'theme_mod',
      'sanitize_callback' => 'sanitize_textarea_field'
    ]);
    $wp_customize->add_setting('coding-contact-mail', [
      'type' => 'theme_mod',
      'sanitize_callback' => 'sanitize_textarea_field'
    ]);
    $wp_customize->add_setting('coding-contact-button', [
      'type' => 'theme_mod',
      'sanitize_callback' => 'sanitize_textarea_field'
    ]);
    // control
    $wp_customize->add_control('coding-contact-phone-control', [
      'section' => 'coding-contact-section-phone',
      'settings' => 'coding-contact-phone',
      'label' => __('Ajoutez un numéro de phone'),
      'description' => __(''),
      'type' => 'textarea'
    ]);
    $wp_customize->add_control('coding-contact-mail-control', [
      'section' => 'coding-contact-section-mail',
      'settings' => 'coding-contact-mail',
      'label' => __('Ajoutez un mail'),
      'description' => __(''),
      'type' => 'textarea'
    ]);

    $wp_customize->add_control(
      new WP_Customize_Color_Control(
        $wp_customize,
        'link_color1',
        array(
          'label'      => __('Header Color', 'mytheme'),
          'section'    => 'coding-contact-section-button',
          'settings'   => 'coding-contact-button',
        )
      )
    );
  }
  // <!-- FIN CONTACT -->

  // FLEET
  public static function ajout_personnalisation_fleet($wp_customize)
  {
    $wp_customize->add_panel('coding-panel-fleet', [
      'title' => __('Section Fleet'),
      'description' => __('Personnalisation de la section fleet')
    ]);
    // section
    $wp_customize->add_section('coding-fleet-section', [
      'panel' => 'coding-panel-fleet',
      'title' => __('Fleet'),
      'description' => __('Personnalisez')
    ]);
    // settings
    $wp_customize->add_setting('coding-fleet-title', [
      'type' => 'theme_mod',
      'sanitize_callback' => 'sanitize_textarea_field'
    ]);
    $wp_customize->add_setting('coding-fleet-texte1', [
      'type' => 'theme_mod',
      'sanitize_callback' => 'sanitize_textarea_field'
    ]);
    $wp_customize->add_setting('coding-fleet-texte2', [
      'type' => 'theme_mod',
      'sanitize_callback' => 'sanitize_textarea_field'
    ]);
    $wp_customize->add_setting('coding-fleet-texte3', [
      'type' => 'theme_mod',
      'sanitize_callback' => 'sanitize_textarea_field'
    ]);
    $wp_customize->add_setting('coding-fleet-image1', [
      'type' => 'theme_mod',
      'sanitize_callback' => 'sanitize_textarea_field'
    ]);
    $wp_customize->add_setting('coding-fleet-image2', [
      'type' => 'theme_mod',
      'sanitize_callback' => 'sanitize_textarea_field'
    ]);
    $wp_customize->add_setting('coding-fleet-image3', [
      'type' => 'theme_mod',
      'sanitize_callback' => 'sanitize_textarea_field'
    ]);
    $wp_customize->add_control('coding-fleet-title-control', [
      'section' => 'coding-fleet-section',
      'settings' => 'coding-fleet-title',
      'label' => __('Ajoutez un titre'),
      'description' => __(''),
      'type' => 'textarea'
    ]);
    $wp_customize->add_control('coding-fleet-texte1-control', [
      'section' => 'coding-fleet-section',
      'settings' => 'coding-fleet-texte1',
      'label' => __('Ajoutez un titre'),
      'description' => __(''),
      'type' => 'textarea'
    ]);
    $wp_customize->add_control('coding-fleet-texte2-control', [
      'section' => 'coding-fleet-section',
      'settings' => 'coding-fleet-texte2',
      'label' => __('Ajoutez un titre'),
      'description' => __(''),
      'type' => 'textarea'
    ]);
    $wp_customize->add_control('coding-fleet-texte3-control', [
      'section' => 'coding-fleet-section',
      'settings' => 'coding-fleet-texte3',
      'label' => __('Ajoutez un titre'),
      'description' => __(''),
      'type' => 'textarea'
    ]);
    $wp_customize->add_control(
      new WP_Customize_Image_Control(
        $wp_customize,
        'fleet1',
        array(
          'label'      => __('Upload a image', 'theme_name'),
          'section'    => 'coding-fleet-section',
          'settings'   => 'coding-fleet-image1',
          'context'    => 'sanitize_textarea_field'
        )
      )
    );
    $wp_customize->add_control(
      new WP_Customize_Image_Control(
        $wp_customize,
        'fleet2',
        array(
          'label'      => __('Upload a image', 'theme_name'),
          'section'    => 'coding-fleet-section',
          'settings'   => 'coding-fleet-image2',
          'context'    => 'sanitize_textarea_field'
        )
      )
    );
    $wp_customize->add_control(
      new WP_Customize_Image_Control(
          $wp_customize,
          'fleet3',
          array(
              'label'      => __( 'Upload a image', 'theme_name' ),
              'section'    => 'coding-fleet-section',
              'settings'   => 'coding-fleet-image3',
              'context'    => 'sanitize_textarea_field' 
              )
              )
            );
  }
}


add_action('customize_register', [MgCustomizer::class, 'ajout_personnalisation_about']);
add_action('customize_register', [MgCustomizer::class, 'ajout_personnalisation_contact']);
add_action('customize_register', [MgCustomizer::class, 'ajout_personnalisation_banner']);
add_action('customize_register', [MgCustomizer::class, 'ajout_personnalisation_work']);
add_action('customize_register', [MgCustomizer::class, 'ajout_personnalisation_fleet']);
