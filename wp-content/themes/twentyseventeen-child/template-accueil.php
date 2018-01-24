<?php 
/*
	Template Name: template-accueil
*/
?>

<!-- Récupération du header -->
<?php get_header(); ?>

<?php 
// Méthode pour afficher des petits morceaux
	if ( have_posts() ) : 
		while ( have_posts() ) : the_post();
			// Soit get_template_part
			// get_template_part( 'template-parts/post/content', get_post_format() );
			
			// Soit comme ça
			the_title('<h1>', '</h1>');
			the_content();
	 	endwhile; 
	endif; 
?>


<!-- Récupération du footer -->
<?php get_footer();
