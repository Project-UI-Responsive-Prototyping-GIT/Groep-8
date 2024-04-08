<?php
    include 'includes/functions.php';

    $metaData = [
        'pageauthor' => 'P. Staats en S. Stikkelorum',
        'pagetitle' => 'HOME - Pizzaden'
    ];
    
    loadView('header', $metaData);

    include 'includes/layout/floating_button.php';
?>
<main class="main-container">
    <section class="main-container-header">
        <h1>Over ons</h1>
    </section>
    <section id="aboutUs-body">
        <article id="aboutUs-body-wijZijn">
            <figure id="aboutUs-body-wijZijn-fotos">
                <img src="./images/about/wijZijn/wijZijn.jpg" alt="">
                <img src="./images/about/wijZijn/wijZijn.jpg" alt="">
            </figure>
            <h2>Wij zijn</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, quos, 
                animi consectetur iusto dignissimos at obcaecati perspiciatis illum corrupti quibusdam aliquam autem 
                quaerat labore ea! Debitis fugiat cum perspiciatis minima!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, quos, 
                animi consectetur iusto dignissimos at obcaecati perspiciatis illum corrupti quibusdam aliquam autem 
                quaerat labore ea! Debitis fugiat cum perspiciatis minima!
            </p>
            <video controls width="80%">
                <source src="./documents/media/pexels-rafa-20073998.mp4" type="video/mp4">
                <p>Je browser ondersteunt HTML video niet</p>
            </video>
        </article>
        <section id="aboutUs-body-promises">
            <img id="aboutUs-body-promises-image1" src="https://picsum.photos/764/512" alt=""> <!-- TODO: foto zoeken -->
            <article id="aboutUs-body-promises-quality"> <!-- class="promise" -->
                <img src="./images/home/promises/promise1-white.png" alt="eten kwaliteit icon" />
                <h2>Kwaliteit eten</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, quos, 
                    animi consectetur iusto dignissimos at obcaecati perspiciatis illum corrupti quibusdam aliquam autem 
                    quaerat labore ea! Debitis fugiat cum perspiciatis minima!
                </p>
            </article>
            <img id="aboutUs-body-promises-image2" src="https://picsum.photos/764/512" alt=""> <!-- TODO: foto zoeken -->
            <article id="aboutUs-body-promises-recipes"> <!-- class="promise" -->
                <img src="./images/home/promises/promis3-white.png" alt="pizza icon" />
                <h2>Verse ingrediënten</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, quos, 
                    animi consectetur iusto dignissimos at obcaecati perspiciatis illum corrupti quibusdam aliquam autem 
                    quaerat labore ea! Debitis fugiat cum perspiciatis minima!
                </p>
            </article>
            <img id="aboutUs-body-promises-image3" src="https://picsum.photos/764/512" alt=""> <!-- TODO: foto zoeken -->
            <article id="aboutUs-body-promises-delivery"> <!-- class="promise" -->
                <img src="./images/home/promises/promis2-white.png" alt="bezorgen icon" />
                <h2>Bezorgen</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, quos, 
                    animi consectetur iusto dignissimos at obcaecati perspiciatis illum corrupti quibusdam aliquam autem 
                    quaerat labore ea! Debitis fugiat cum perspiciatis minima!
                </p>
            </article>
        </section>
        <section id="aboutUs-body-menu-visitors-experience">
            <article class="menu-visitors-experience">
                <h2><span id="aboutUs-body-menu-items">0</span></h2>
                <p>Menu items</p>
            </article>
            <article class="menu-visitors-experience">
                <h2><span id="aboutUs-body-visitors">500 +</span></h2>
                <p>Dagelijkse bezoekers</p>
            </article>
            <article class="menu-visitors-experience">
                <h2><span id="aboutUs-body-experience">0</span></h2>
                <p>Jaar ervaring</p>
            </article>
        </section>
    </section>
</main>
<?php
    loadView('footer')
?>