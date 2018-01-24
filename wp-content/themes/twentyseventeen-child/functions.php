<?php

// Premier argument : hook (moment du chargement de la page), 
add_action('wp_enqueue_scripts', 'chargementCssParent');

function chargementCssParent() 
{
	/* 
		Appel de la fonction de chargement de style 
			(get template directory renvoie au parent car dans notre style.css, on a mis Template Name: twentyseventeen)
			parent-style sera le 'nom' donné au style
	*/
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

	/* 
		Appel de la fonction de chargement de style 
			(get_stylesheet_directory_uri renvoie au dossier de notre theme)
			child-style sera le 'nom' donné au style
			+ ajout de la dépendance parent-style
	*/
	wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/css/theme.css', array('parent-style'));
}