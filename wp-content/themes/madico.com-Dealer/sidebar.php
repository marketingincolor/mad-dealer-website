<?php
global $post, $section, $sf_page_id, $wf_page_id, $sf_category_id, $wf_category_id, $language;
$cat = get_query_var('cat');
?>
<ul>
	<?php if ( is_category() ): ?>
	<li id="rss-subscribe">
		<h3><a href="<?php echo get_category_feed_link($cat);?>"><img src="<?php bloginfo('stylesheet_directory');?>/images/rss.png" />Subscribe to <?php single_cat_title(); ?></a></h3>
	</li>
	<?php endif; ?>

	<?php if ( $language == 'chinese' /*&& ! is_page('contact')*/ ): ?>
	<li class="more-information feature">
		<h2>For More Information</h2>
		<div class="textwidget">
            <p><a href="/zh-hans/about/contact/" class="button contact">联系方式</a></p>
            <p><strong>窗膜总部</strong><br />
                Madico, Inc.<br />
                2630 Fairfield Ave. South<br />
                St. Petersburg, FL  33712<br />
                USA<br />
                +1 727 388 2183<br />
                <br />
            </p>
		</div>
	</li>
	<?php endif; ?>

	<?php
	if ( $sidebar_nav = madico_sidebar_nav() )
		echo $sidebar_nav;
	?>

	<?php if( function_exists('madico_related_links') ) madico_related_links(); ?>

    <?php
    // Dynamic sidebars
	if ( is_page($wf_page_id) || ( isset($post->ancestors) && in_array($wf_page_id, $post->ancestors) ) ) {
		if ( !is_page('contact') )
            dynamic_sidebar('Window Film Pages');
	}
	elseif ( is_page($sf_page_id) || ( isset($post->ancestors) && in_array($sf_page_id, $post->ancestors) ) ) {
		dynamic_sidebar('Specialty Film Pages');
	}
	elseif ( is_page() )  {
		dynamic_sidebar('General Page');
	}
	else {
		dynamic_sidebar('Blog');
	}
	?>


	<?php
	    dynamic_sidebar('Window Film Pages');
	?>
</ul>
