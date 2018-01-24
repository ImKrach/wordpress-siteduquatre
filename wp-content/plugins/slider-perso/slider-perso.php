<?php 


function preparerSliderScripts() {
	wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css', array('parent-style'));
    wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.4', true );
}

add_action( 'wp_enqueue_scripts', 'preparerSliderScripts' );


/*
	Plugin Name: slider-perso
*/

function displaySlider($attr)
{
	$attributs = shortcode_atts(array(
		'carousel-id' => 'my-carousel',
		'img1' => 'http://fakeimg.pl/500x300/?text=Super%20slider%20de%20fou',
		'img2' => 'http://fakeimg.pl/500x300/?text=Super%20slider%20de%20fou',
		'img3' => 'http://fakeimg.pl/500x300/?text=Super%20slider%20de%20fou',
		'img4' => 'http://fakeimg.pl/500x300/?text=Super%20slider%20de%20fou',
		'img1-caption' => 'img1',
		'img2-caption' => 'img2',
		'img3-caption' => 'img3',
		'img4-caption' => 'img4',
	), $attr);

return <<<EOT
	<div id="{$attributs['carousel-id']}" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#{$attributs['carousel-id']}" data-slide-to="0" class="active"></li>
			<li data-target="#{$attributs['carousel-id']}" data-slide-to="1"></li>
			<li data-target="#{$attributs['carousel-id']}" data-slide-to="2"></li>
			<li data-target="#{$attributs['carousel-id']}" data-slide-to="3"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="{$attributs["img1"]}" alt="img1" style="width:100%;">
				<div class="carousel-caption">
					{$attributs['img1-caption']}
				</div>
			</div>

			<div class="item">
				<img src="{$attributs["img2"]}" alt="img2" style="width:100%;">
				<div class="carousel-caption">
					{$attributs['img2-caption']}
				</div>
			</div>

			<div class="item">
				<img src="{$attributs["img3"]}" alt="img3" style="width:100%;">
				<div class="carousel-caption">
					{$attributs['img3-caption']}
				</div>
			</div>

			<div class="item">
				<img src="{$attributs["img4"]}" alt="img4" style="width:100%;">
				<div class="carousel-caption">
					{$attributs['img4-caption']}
				</div>
			</div>

		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#{$attributs['carousel-id']}" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#{$attributs['carousel-id']}" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
		</a>
	</div>
EOT;
}


// le shortcode [slider] va déclencher la fonction displaySlider
add_shortcode('slider', 'displaySlider');


/* 

	3 bons plugins :
		- Wordfence (sécurité)
		- Contact form 7
		- Duplicator



*/