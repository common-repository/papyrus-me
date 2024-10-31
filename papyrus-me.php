<?php
/*
Plugin Name: Papyrus Me!
Plugin URI: http://papyrus.churchipsum.com
Description: Transforms all of the text on your site to Papyrus font.
Version: 1.0.0
Author: Rob Laughter
Author URI: http://roblaughter.com
*/

add_action('wp_head', 'papyrus_me');

function papyrus_me() {
	echo "<style type='text/css'>body,body p,body h1,body h2,body h3,body h4,body h5,body h6,body li,body a, body span { font-family:'Papyrus' !important;}</style></head>";
}