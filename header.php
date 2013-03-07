<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo( 'name' ); ?></title>
        <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?> >
		<div id="container">
            <h1 id="header"><?php bloginfo('name'); ?></h1>
            <div id="content">
