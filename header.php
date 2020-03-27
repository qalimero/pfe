<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <link rel="profile" href="https://gmpg.org/xfn/11">


    <?php wp_head(); ?>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/style.css"></script>
    <!--<meta name="viewport" content="width=device-width" />-->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>
<body <?php body_class(); ?>>
<?php
wp_body_open();
?>

<header class="header__content">
    <div class="header__content__logo">
        <?php
        // Site title or logo.
        twentytwenty_site_logo();

        // Site description.
        twentytwenty_site_description();
        ?>

    </div>
</header>