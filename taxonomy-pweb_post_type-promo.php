<?php
/**
 * The Category template for Promotions
 *
 * @package ProperWeb
 * @subpackage RoyalFit
 * @since RoyalFit 1.0
 */
?>

<?php get_header(); ?>
<div class="row row-with-sidebar">
    <div class="cell">
<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <?php if ( has_post_thumbnail() ) { 
        $featured_image_url = wp_get_attachment_url( get_post_thumbnail_id() ); } ?>
        <div class="article article-with-sidebar box full-width">
            <h2 class="title"><?php the_title(); ?></h2>
            <?php the_content(); ?>
        </div>
<?php endwhile; else : ?>
	<div class="article article-with-sidebar box full-width er404">
            <h2 class="title">No promotions</h2>
            <h3>There's no current promotions.</h3>
            <p>Please, come back soon.</p>
	</div>
<?php endif; ?>
    </div>
    <div id="aside" class="right-sidebar">
        <div  class="box with-pads">
            <ul id="aside-sidebar" class="sidebar">
		<?php dynamic_sidebar( 'Page Aside' ); ?>
            </ul>
        </div>
    </div>
</div>
<?php get_footer(); ?>
<?php
/**
 * The Category template for Promotions
 *
 * @package ProperWeb
 * @subpackage RoyalFit
 * @since RoyalFit 1.0
 */
?>

<?php get_header(); ?>
<div class="row row-with-sidebar">
    <div class="cell">
<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <?php if ( has_post_thumbnail() ) { 
        $featured_image_url = wp_get_attachment_url( get_post_thumbnail_id() ); } ?>
        <div class="article article-with-sidebar box full-width">
            <h2 class="title"><?php the_title(); ?></h2>
            <?php the_content(); ?>
        </div>
<?php endwhile; else : ?>
	<div class="article article-with-sidebar box full-width er404">
            <h2 class="title">No promotions</h2>
            <h3>There's no current promotions.</h3>
            <p>Please, come back soon.</p>
	</div>
<?php endif; ?>
    </div>
    <div id="aside" class="right-sidebar">
        <div  class="box with-pads">
            <ul id="aside-sidebar" class="sidebar">
		<?php dynamic_sidebar( 'Post Aside' ); ?>
            </ul>
        </div>
    </div>
</div>
<?php get_footer(); ?>
