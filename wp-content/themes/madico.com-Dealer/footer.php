
<div id="footer">
	<div  class="container">
		<div class="row-fluid">
			<div class="links NOTclearfix span4">
				<?php wp_nav_menu(array("depth" => 1, 'menu_class' => 'menu clearfix hidden')); ?>
				<p class="copyright">
					<?php echo __('Copyright', 'madicotheme') . ' &copy; ' . date("Y") . ' Madico, Inc.'; ?>
				</p>
			</div>
			<div class="icons span4 offset4">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer-logos.png" alt="Madico is Intertek &amp; ANAB Accredited" />
			</div>
		</div>
	</div>
</div>

<?php wp_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/global.js"></script>

<!-- Google Tag Manager -->

<!-- End Google Tag Manager -->

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/vimeo.ga.js"></script>
<script src="<?php bloginfo('template_url'); ?>/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
