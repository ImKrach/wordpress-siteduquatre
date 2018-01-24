<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscores
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by : %1$s', 'underscores' ), 'Rachid Debu');
			?>
			<br>
			<a href="https://github.com/ImKrach/">Github</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="/lesiteduquatre/wp-includes/js/particles.min.js"></script>
<script type="text/javascript">
	
	$(document).ready(function(){
		// On ne les veut que pour le post-2 (accueil)
		if ($('#content').has('#post-2').length) {
			$('#content').addClass('myparticle-background');
			particlesJS.load('content', '/lesiteduquatre/wp-includes/js/particles.json', function() {
			  console.log('chargement de particules super cools');
			});
			$('#post-2 .entry-footer').hide();
			$('#post-2').removeClass('hentry');
		} else {
			$('#content').removeClass('myparticle-background');
		}
	});

</script>

<?php wp_footer(); ?>

</body>
</html>
