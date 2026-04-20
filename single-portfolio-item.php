<?php get_header(); ?>

<div class="ast-container">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php
                $image       = get_field( 'portfolio_image' );
                $terms       = get_the_terms( get_the_ID(), 'portfolio-category' );
                $description = get_field( 'description' );
                $year        = get_field( 'portfolio_year' );
                ?>

                <article class="single-portfolio">

                    <h1 class="single-portfolio__title"><?php the_title(); ?></h1>

                    <?php if ( $image ) : ?>
                        <div class="single-portfolio__image">
                            <img
                                src="<?php echo esc_url( $image['url'] ); ?>"
                                alt="<?php echo esc_attr( $image['alt'] ); ?>"
                            />
                        </div>
                    <?php endif; ?>

                    <div class="single-portfolio__meta">

                        <?php if ( $year ) : ?>
                            <div class="single-portfolio__meta-item">
                                <span class="label">Year: </span>
                                <span><?php echo esc_html( $year ); ?></span>
                            </div>
                        <?php endif; ?>

                        <?php if ( $terms && ! is_wp_error( $terms ) ) : ?>
                            <div class="single-portfolio__meta-item">
                                <span class="label">Category: </span>
                                <a href="<?php echo esc_url( get_term_link( $terms[0] ) ); ?>">
                                    <?php echo esc_html( $terms[0]->name ); ?>
                                </a>
                            </div>
                        <?php endif; ?>

                        <?php if ( $description ) : ?>
                            <div class="single-portfolio__meta-description">
                                <span class="label">Description: </span>
                                <?php echo wp_kses_post( $description ); ?>
                            </div>
                        <?php endif; ?>

                    </div>

                </article>

            <?php endwhile; endif; ?>

        </main>
    </div>
</div>

<?php get_footer(); ?>