<?php 
/*
	Template Name: template-article
*/




// Récupération du header
get_header();

// Récupération de tous les posts
$allPosts = get_posts('');

// Parcourt des posts
foreach ($allPosts as $post):
	// On place notre 'curseur' sur le post courant 
	// setup_postdata($post);
	// Affichage du titre dans une balise h1
	// the_title('<h1>', '</h1>');

	?>
	<h1>
		<a href="<?=$post->guid?>">
			<?=$post->post_title?>
		</a>
	</h1>
	<!-- <div> <?= get_the_post_thumbnail($post->ID) . $post->post_content ?></div> -->

	<?php
endforeach;


// Récupération du footer
get_footer(); 