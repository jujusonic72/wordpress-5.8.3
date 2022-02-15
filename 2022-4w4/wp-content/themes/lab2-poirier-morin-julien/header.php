<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscore
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class("site"); ?>>
<header class="site__header">
    <h1 class="header__titre"><?php bloginfo('name'); ?></h1>
    <h2 class="header__description"> <?php bloginfo('description'); ?> </h2>
</header>
<section class="site__barre">
    <nav class="navigation">
        <a href="" class="navigation__lien">mon lien 001</a>
        <a href="" class="navigation__lien">mon lien 002</a>
        <a href="" class="navigation__lien">mon lien 003</a>
        <a href="" class="navigation__lien">mon lien 004</a>
        <a href="" class="navigation__lien">mon lien 005</a>
        <a href="" class="navigation__lien">mon lien 006</a>
        <a href="" class="navigation__lien">mon lien 007</a>
        <a href="" class="navigation__lien">mon lien 008</a>
        <a href="" class="navigation__lien">mon lien 009</a>
        <a href="" class="navigation__lien">mon lien 010</a>
    </nav>
</section>