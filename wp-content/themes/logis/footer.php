<footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-5 mr-auto">
                <?php dynamic_sidebar('footer-left'); ?>
              </div>
              
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <?php 
                // on remplace le menu en dur par un menu dynamique
                wp_nav_menu([ // n'oubliez pas d'aller sur la documentation de cette fonction pour voir quels sont tous les paramêtres que l'on peut mettre et ce à quoi ils servent
                    'menu_class' => 'list-inline mb-0',
                    'theme_location' => 'social-network-footer',
                    'container' => '',
                    'fallback_cb' => false,
                ]);;
                ?>
              </div>
            </div>
          </div>
          <div class="col-md-3">
          <?php dynamic_sidebar('footer-right'); ?>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row no-gutters pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
              <small class="block">&copy; <script>document.write(new Date().getFullYear());</script> Logis Free Template. All Rights Reserved. <br> Designed &amp; Developed by <a href="https://free-template.co/" target="_blank">Free-Template.co</a></small> 
              </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>
  <!-- </div> -->

<?php
wp_footer();
?>
    
  </body>
</html>