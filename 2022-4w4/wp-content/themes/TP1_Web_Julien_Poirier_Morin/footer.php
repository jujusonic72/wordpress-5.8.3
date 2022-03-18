<footer class="site__footer">

    <div class="site__footer__colonne">
        <section class="footer__article">
            <?php get_sidebar('footer_colonne_1'); ?>
        </section>
        <section class="footer__adresse">
            <h2>Adresse du Collège</h2>
            <?php get_sidebar('footer_colonne_2'); ?>
        </section>
        <section class="footer__liens">
            <?php get_sidebar('footer_colonne_3'); ?>
        </section>
    </div>
    <section class="site__footer__presentation">

        <h2 class="footer__titre">Présentation</h2>
        <p class="footer__presentation">Un site web fait à l'aide de wordpress en TIM</p>
        <h3 class="footer__author">Fait par Julien Poirier Morin</h3>
    </section>
    <section class="site__footer_menu">
        <h2>Menu</h2>
        <?php
        $icone = '<svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" color="#000000"><path fill-rule="evenodd" d="M8.72 18.78a.75.75 0 001.06 0l6.25-6.25a.75.75 0 000-1.06L9.78 5.22a.75.75 0 00-1.06 1.06L14.44 12l-5.72 5.72a.75.75 0 000 1.06z"></path></svg>';
        wp_nav_menu(array(
            "menu" => "externe",
            "container" => "nav",
            "container_class" => "site__footer__menu",
            "menu_class" => "site__footer__menu__ul",
            //"before" => "+", // Met a l'exterieur de a
            //"after" => "@", // Met a l'exterieur de a
            "link_before" => $icone, // Met a l'interieur de a
            // "link_after" => "±" // Met a l'interieur de a
        ));
        get_search_form(); ?>
    </section>
    <section class="site__footer__reseaux-sociaux">
        <h2>Nous rejoindre</h2>
        <div class="youtube"><a href="https://www.youtube.com"><svg width="24" height="24" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" color="#000">
                    <title>YouTube icon</title>
                    <path d="M23.495 6.205a3.007 3.007 0 0 0-2.088-2.088c-1.87-.501-9.396-.501-9.396-.501s-7.507-.01-9.396.501A3.007 3.007 0 0 0 .527 6.205a31.247 31.247 0 0 0-.522 5.805 31.247 31.247 0 0 0 .522 5.783 3.007 3.007 0 0 0 2.088 2.088c1.868.502 9.396.502 9.396.502s7.506 0 9.396-.502a3.007 3.007 0 0 0 2.088-2.088 31.247 31.247 0 0 0 .5-5.783 31.247 31.247 0 0 0-.5-5.805zM9.609 15.601V8.408l6.264 3.602z"></path>
                </svg></a></div>
        <div class="facebook"><a href="https://www.facebook.com"><svg width="24" height="24" role="img" viewBox="0 0 24 24" fill="currentColor" color="#000" xmlns="http://www.w3.org/2000/svg">
                    <title>Facebook icon</title>
                    <path d="M23.9981 11.9991C23.9981 5.37216 18.626 0 11.9991 0C5.37216 0 0 5.37216 0 11.9991C0 17.9882 4.38789 22.9522 10.1242 23.8524V15.4676H7.07758V11.9991H10.1242V9.35553C10.1242 6.34826 11.9156 4.68714 14.6564 4.68714C15.9692 4.68714 17.3424 4.92149 17.3424 4.92149V7.87439H15.8294C14.3388 7.87439 13.8739 8.79933 13.8739 9.74824V11.9991H17.2018L16.6698 15.4676H13.8739V23.8524C19.6103 22.9522 23.9981 17.9882 23.9981 11.9991Z"></path>
                </svg></a></div>
        <div class="twitter"><a href="https://twitter.com"><svg width="24" height="24" role="img" viewBox="0 0 24 24" fill="currentColor" color="#000" xmlns="http://www.w3.org/2000/svg">
                    <title>Twitter icon</title>
                    <path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"></path>
                </svg></a></div>
    </section>

</footer>
</body>
<?php wp_footer() ?>

</html>