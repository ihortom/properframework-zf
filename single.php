<?php/** * The Post template * * @package ProperWeb * @subpackage ProperFramework * @since ProperFramework 1.0 */?><?php get_header(); ?><?php if(have_posts()): while(have_posts()): the_post(); ?>        <?php if ( has_post_thumbnail() ) : ?>        <div class="row">            <div class="large-12 columns">                <div class="featured-image">                <?php the_post_thumbnail( 'post-featured-image' ); ?>                </div>            </div>        </div>    <?php endif; ?>            <div class="row row-with-sidebar">        <div class="cell">            <div class="article article-with-sidebar box full-width">                <h2 class="title"><?php the_title(); ?></h2>                <?php the_content(); ?>            </div>                        <?php if (comments_open()) : ?>                <div class="article article-with-sidebar box full-width">                    <h2 class="title">Comments</h2>                    <?php comments_template(); ?>                </div>            <?php endif; ?>                    </div>            <?php get_sidebar(); ?>        </div>    <?php endwhile; endif; ?><?php get_footer(); ?>