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
      </div>
    </div>
    <?php include plugin_dir_path(__FILE__) . "../includes/notice.php";?>
    <div class="row">
      <div class="col-md-7 mb-5">
        
        <form action="<?= admin_url('admin-post.php'); ?>#section-contact" method="post" class="p-5 bg-white">
          <input type="hidden" name="action" value="send-mail">

          <div class="row form-group">
            <div class="col-md-6 mb-3 mb-md-0">
              <label class="text-black" for="fname">First Name</label>
              <input type="text" id="firstname" class="form-control" type="text" name="firstname" id="firstname" value="<?= isset($old['firstname']) ? $old['firstname'] : '' ?> "required>
            </div>
            <div class="col-md-6">
              <label class="text-black" for="lname">Last Name</label>
              <input type="text" id="name" class="form-control" type="text" name="name" id="name" value="<?= isset($old['name']) ? $old['name'] : '' ?> "required>
            </div>
            <div class="col-md-12">
              <label class="text-black" for="lname">Subject</label>
              <input type="text" id="subject" class="form-control" type="text" name="name" id="name" value="<?= isset($old['subject']) ? $old['subject'] : '' ?> "required>
            </div>
          </div>

          <div class="row form-group">

            <div class="col-md-12">
              <label class="text-black" for="email">Email</label>
              <input type="email" id="email" class="form-control" type="email" name="email" id="email" value="<?= isset($old['email']) ? $old['email'] : '' ?> "required>
            </div>
          </div>

          <div class="row form-group">
            <div class="col-md-12">
              <label class="text-black" for="message">Message</label>
              <textarea required name="message" id="message" cols="30" rows="7" class="form-control" name="message" placeholder="Pour une résérvation, veuillez nous mettre la date, l'heure et les endroits" id="message" cols="30" rows="10"><?= isset($old['message']) ? $old['message'] : '' ?></textarea>
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

      </div>
    </div>
  </div>
</div>