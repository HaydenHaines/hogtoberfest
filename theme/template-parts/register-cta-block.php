<?php
$reg_url  = hogtoberfest_registration_url();
$reg_open = hog_option( 'registration_open' );
?>
<div class="register-cta-block">
    <div class="register-cta-block__inner">
        <h2 class="register-cta-block__heading">Ready to Hunt?</h2>
        <p class="register-cta-block__subtext">
            <?php if ( $reg_open ) : ?>
                Registration is open. Secure your team's spot today.
            <?php else : ?>
                Registration opens soon. Check back for details.
            <?php endif; ?>
        </p>
        <?php if ( $reg_url && $reg_open ) : ?>
            <a href="<?php echo esc_url( $reg_url ); ?>"
               class="btn btn--outline"
               target="_blank"
               rel="noopener noreferrer"
               aria-label="Register your team for Hogtoberfest (opens in a new tab)">
                Register Your Team
            </a>
        <?php endif; ?>
    </div>
</div>
