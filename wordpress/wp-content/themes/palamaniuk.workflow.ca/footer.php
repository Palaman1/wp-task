<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package palamaniuk.workflow.ca
 */

?>
   <footer class="footer">
    <div class="container">
      <div class="footer-top">
        <a href="#" class="footer-top__logo-link">
          <img src="<?php bloginfo('template_url'); ?>/assets/images/logo/logo.png" alt="logo" class="footer-top__logo-img">
        </a>
        <div class="footer-top__contacts">
          <ul class="footer-top__contacts-list">
            <li class="footer-top__contacts-item">
              <a href="tel:+12263700170" class="footer-top__phone phone_num">
                +1 226-370-0170
              </a>
            </li>
            <li class="footer-top__contacts-item">
              <a href="#" class="footer-top__address" target="_blank">
                Unit 4, 5267 Explorer drive,
                Toronto, On L4W 4T7
              </a>
            </li>
            <li class="footer-top__contacts-item">
              <a href="mailto:info@appliancerepairexpert.ca">
                info@appliancerepairexpert.ca
              </a>
            </li>
          </ul>
        </div>
        <div class="footer-top__lists">
          <div class="footer-top__about">
            <h4 class="footer-top__about-title">
              ABOUT COMPANY
            </h4>
            <ul class="footer-top__about-list">
              <li class="footer-top__about-item">
                <a href="#" class="footer-top__about-link">
                  Maintance Plans
                </a>
              </li>
              <li class="footer-top__about-item">
                <a href="#" class="footer-top__about-link">
                  Coupons
                </a>
              </li>
              <li class="footer-top__about-item">
                <a href="#" class="footer-top__about-link">
                  Review
                </a>
              </li>
              <li class="footer-top__about-item">
                <a href="#" class="footer-top__about-link">
                  FAQ
                </a>
              </li>
              <li class="footer-top__about-item">
                <a href="#" class="footer-top__about-link">
                  Blog
                </a>
              </li>
              <li class="footer-top__about-item">
                <a href="#" class="footer-top__about-link">
                  Contact
                </a>
              </li>
            </ul>
          </div>
          <div class="footer-top__services">
            <h4 class="footer-top__services-title">
              CUSTOMER SERVICES
            </h4>
            <ul class="footer-top__services-list">
              <li class="footer-top__services-item">
                <a href="#" class="footer-top__services-link">
                  Residential
                </a>
              </li>
              <li class="footer-top__services-item">
                <a href="#" class="footer-top__services-link">
                  Commercial
                </a>
              </li>
              <li class="footer-top__services-item">
                <a href="#" class="footer-top__services-link">
                  Repair
                </a>
              </li>
              <li class="footer-top__services-item">
                <a href="#" class="footer-top__services-link">
                  Installation
                </a>
              </li>
            </ul>
          </div>
          <div class="footer-top__support">
            <h4 class="footer-top__support-title">
              HELP AND SUPPORT
            </h4>
            <ul class="footer-top__support-list">
              <li class="footer-top__support-item">
                <a href="#" class="footer-top__support-link">
                  Appliance Repair Warranty
                </a>
              </li>
              <li class="footer-top__support-item">
                <a href="#" class="footer-top__support-link">
                  Cancellation Policy
                </a>
              </li>
              <li class="footer-top__support-item">
                <a href="#" class="footer-top__support-link">
                  Privacy Policy
                </a>
              </li>
              <li class="footer-top__support-item">
                <a href="#" class="footer-top__support-link">
                  Careers
                </a>
              </li>
            </ul>
          </div>
        </div>
        <button type="button" class="footer-top__btn book_online">
          <p class="book_online__text">
            book online
          </p>
        </button>
        <div class="footer-top__social">
          <a href="#" class="footer-top__social-link">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/icons/youtube.svg" alt="Youtube" class="footer-top__social-img">
          </a>
          <a href="#" class="footer-top__social-link">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/icons/fb.svg" alt="Facebook" class="footer-top__social-img">
          </a>
          <a href="#" class="footer-top__social-link">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/icons/pinterest.svg" alt="Pinterest" class="footer-top__social-img">
          </a>
          <a href="#" class="footer-top__social-link">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/icons/instagram.svg" alt="Instagram" class="footer-top__social-img">
          </a>
        </div>
      </div>
      <div class="footer-bottom">
        <p class="footer-bottom__rights">
          All rights reserved © 2005-2021
        </p>
      </div>
    </div>
  </footer>

<?php wp_footer(); ?>

</body>
</html>
