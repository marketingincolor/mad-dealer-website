<?php get_header(); ?>

	<div class="splash span-12">
		<?php include( 'banner.php'); ?>
	</div>

	<?php show_breadcrumb(); ?>

	<div id="NOTcolumns" class="span12">
		<div class="row-fluid">
			<div class="NOTmain span8">
				<?php the_post(); ?>
				<h1 class="post-title"><?php the_title(); ?></h1>
				<ul class="postinfo clearfix">
					<li class="authordata"><?php the_time('M j, Y'); ?></li>
				</ul>
				<div class="cms">
					<?php the_content(); ?>
				</div>
				<?php comments_template(); ?>
			</div>
			<div class="NOTsidebar span4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>

</div>
</div>
</div>
</div>

<?php get_footer(); ?>
