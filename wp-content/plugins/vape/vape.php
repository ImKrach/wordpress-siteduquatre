<?php 

/*
	Plugin Name: Vape
	Description: Un plugin vaporeux
*/


function displayVape($attr)
{
	$attributs = shortcode_atts(array(
		'id' => '',
		'class' => '',
		'text' => 'Vapeur',
	), $attr);

	return "<div id='{$attributs['id']}' class='{$attributs['class']}'>{$attributs['text']}</div>";
}


// le shortcode [vape] va déclencher la fonction displayVape
add_shortcode('vape', 'displayVape');