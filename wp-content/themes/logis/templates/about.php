<?php

$first_par = get_theme_mod('coding-about-text-left');
$second_par = get_theme_mod('coding-about-text-right');
$first_li = get_theme_mod('coding-li-first');
$second_li = get_theme_mod('coding-li-second');
$third_li = get_theme_mod('coding-li-third');
$image = get_theme_mod('coding-about-image');
$titrework = get_theme_mod('coding-work-h1');
$titrecolun = get_theme_mod('coding-work-h2col1');
$pcolun = get_theme_mod('coding-work-pcol1');
$titrecoldeux = get_theme_mod('coding-work-h2col2');
$pcoldeux = get_theme_mod('coding-work-pcol2');
$titrecoltrois = get_theme_mod('coding-work-h2col3');
$pcoltrois = get_theme_mod('coding-work-pcol3');
?>

<div class="site-section" id="section-about">
      <div class="container">
        <div class="row mb-5">
          
          <div class="col-md-5 ml-auto mb-5 order-md-2" data-aos="fade-up" data-aos-delay="100">
            <img src="<?= $image; ?>" alt="Image" class="img-fluid rounded">
          </div>
          <div class="col-md-6 order-md-1" data-aos="fade-up">
            <div class="text-left pb-1 border-primary mb-4">
              <h2 class="text-primary">About Us</h2>
            </div>
            <p><?= $first_par; ?></p>
            <p class="mb-5"><?= $second_par; ?></p>
            
          </div>
          
        </div>
      </div>
    </div>
  
    <div class="site-section bg-image overlay" style="background-image: url('<?php echo get_template_directory_uri(); ?>/hero_bg_4.jpg');" id="section-how-it-works">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary" data-aos="fade"><?= $titrework; ?></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
            <div class="how-it-work-item">
              <span class="number">1</span>
              <div class="how-it-work-body">
                <h2><?= $titrecolun; ?></h2>
                <p class="mb-5"><?= $pcolun; ?></p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
            <div class="how-it-work-item">
              <span class="number">2</span>
              <div class="how-it-work-body">
                <h2><?= $titrecoldeux; ?></h2>
                <p class="mb-5"><?= $pcoldeux; ?></p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
            <div class="how-it-work-item">
              <span class="number">3</span>
              <div class="how-it-work-body">
                <h2><?= $titrecoltrois; ?></h2>
                <p class="mb-5"><?= $pcoltrois; ?></p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>





