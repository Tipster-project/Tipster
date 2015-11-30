<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package Tipsterteam
 * @subpackage Tipster
 * @since VERSIONING 1
 */
?>

		<?php
		/*if(is_active_sidebar('sidebar-footer')) {
			dynamic_sidebar('sidebar-footer');
		}*/
		?>

	</div> <!-- #wrapper -->
	<?php wp_footer(); ?>
	
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/main.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>