<?php

    // Only change code below this line

       // Instruction: require all the files you need here. Tips: (includes/functions.php, includes/class-products.php)
       session_start();
       require "includes/class-products.php";
       require "includes/functions.php";


    // get route
    $path = trim( $_SERVER['REQUEST_URI'], '/' ); // remove starting and ending slashes

    // remove query string
    $path = parse_url( $path, PHP_URL_PATH );

    if ( isset( $path ) ) {
        switch( $path ) {
            case 'wishlist/submit':
                require 'includes/wishlist/submit.php';
                break;
            default:
                require 'pages/home.php';
                break;
        }
    } else {
        require 'pages/home.php';
    }