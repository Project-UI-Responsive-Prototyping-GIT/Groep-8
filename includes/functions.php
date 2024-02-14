<?php
    /**
     * Laadt de header of footer van the layout file.
     *
     * @param string $viewName De name van de view die geladen moet worden. dit moet een .php file in de layout directory zijn.
     * @param array $headmeta Een optionele array met meta data voor de head section van de layout. Standaard is een lege array.
    */
    function loadView($viewName, $metaData=[]) {
        include_once "layout/$viewName.php";
    }
?>