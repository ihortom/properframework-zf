<?php/* * Template Name: Category page */?>
<?php get_header(); ?>
	<div id="aside" class="box">		<ul id="aside-sidebar" class="sidebar">			<?php dynamic_sidebar( 'Page Aside' ); ?>		</ul>	</div>
	<div class="box mid-width article">		<?php if (have_posts()): while(have_posts()): the_post(); ?>			<h2 class="title"><?php the_title(); ?></h2>			<?php the_content(); ?>		<?php endwhile; endif; ?>		<br>		<?php			$the_query = new WP_Query('cat=3');			if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();		?>		<?php if ( has_post_thumbnail() ) : ?>			<?php	the_post_thumbnail( 'thumbnail', array( 'class' => 'thumbnail alignleft') ); ?>		<?php endif; ?>		<h3 class="title"><?php the_title( sprintf( '<a class="to-article" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' ); ?></h3>		<?php the_excerpt(); ?>		<?php			endwhile; endif;			wp_reset_postdata();		?>	</div>
<?php get_footer(); ?>