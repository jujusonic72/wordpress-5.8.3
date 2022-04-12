<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exer3- Julien Poirier Morin</title>
    <?php wp_head(); ?>
    <?php show_admin_bar(true); ?>
</head>
<body <?php body_class("site"); ?> >
    <header class="site__header">
        <?php the_custom_logo(); ?>
        <section class="site__header__titre">
            <a href="<?= esc_url(home_url('/')); ?>">
                <h1 class="header__titre"><?= get_bloginfo('name'); ?></h1>
            </a>
            <h2><?= get_bloginfo('description'); ?></h2>
        </section>

        <label class="burger__etiquette" for="site__header__util-checkbox">
        <!-- Please refer: https://github.com/shubhamjain/svg-loader -->
        <svg width="32px" height="32px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" fill="currentColor" color="#000000"><path d="M16 32C7.163 32 0 24.837 0 16S7.163 0 16 0s16 7.163 16 16-7.163 16-16 16zM10.755 5.246l.01-.011a11.947 11.947 0 00-6.137 14.198 11.023 11.023 0 002.495 4.407c.807-1.773 1.434-3.62 2.177-5.405l2.22-5.628c.35-.86.626-1.774 1.242-2.485.648-.754 1.646-1.083 2.602-1.19a6.074 6.074 0 013.494.542c.775.425 1.274 1.21 1.571 2.028l3.08 8.071c.51 1.338.966 2.697 1.561 3.993a11.936 11.936 0 00-14.315-18.52zm4.439 8.134c-1.54 3.855-3.037 7.72-4.566 11.575-.18.446-.425.882-.478 1.37.52.372 1.136.584 1.73.829a11.968 11.968 0 009.834-.659c.11-.062.21-.141.298-.233-.107-.542-.372-1.041-.553-1.561-1.37-3.622-2.729-7.254-4.11-10.864-.137-.34-.244-.722-.54-.945-.553-.361-1.403-.149-1.615.488z"></path></svg>
        </label>
        <input class="burger__checkbox" type="checkbox" id="site__header__util-checkbox">

        <section class="site__header__util">
            <div class="icone">
                <a href="/" class="icone__lien">
                    <svg width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#fff"><path fill-rule="evenodd" d="M7 2a1 1 0 00-.707 1.707L7 4.414v3.758a1 1 0 01-.293.707l-4 4C.817 14.769 2.156 18 4.828 18h10.343c2.673 0 4.012-3.231 2.122-5.121l-4-4A1 1 0 0113 8.172V4.414l.707-.707A1 1 0 0013 2H7zm2 6.172V4h2v4.172a3 3 0 00.879 2.12l1.027 1.028a4 4 0 00-2.171.102l-.47.156a4 4 0 01-2.53 0l-.563-.187a1.993 1.993 0 00-.114-.035l1.063-1.063A3 3 0 009 8.172z" clip-rule="evenodd"></path></svg>
                </a>
                <a href="#" class="icone__lien">
                    <svg width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#fff"><path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zm0 16a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path></svg>
                </a>
                <a href="#" class="icone__lien">
                    <svg width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#fff"><path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"></path></svg>
                </a>
                <a href="#" class="icone__lien">
                    <svg width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#fff"><path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"></path><path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15a24.98 24.98 0 01-8-1.308z"></path></svg>
                </a>
                <a href="#" class="icone__lien">
                    <svg width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#fff"><path fill-rule="evenodd" d="M6 3a1 1 0 011-1h.01a1 1 0 010 2H7a1 1 0 01-1-1zm2 3a1 1 0 00-2 0v1a2 2 0 00-2 2v1a2 2 0 00-2 2v.683a3.7 3.7 0 011.055.485 1.704 1.704 0 001.89 0 3.704 3.704 0 014.11 0 1.704 1.704 0 001.89 0 3.704 3.704 0 014.11 0 1.704 1.704 0 001.89 0A3.7 3.7 0 0118 12.683V12a2 2 0 00-2-2V9a2 2 0 00-2-2V6a1 1 0 10-2 0v1h-1V6a1 1 0 10-2 0v1H8V6zm10 8.868a3.704 3.704 0 01-4.055-.036 1.704 1.704 0 00-1.89 0 3.704 3.704 0 01-4.11 0 1.704 1.704 0 00-1.89 0A3.704 3.704 0 012 14.868V17a1 1 0 001 1h14a1 1 0 001-1v-2.132zM9 3a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1zm3 0a1 1 0 011-1h.01a1 1 0 110 2H13a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
            <?php get_search_form(); ?>
        </section>
    </header>
    <aside class="site__barre">
        <label class="burger__etiquette" for="site__barre__menu-principal-container-checkbox">
            <svg width="32px" height="32px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" fill="currentColor" color="#000000"><path fill-rule="evenodd" d="M16 32C7.163 32 0 24.837 0 16S7.163 0 16 0s16 7.163 16 16-7.163 16-16 16zM6.5 10.487v11.026L16 27l9.5-5.487V10.487L16 5l-9.5 5.487zm.912 9.97v-8.913l5.743 3.323-1.933 3.385-3.81 2.205zm.457.791l3.664-2.12 4.038 2.313v4.256l-7.702-4.449zm16.719-9.673v8.85l-3.76-2.175-1.932-3.382 5.692-3.293zm-.43-.808l-5.715 3.307-1.96-3.431V6.334l7.675 4.433zm-6.047 4.555l1.153 2.023L16.939 16l1.172-.678zm-.453-.794l-1.175.68v-2.74l1.175 2.06zm-4.864 2.815l1.151-2.02 1.17.677-2.32 1.343zm-.346 1.256l3.123-1.807v3.595L12.448 18.6zm-4.58-7.847l7.703-4.449v4.334l-1.962 3.436-5.74-3.321zm16.29 10.481l-7.675 4.433V21.47l4.04-2.34 3.635 2.103zm-4.548-2.632l-3.127 1.813v-3.622l3.127 1.81zm-5.212-4.071l1.173-2.057v2.735l-1.173-.678z"></path></svg>        </label>
        <input class="burger__checkbox" type="checkbox" id="site__barre__menu-principal-container-checkbox">
        <?php 
            wp_nav_menu(array(  "menu" => "principal",
                                "container" => "nav")); 
        ?>
    </aside>    
