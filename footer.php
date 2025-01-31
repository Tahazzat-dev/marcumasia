      
            <!-- Beginning footer section
            ============================== -->
      <footer class="main-footer-section">
    <div class="common-wrap clear">
        <div class="footer-inner">
            <!-- Large Widget Section (About MarcumAsia and Offices) -->
            <div class="large-widget">
                <!-- About MarcumAsia -->
                <div class="footer-text">
                    <h4><?php the_field('footer_about_title', 'option'); ?></h4>
                    <p><?php the_field('footer_about_description', 'option'); ?></p>
                </div>

                <!-- Office Address Section -->
                <div class="address-text">
                    <h4><?php the_field('footer_office_title', 'option'); ?></h4>
                    <span>HEADQUARTERS</span>
                    <ul>
                        <li><?php the_field('footer_office_address_line_1', 'option'); ?></li>
                        <li><?php the_field('footer_office_address_line_2', 'option'); ?></li>
                        <li><?php the_field('footer_office_city_state_zip', 'option'); ?></li>
                        <li><?php the_field('footer_phone', 'option'); ?></li>
                        <li><a href="mailto:<?php the_field('footer_email', 'option'); ?>"><?php the_field('footer_email', 'option'); ?></a></li>
                    </ul>
                </div>
                <span>FIND AN OFFICE</span>
            </div>

            <!-- Footer Navigation Section -->
            <div class="footer-nav">
                <!-- Services Menu -->
                <div class="nav-item">
                    <h4>Services</h4>
                    <?php wp_nav_menu(array(
                        'theme_location' => 'widget-menu-1',  // Make sure this matches the location registered in functions.php
                        'menu_class' => 'menu-list',
                        'container' => false,
                        'depth' => 2,
                        'fallback_cb' => false,
                    )); ?>
                </div>

                <!-- Social Icons -->
          <div class="social-icon">
    <?php if (have_rows('footer_social_icons', 'option')): ?>
        <?php while (have_rows('footer_social_icons', 'option')): the_row(); ?>
            <a href="<?php the_sub_field('social_url'); ?>">
                <img src="<?php the_sub_field('social_icon'); ?>" alt="">
            </a>
        <?php endwhile; ?>
    <?php endif; ?>
</div>

            </div>

            <!-- Small Footer Navigation (The Firm, Insights, Legal, etc.) -->
            <div class="footer-nav small-item">
                <div class="nav-item">
                    <h4>The Firm</h4>
                    <?php wp_nav_menu(array(
                        'theme_location' => 'widget-menu-2',
                        'menu_container' => '',
                        'container' => false,
                    )); ?>
                </div>
            </div>

            <div class="footer-nav">
                <div class="nav-item">
                    <h4>Insights</h4>
                    <?php wp_nav_menu(array(
                        'theme_location' => 'widget-menu-3',
                        'menu_container' => '',
                        'container' => false,
                    )); ?>
                </div>
                <div class="nav-item custom-mt">
                    <h4>Legal & Compliance</h4>
                    <?php wp_nav_menu(array(
                        'theme_location' => 'widget-menu-4',
                        'menu_container' => '',
                        'container' => false,
                    )); ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Footer Section -->
    <div class="bottom-footer">
        <div class="common-wrap clear">
            <div class="bottom-inner-copy">
                <div class="copy-text">
                    <p>© <?php echo date("Y"); ?> MarcumAsia. All Rights Reserved.</p>
                </div>
             <div class="quick-link">
    <?php if (get_field('privacy_policy_url', 'option')): ?>
        <a href="<?php echo esc_url(get_field('privacy_policy_url', 'option')); ?>">Privacy Policy</a>
    <?php endif; ?>
    
    <?php if (get_field('legal_notice_url', 'option')): ?>
        <a href="<?php echo esc_url(get_field('legal_notice_url', 'option')); ?>">Legal Notice</a>
    <?php endif; ?>
</div>

            </div>
        </div>
    </div>
</footer>


            <!-- //End main footer section -->
        </main>

        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/common-scripts.js" defer></script>
    </body>
</html>