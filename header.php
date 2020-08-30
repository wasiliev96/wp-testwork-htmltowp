<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title(''); ?>

        <?php if (wp_title('', false)) {
            echo ' :';
        } ?>

        <?php bloginfo('name'); ?>
    </title>
    <?php wp_head() ?>
</head>
<body>
