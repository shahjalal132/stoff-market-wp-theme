<?php 
/**
 * Header template
 */
?>

<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo( 'charset' );?>">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta name="keywords" content="Keywords">
    <meta name="description" content="Description">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head();?>
</head>

<body <?php body_class();?>>
    <?php
        if ( function_exists( 'wp_body_open' ) ) {
            wp_body_open();
        }
    ?>