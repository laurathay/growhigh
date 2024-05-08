
      <!-- footer -->
      <footer class="ds-footer">
      <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-sm-12  col-md-12  col-lg-10  col-xl-10  col-xxl-10">
                <section class="ds-lets_section">
                  <h4>Let’s Talk.</h4>
                  <span>Have a project or question? Send me a message.</span>
                </section>
                <div class="ds-email_social">
                    <a href="mailto:gnomgnomgnom.studio@gmail.com" class="ds-email ds-boder_text"><span>grow.high@gmail.com</span></a>
                    <ul class="ds-social">
                        <li><a href="#" target="_blanck"><i class="ri-youtube-line"></i></a></li>
                        <li><a href="#" target="_blanck"><i class="ri-instagram-line"></i></a></li>
                        <li><a href="#" target="_blanck"><i class="ri-twitter-line"></i></a></li>
                    </ul>
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'footer',
                        'container' => false,
                        'menu_class' => 'navbar-nav mr-auto'
                    ])
                    ?>
                </div>
                <span class="ds-copyright">© 2024 All right reserved.<br><a href="#" target="_blanck">Template by Laura Thay</span>
            </div>
          </div>
      </div>
    </footer>
    <!-- footer -->
    </div>
    <?php wp_footer() ?>
    </body>
</html>