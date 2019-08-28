		
		<!-- END ROW -->
		</div>
	
	<!-- END CONTAINER -->	
	</div>
	
	<?php if(is_active_sidebar('sidebar-5')) : ?>
	<div id="bottom-instagram">
		<?php /* Instagram Area */ if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('sidebar-5') ) ?>
	</div>
	<?php endif; ?>
	
	<footer id="footer" <?php if(is_active_sidebar('sidebar-5')) : ?>class="footer-ig-active"<?php endif; ?>>
		<div class="sp-container">
		
			<div class="sp-row">
			
				<div class="sp-col-6">
					<p class="footer-text left">
						<?php echo wp_kses_post(get_theme_mod('zlotus_footer_copyright_text_left', '(C) Copyright 2017 - All Rights Reserved')); ?>
					</p>
				</div>
				<div class="sp-col-6">
					<p class="footer-text right">
						<?php echo wp_kses_post(get_theme_mod('zlotus_footer_copyright_text_right', 'Design by <a href="https://zthemes.net/">ZThemes Studio</a>')); ?>
					</p>
				</div>
				
			</div>
		</div>
	</footer>
	
	<?php wp_footer(); ?>
	
</body>

</html>