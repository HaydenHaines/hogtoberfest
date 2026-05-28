</div><!-- .site-content -->

<footer class="site-footer section--dark" role="contentinfo">
    <div class="site-footer__inner container">

        <div class="site-footer__brand">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Hogtoberfest Home">
                <img
                    src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-footer.png' ); ?>"
                    alt="Hogtoberfest"
                    class="site-footer__logo"
                    width="220"
                    height="56"
                    loading="lazy">
            </a>
            <p class="site-footer__tagline">Hunt. Compete. Celebrate.</p>
            <p class="site-footer__host">
                Hosted by <strong>Stroud Lions Club</strong>
            </p>
        </div>

        <nav class="footer-nav" aria-label="Footer navigation">
            <h3 class="footer-nav__heading">Quick Links</h3>
            <?php
            wp_nav_menu( [
                'theme_location' => 'footer',
                'container'      => false,
                'menu_class'     => 'footer-nav__list',
                'fallback_cb'    => false,
                'depth'          => 1,
            ] );
            ?>
        </nav>

        <div class="site-footer__contact">
            <h3 class="site-footer__contact-heading">Contact</h3>
            <p>
                <a href="tel:+19189879310" class="site-footer__contact-link">
                    (918) 987-9310
                </a>
            </p>
            <p>
                <a href="mailto:stroudlionsclub@gmail.com" class="site-footer__contact-link">
                    stroudlionsclub@gmail.com
                </a>
            </p>
            <p class="site-footer__location">
                Downtown Stroud, Oklahoma<br>
                Route 66 Main Street
            </p>
        </div>

    </div>

    <div class="site-footer__bottom">
        <div class="container">
            <p>
                &copy; <?php echo esc_html( date( 'Y' ) ); ?>
                Stroud Lions Club &mdash; All rights reserved.
            </p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
