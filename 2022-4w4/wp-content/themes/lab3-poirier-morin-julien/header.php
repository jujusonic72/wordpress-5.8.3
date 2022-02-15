<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab3 Julien Poirier Morin</title>
    <?php wp_head() ?>
</head>

<body <?php body_class("site") ?>>
    <header class="site__header">
        <h1 class="header__titre">
            <?php blogInfo('name') ?>
        </h1>
        <h2 class="header__desc">
            <?php blogInfo('description') ?>
        </h2>
    </header>
    <section class="site__barre">

        <?php wp_nav_menu(array("menu"=> "principal",
                                'container' => "nav")); ?>

    </section>
