<?php
$sponsors = get_field( 'sponsors', 'option' );

if ( ! $sponsors || ! is_array( $sponsors ) ) {
    return;
}
?>

<aside class="sponsor-bar" aria-label="Event sponsors">
    <div class="container">

        <p class="sponsor-bar__label">Proudly Supported By</p>

        <ul class="sponsor-bar__list" role="list">
            <?php foreach ( $sponsors as $sponsor ) :
                $name = ! empty( $sponsor['sponsor_name'] ) ? $sponsor['sponsor_name'] : '';
                $logo = ! empty( $sponsor['sponsor_logo'] ) ? $sponsor['sponsor_logo'] : null;
                $url  = ! empty( $sponsor['sponsor_url'] )  ? $sponsor['sponsor_url']  : '';

                if ( ! $logo ) continue;
                ?>
                <li class="sponsor-bar__item">
                    <?php if ( $url ) : ?>
                        <a href="<?php echo esc_url( $url ); ?>"
                           class="sponsor-bar__link"
                           target="_blank"
                           rel="noopener noreferrer sponsored"
                           aria-label="<?php echo esc_attr( $name ); ?> (opens in a new tab)">
                            <img
                                src="<?php echo esc_url( $logo['url'] ); ?>"
                                alt="<?php echo esc_attr( $logo['alt'] ?: $name ); ?>"
                                class="sponsor-bar__logo"
                                width="<?php echo esc_attr( $logo['width'] ?? 200 ); ?>"
                                height="<?php echo esc_attr( $logo['height'] ?? 80 ); ?>"
                                loading="lazy">
                            <?php if ( $name ) : ?>
                                <span class="sponsor-bar__name"><?php echo esc_html( $name ); ?></span>
                            <?php endif; ?>
                        </a>
                    <?php else : ?>
                        <div class="sponsor-bar__item-inner">
                            <img
                                src="<?php echo esc_url( $logo['url'] ); ?>"
                                alt="<?php echo esc_attr( $logo['alt'] ?: $name ); ?>"
                                class="sponsor-bar__logo"
                                width="<?php echo esc_attr( $logo['width'] ?? 200 ); ?>"
                                height="<?php echo esc_attr( $logo['height'] ?? 80 ); ?>"
                                loading="lazy">
                            <?php if ( $name ) : ?>
                                <span class="sponsor-bar__name"><?php echo esc_html( $name ); ?></span>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>

    </div>
</aside>
