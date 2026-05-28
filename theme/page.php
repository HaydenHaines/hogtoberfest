<?php get_header(); ?>

<main id="main-content" class="site-main" role="main">

    <div class="page-header">
        <div class="container">
            <h1 class="page-header__title">
                <?php the_title(); ?>
            </h1>
        </div>
    </div>

    <div class="section section--cream">
        <div class="container">
            <div class="page-content">
                <?php
                while ( have_posts() ) :
                    the_post();
                    the_content();
                endwhile;
                ?>
            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>
