<?php

echo str_replace( '%stylesheet_directory_uri%', get_stylesheet_directory_uri(), file_get_contents( __DIR__ . '/index.css' ) );
