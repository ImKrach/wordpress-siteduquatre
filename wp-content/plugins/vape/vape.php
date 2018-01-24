<?php 

/*
	Plugin Name: Vape
	Description: Un plugin vaporeux
*/

// le shortcode [vape] va déclencher la fonction displayVape
add_shortcode('vape', 'displayVape');

function displayVape()
{
	return '<div>Vapeur</div>';
}