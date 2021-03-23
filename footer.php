<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package byk_themetitle
 */

?>

<footer id="colophon" class="site-footer">
  <div class="wrapper">
    <!--
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer-logo-min.jpg" alt="" class="footer-logo">

    <div class="contact-info">
      <a href="mailto:PortfolioSales@DebtTrader.com" class="email"><?php get_template_part('icons/envelope-solid'); ?>
        PortfolioSales@DebtTrader.com</a>
      <a href="#" class="directions"><?php get_template_part('icons/map-marker-alt-solid'); ?> 2200 Paseo Verde Parkway
        Suite 150 Henderson, NV 89052</a>
      <a href="tel:+18884616161" class="phone"><?php get_template_part('icons/phone-alt-solid'); ?> 888.461.6161</a>

    </div>

    <hr /> -->
    <div class="site-info">
      Copyright &copy;<?php echo date("Y"); ?> DebtTrader | <a href="/customer-privacy-policy/">United States Disclaimer
        &amp; Privacy
        Policy</a> | <a href="/canadian-disclaimer-privacy-policy/">Canadian Privacy Policy</a> | <a href="/consumer-complaint-information/">Consumer Complaint Information</a>

    </div>

  </div>

  </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>