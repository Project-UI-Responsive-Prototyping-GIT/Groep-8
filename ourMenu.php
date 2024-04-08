<?php
    include 'includes/functions.php';

    $metaData = [
        'pageauthor' => 'P. Staats en S. Stikkelorum',
        'pagetitle' => 'MENU - Pizzaden'
    ];
    
    loadView('header', $metaData);

    include 'includes/layout/floating_button.php';
?>
<main class="main-container">
    <section class="main-container-header">
        <h1>Ontdek ons menu</h1>
    </section>
    <section id="menu-discover-body">
        <nav id="menu-discover-nav">
            <button id="menu-discover-nav-voorgerechten">Voorgerechten</button>
            <button id="menu-discover-nav-pizzas" class="menuActive">Pizza's</button>
            <button id="menu-discover-nav-pastas">Pasta's</button>
            <button id="menu-discover-nav-desserts">Desserts</button>
            <button id="menu-discover-nav-dranken">Dranken</button>
        </nav>
        <section id="menu-discover-items"></section>
    </section>
    <?php
        loadView('promises')
    ?>
</main>
<?php
    loadView('footer')
?>