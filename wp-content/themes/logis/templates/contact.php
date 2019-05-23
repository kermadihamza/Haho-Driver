<?php

$phone = get_theme_mod('coding-contact-phone');
$mail = get_theme_mod('coding-contact-mail');
$button = get_theme_mod('coding-contact-button');

?>


<div class="site-section bg-light" id="section-contact">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center border-primary">
        <h2 class="font-weight-light text-primary">Contact Us</h2>
        <p class="color-black-opacity-5">See Our Daily News &amp; Updates</p>
      </div>
    </div>
    <?php view('partials/notice'); ?>
    <div class="row">
      <div class="col-md-7 mb-5">

        <form action="<?= get_admin_url() . '?action=send-mail'; ?>" method="post" class="p-5 bg-white">
          <?php wp_nonce_field('send-mail'); ?>
          <input type="hidden" name="id" value="<?= $mail->id; ?>">

          <div class="row form-group">
            <div class="col-md-6 mb-3 mb-md-0">
              <label class="text-black" for="fname">First Name</label>
              <input type="text" id="firstname" class="form-control" type="text" name="firstname" id="firstname" value="<?= isset($old['firstname']) ? $old['firstname'] : '' ?>">
            </div>
            <div class="col-md-6">
              <label class="text-black" for="lname">Last Name</label>
              <input type="text" id="name" class="form-control" type="text" name="name" id="name" value="<?= isset($old['name']) ? $old['name'] : '' ?>">
            </div>
          </div>

          <div class="row form-group">

            <div class="col-md-12">
              <label class="text-black" for="email">Email</label>
              <input type="email" id="email" class="form-control" type="email" name="email" id="email" value="<?= isset($old['email']) ? $old['email'] : '' ?>">
            </div>
          </div>

          <div class="row form-group">

            <div class="col-md-12">
              <label class="text-black" for="subject">Subject</label>
              <input type="subject" id="subject" class="form-control">
            </div>
          </div>

          <div class="row form-group">
            <div class="col-md-12">
              <label class="text-black" for="message">Message</label>
              <textarea name="message" id="message" cols="30" rows="7" class="form-control" name="message" id="message" cols="30" rows="10"><?= isset($old['message']) ? $old['message'] : '' ?></textarea>
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-12">

              <input style="background-color: <?= $button; ?>" type="submit"  value="Send Message" class="btn btn-primary py-2 px-4 text-white">
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-5">

        <div class="p-4 mb-3 bg-white">

          <p class="mb-0 font-weight-bold">Phone</p>
          <p class="mb-4"><a href="#"><?= $phone; ?></a></p>

          <p class="mb-0 font-weight-bold">Email Address</p>
          <p class="mb-0"><a href="#"><?= $mail; ?></a></p>

        </div>

        <div class="p-4 mb-3 bg-white">
          <p><a href="#" style="background-color: <?= $button; ?>" class="btn btn-danger px-4 py-2 text-white">Learn More</a></p>
        </div>

      </div>
    </div>
  </div>
</div>