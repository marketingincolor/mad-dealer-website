<?php
/**
 * Template Name: Landing
 * Landing page template without a sidebar
 */
get_header(); ?>

	<div class="splash">
		<?php include( 'banner.php'); ?>
	</div>

	<?php show_breadcrumb(); ?>

	<div id="columns">
		<div class="main">
			<?php the_post(); ?>
			<h1><?php the_title(); ?></h1>

			<div class="cms">
				<?php the_content(); ?>
			</div>
		</div>

		<div class="sidebar">

		</div>
	</div><!--// end #columns -->

</div>

</div>
</div>
</div>

<?php get_footer(); ?>
