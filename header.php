<?php
/*
 * Template Name: header.php
 */
?>
<!DOCTYPE html>
<html>
<head>
<title><?php the_title(); ?></title>
<?php wp_head(); ?>
</head>
<body>
<header>
<h1><?php bloginfo( 'name' ); ?></h1>
</header>