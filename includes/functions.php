<?php
    session_start();

    $_SESSION["headerPages"] = ['index' => 'HOME', 'ourMenu' => 'MENU', 'aboutUs' => 'ABOUT', 'vacatures' => 'VACATURES', 'gallery' => 'GALLERY'];

    /**
     * Laadt de header of footer van the layout file.
     *
     * @param string $viewName De name van de view die geladen moet worden. dit moet een .php file in de layout directory zijn.
     * @param array $headmeta Een optionele array met meta data voor de head section van de layout (title en author). Standaard is een lege array.
     * 
     * @example 
     * $metaData = [
     *   'pageauthor' => 'Naam van de auteur',
     *   'pagetitle' => 'title van de pagina'
     *];
     *
     * loadView('header', $metaData)
     * loadView('footer') // geen meta data nodig
     */
    function loadView($viewName, $metaData=[]) {
        include_once "layout/$viewName.php";
    }
?>