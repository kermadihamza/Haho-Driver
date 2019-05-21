<?php
$button = get_theme_mod('coding-contact-button');
$titre = get_theme_mod('coding-banner-h1');
$secondtitre = get_theme_mod('coding-banner-h2');
$colorh2 = get_theme_mod('coding-banner-colorh2');
$buttonChange = get_theme_mod('coding-banner-button');
?>

<header class="site-navbar py-3 js-site-navbar site-navbar-target" role="banner" id="site-navbar">

<div class="container">
  <div class="row align-items-center">
    
    <div class="col-11 col-xl-2 site-logo">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logowhite.png" alt="">
    </div>
    <div class="col-12 col-md-10 d-none d-xl-block">
      <nav class="site-navigation position-relative text-right" role="navigation">
        
      <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
          <li><a href="#section-home" class="nav-link">Home</a></li>
          <li class="has-children">
            <a href="#section-about" class="nav-link">About</a>
          </li>
          <li><a href="#section-how-it-works" class="nav-link">How it Work</a></li>
          <li><a href="#section-services" class="nav-link">Services</a></li>
          <li><a href="#section-fleet" class="nav-link">Fleet</a></li>
          <li><a href="#section-contact" class="nav-link">Contact</a></li>
      </ul>
          <!-- <?php
          wp_nav_menu([
            'menu_class'=>'site-menu js-clone-nav mx-auto d-none d-lg-block',
            'theme_location'=>'',
            'container'=>'',
          ]);
          ?> -->
        
      </nav>
    </div>


    <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a></div>

    </div>

  </div>
</div>

</header>
<div class="site-blocks-cover overlay" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/traffic-2061202_1920.jpg);" data-aos="fade" data-stellar-background-ratio="0.5" id="section-home">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            

          <h1 style="color: <?= $colorh2; ?>" class="text-uppercase mb-0"><?= $titre; ?></h1>
          <h2 style="color: <?= $colorh2; ?>" class="font-weight-light mb-0"><?= $secondtitre; ?></h2>
          <h2 style="color: <?= $colorh2; ?>" class="font-weight-light mb-0"><?= $secondtitre; ?></h2>
          <h2 style="color: <?= $colorh2; ?>" class="font-weight-light mb-0"><?= $secondtitre; ?></h2>
          <h2 style="color: <?= $colorh2; ?>" class="font-weight-light mb-0"><?= $secondtitre; ?></h2>
            <p data-aos="fade-up" data-aos-delay="200"><a href="https://free-template.co" style="background-color: <?= $button; ?>" class="btn btn-primary py-3 px-5 text-white"><?= $buttonChange; ?></a></p>

          </div>
        </div>
      </div>
    </div> 