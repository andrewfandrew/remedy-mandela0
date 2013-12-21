		<div class="clearer">&nbsp;</div>

	</div>

	<div id="footer">

		<div class="left" id="footer-left">
			
			 <img src="<?php bloginfo('stylesheet_directory'); ?>/img/Unltd-Logo.bmp" alt="" class="left" />
			
			<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>

			<p class="quiet"><a href="http://templates.arcsin.se/">WordPress Theme</a> by <a href="http://arcsin.se/">Arcsin</a></p>
			
			<div class="clearer">&nbsp;</div>

		</div>

		<div class="right" id="footer-right">

			<p class="large"><?php sm_footerpages(); ?> <a href="#top" class="quiet">Page Top &uarr;</a></p>

		</div>

		<div class="clearer">&nbsp;</div>

	</div>

</div>

<?php wp_footer(); ?>

<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->

</body>
</html>