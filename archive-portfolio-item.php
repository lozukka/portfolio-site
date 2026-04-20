<?php get_header(); ?>

<div class="ast-container">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <h1 class="portfolio-archive-title">My Works</h1>

            <?php if ( have_posts() ) : ?>

                <div class="portfolio-grid">

                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php
                        // Get ACF fields
                        $image    = get_field( 'portfolio_image' );
                        $terms    = get_the_terms( get_the_ID(), 'portfolio-category' );
                        $year     = get_field( 'portfolio_year' );
                        ?>

                        <article class="portfolio-item">
                            <a href="<?php the_permalink(); ?>">

                                <?php if ( $image ) : ?>
                                    <div class="portfolio-item__image">
                                        <img
                                            src="<?php echo esc_url( $image['url'] ); ?>"
                                            alt="<?php echo esc_attr( $image['alt'] ); ?>"
                                        />
                                    </div>
                                <?php endif; ?>

                                <div class="portfolio-item__info">
                                    <h2 class="portfolio-item__title">
                                        <?php echo the_title() . " " . $year; ?>
                                    </h2>

                                
                                </div>

                            </a>
                            <?php if ( $terms && ! is_wp_error( $terms ) ) : ?>
                                <a href="<?php echo esc_url( get_term_link( $terms[0] ) ); ?>" class="portfolio-item__category">
                                    <?php echo esc_html( $terms[0]->name ); ?>
                                </a>
                            <?php endif; ?>
                        </article>

                    <?php endwhile; ?>

                </div>

            <?php else : ?>
                <p>No projects found.</p>
            <?php endif; ?>

        </main>
    </div>
</div>

<?php get_footer(); ?>