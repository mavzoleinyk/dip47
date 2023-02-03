<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>
    <!-- Footer -->
    <footer class="footer footer--dark">
      <div class="container">
        <div class="footer__widgets">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
              <aside class="widget widget_custom footer__widget-cust">
                <?php
                  if ( is_active_sidebar('footer_one') ){
                    dynamic_sidebar('footer_one');
                  }
                ?>
              </aside>
            </div>

            <div class="col-lg-6 col-md-6 col-12">
              <aside class="widget widget_map footer__map">
                <?php
                  if( is_active_sidebar('footer_two')){
                    dynamic_sidebar('footer_two');
                  }
                ?>                
              </aside>
            </div>

          </div>
          <div class="row">
            <div class="col-md-3 col-12">
              <aside class="widget widget_social footer__social">
                <div class="socials socials--large socials--rounded mb-24">
                  <a href="#" class="social social-facebook" aria-label="facebook"><i class="ui-facebook"></i></a>
                  <a href="#" class="social social-twitter" aria-label="twitter"><i class="ui-twitter"></i></a>
                  <a href="#" class="social social-google-plus" aria-label="google+"><i class="ui-google"></i></a>
                  <a href="#" class="social social-youtube" aria-label="youtube"><i class="ui-youtube"></i></a>
                  <a href="#" class="social social-instagram" aria-label="instagram"><i class="ui-instagram"></i></a>
                </div>
              </aside> 
            </div>
            <div class="col-md-9 col-12">
              <aside class="widget widget_nav_menu footer__nav_menu">
                <?php
                    wp_nav_menu(
                        array(
                            'menu'  => '3',
                            'menu_class'=> 'nav__menu',
                        )
                    );
                ?>
              </aside>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="footer__copyright">
                <?php
                  if( is_active_sidebar('cust_footer_1') ){
                    dynamic_sidebar('cust_footer_1');
                  }
                ?>
              </div>
            </div>
          </div>
        </div>    
      </div> <!-- end container -->
    </footer> <!-- end footer -->

    <div id="back-to-top">
      <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
    </div>
</main> <!-- end main-wrapper -->

<!-- jQuery Scripts -->

<?php wp_footer(); ?>
<script src="https://use.fontawesome.com/72aa657e98.js"></script>
<script src="//code.jivosite.com/widget/EFamSl5OnM" async></script>

</body>
</html>