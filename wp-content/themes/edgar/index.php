<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */
get_header(); ?> 
<div id="primary" class="site-content" style="float:left; width:100%;">
		<div id="content" role="main">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="post">
				<h2><?php the_title(); ?></h2>
                <div><?php the_field('full_description'); ?></div>
                
                </div>
                
			<?php endwhile; ?>
</div>
</div>
<?php get_footer(); ?>