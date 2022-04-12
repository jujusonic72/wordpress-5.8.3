<?php
    function le_titre_filtre($titre) {
        return substr(substr($titre, 4), 0, strrpos(substr($titre, 4), '('));
    }

    function le_sigle($titre) {
        return substr($titre, 0, 3);
    }

    function la_duree($titre) {
        return str_replace(
            ')', '', str_replace(
                '(', '', substr(
                    $titre, strrpos(
                        $titre, '('))));
    }
?>