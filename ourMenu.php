<?php
    include 'includes/functions.php';

    $metaData = [
        'pageauthor' => 'P. Staats',
        'pagetitle' => 'Ons menu'
    ];
    
    loadView('header', $metaData);

    include 'includes/layout/floating_button.php';
?>
<main class="ons-menu-container">
    <section class="section-one">
        <h1>Ons menu</h1>
        <article class="sec-one-art-one">
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus quis recusandae pariatur. 
                Delectus minima ut voluptatum magni obcaecati aliquid illum. Libero quo debitis rem officiis, 
                tempore laudantium possimus in sit. Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Ad commodi quam quas error ex iure architecto quo possimus dolorum? Molestiae provident 
                consequatur quas nostrum reprehenderit qui. Ad ut ab voluptas!
            </p>
            <img src="./images/fullLogo.png" alt="logo">
        </article>
        <figure>
            <img src="https://picsum.photos/400/290" alt="foto van een gerecht">
            <img src="https://picsum.photos/400/290" alt="foto van een gerecht">
            <img src="https://picsum.photos/400/290" alt="foto van een gerecht">
        </figure>
        <article class="sec-one-art-two">
            <img src="https://picsum.photos/600/319" alt="foto van een gerecht">
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                Distinctio, nulla ut laborum natus ea, quo ad autem praesentium sequi, 
                perferendis est aperiam sit ullam eveniet? Earum, ratione? Id, quam quis.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit explicabo, 
                laudantium rerum aspernatur vitae adipisci iste animi est recusandae doloribus alias 
                fugiat cupiditate ad necessitatibus corporis blanditiis dolores distinctio maiores?
            </p>
        </article>
    </section>
    <section class="section-two">
        <div class="eten-container-background">
            <section class="eten-menu-container-half1">
                <article class="menu-deel">
                    <h3>Voorgerechten</h3>
                    <p>
                        <span class="gerecht-header"><b>Bruschetta</b> <b>€6,50</b></span><br />
                        Geroosterd brood ingesmeerd met knoflook en olijfolie, belegd met tomaten, basilicum en balsamico glazuur<br />
                        <br />
                        <span class="gerecht-header"><b>Caprese Salade</b> <b>€7,50</b></span><br />
                        Plakjes verse tomaat, mozzarella kaas, basilicumblaadjes, olijfolie en balsamico glazuur<br />
                        <br />
                        <span class="gerecht-header"><b>Antipasto Plank</b> <b>€10,00</b></span><br />
                        Een selectie van Italiaanse vleeswaren zoals prosciutto, salami, mortadella, olijven, artisjokken en kaas<br />
                        <br />
                        <span class="gerecht-header"><b>Garlic Bread</b> <b>€5,00</b></span><br />
                        Geroosterd brood ingesmeerd met knoflookboter en bestrooid met peterselie<br />
                        <br />
                        <span class="gerecht-header"><b>Insalata Mista</b> <b>€6,00</b></span><br />
                        Gemengde groene salade met tomaten, komkommer, rode ui en een balsamico-dressing<br />
                        <br />
                        <span class="gerecht-header"><b>Mozzarella Sticks</b> <b>€7,50</b></span><br />
                        Gepaneerde en gefrituurde mozzarella-sticks geserveerd met marinara-saus<br />
                        <br />
                        <span class="gerecht-header"><b>Calamari Fritti</b> <b>€9,00</b></span><br />
                        Gefrituurde inktvisringen geserveerd met citroen en marinara-saus<br />
                        <br />
                        <span class="gerecht-header"><b>Garlic Knots</b> <b>€5,50</b></span><br />
                        Gebakken deegknoedels besprenkeld met knoflookboter en bestrooid met Parmezaanse kaas<br />
                        <br />
                        <span class="gerecht-header"><b>Bruschetta al Pomodoro e Ricotta</b> <b>€7,00</b></span><br />
                        Geroosterd brood met tomaten, ricotta kaas, basilicum en balsamico glazuur<br />
                        <br />
                        <span class="gerecht-header"><b>Funghi Ripieni</b> <b>€8,00</b></span><br />
                        Champignons gevuld met een mengsel van Italiaanse kruiden, broodkruimels en kaas, gebakken tot goudbruin<br />
                    </p>
                </article>
                <article class="menu-deel">
                    <h3>Pizza's</h3>
                    <p>
                        <span class="gerecht-header"><b>Margherita</b> <b>€9,00</b></span><br />
                        Tomatensaus, mozzarella kaas en basilicum<br />
                        <br />
                        <span class="gerecht-header"><b>Pepperoni</b> <b>€10,00</b></span><br />
                        Tomatensaus, mozzarella kaas en pepperoni (pikante salami)<br />
                        <br />
                        <span class="gerecht-header"><b>Funghi</b> <b>€9,50</b></span><br />
                        Tomatensaus, mozzarella kaas en champignons<br />
                        <br />
                        <span class="gerecht-header"><b>Quattro Stagioni</b> <b>€11,50</b></span><br />
                        Tomatensaus, mozzarella kaas, artisjokken, ham, champignons en olijven<br />
                        <br />
                        <span class="gerecht-header"><b>Capricciosa</b> <b>€11,50</b></span><br />
                        Tomatensaus, mozzarella kaas, ham, champignons, artisjokken en olijven<br />
                        <br />
                        <span class="gerecht-header"><b>Prosciutto e Rucola</b> <b>€12,00</b></span><br />
                        Tomatensaus, mozzarella kaas, prosciutto (Italiaanse ham) en rucola sla<br />
                        <br />
                        <span class="gerecht-header"><b>Diavola</b> <b>€11,00</b></span><br />
                        Tomatensaus, mozzarella kaas, pikante salami, rode pepers en olijven<br />
                        <br />
                        <span class="gerecht-header"><b>Quattro Formaggi</b> <b>€12,50</b></span><br />
                        Tomatensaus, mozzarella, gorgonzola, pecorino en Parmezaanse kaas<br />
                        <br />
                        <span class="gerecht-header"><b>Vegetariana</b> <b>€11,50</b></span><br />
                        Tomatensaus, mozzarella kaas, gegrilde groenten zoals paprika, courgette, aubergine en rode ui<br />
                        <br />
                        <span class="gerecht-header"><b>Frutti di Mare</b> <b>€13,00</b></span><br />
                        Tomatensaus, mozzarella kaas, zeevruchtenmix (garnalen, mosselen, inktvis) en knoflook<br />
                    </p>
                </article>
            </section>
            <section class="eten-menu-container-half2">
                <article class="menu-deel">
                    <h3>Pastagerechten</h3>
                    <p>
                        <span class="gerecht-header"><b>Spaghetti Bolognese</b> <b>€10,00</b></span><br />
                        Traditionele gehaktsaus met tomaten, geserveerd met spaghetti<br />
                        <br />
                        <span class="gerecht-header"><b>Penne Arrabiata</b> <b>€9,50</b></span><br />
                        Pittige tomatensaus met knoflook en rode pepers, geserveerd met penne pasta<br />
                        <br />
                        <span class="gerecht-header"><b>Fettuccine Alfredo</b> <b>€10,50</b></span><br />
                        Romige Alfredo-saus met Parmezaanse kaas, geserveerd met fettuccine pasta<br />
                        <br />
                        <span class="gerecht-header"><b>Lasagne al Forno</b> <b>€11,00</b></span><br />
                        Gelaagde pasta met gehaktsaus, bechamelsaus en kaas, gebakken tot goudbruin<br />
                        <br />
                        <span class="gerecht-header"><b>Linguine ai Frutti di Mare</b> <b>€13,50</b></span><br />
                        Linguine pasta met een mix van zeevruchten in een lichte tomaten-wittewijnsaus<br />
                        <br />
                        <span class="gerecht-header"><b>Gnocchi alla Sorrentina</b> <b>€12,00</b></span><br />
                        Gnocchi (aardappeldeegballetjes) met tomatensaus, mozzarella kaas en basilicum<br />
                        <br />
                        <span class="gerecht-header"><b>Ravioli al Tartufo</b> <b>€14,00</b></span><br />
                        Ravioli gevuld met truffel en ricotta kaas, geserveerd met een romige truffelsaus<br />
                        <br />
                        <span class="gerecht-header"><b>Tagliatelle Carbonara</b> <b>€11,50</b></span><br />
                        Tagliatelle pasta met een romige saus van ei, Parmezaanse kaas, spekjes en zwarte peper<br />
                        <br />
                        <span class="gerecht-header"><b>Risotto ai Funghi</b> <b>€12,50</b></span><br />
                        Romige risotto met gemengde paddenstoelen, Parmezaanse kaas en een vleugje truffelolie<br />
                        <br />
                        <span class="gerecht-header"><b>Orecchiette con Broccoli e Salsiccia</b> <b>€12,50</b></span><br />
                        Orecchiette pasta met broccoli, Italiaanse worst en knoflook in een lichte witte wijnsaus<br />
                    </p>
                </article>
                <article class="menu-deel">
                    <h3>Desserts</h3>
                    <p>
                        <span class="gerecht-header"><b>Tiramisu</b> <b>€6,50</b></span><br />
                        Klassiek Italiaans dessert van lagen mascarpone crème en koffie gedrenkte koekjes<br />
                        <br />
                        <span class="gerecht-header"><b>Cannoli</b> <b>€5,50</b></span><br />
                        Krokante gebakken deegrolletjes gevuld met zoete ricotta vulling, gegarneerd met poedersuiker<br />
                        <br />
                        <span class="gerecht-header"><b>Panna Cotta</b> <b>€6,00</b></span><br />
                        Romige vanillepudding geserveerd met een fruitige coulis<br />
                        <br />
                        <span class="gerecht-header"><b>Gelato</b> <b>€4,00</b>(per bolletje)</span><br />
                        Assortiment van Italiaans ijs in verschillende smaken zoals vanille, chocolade, aardbei, pistache, etc.<br />
                        <br />
                        <span class="gerecht-header"><b>Affogato</b> <b>€5,00</b></span><br />
                        Een bolletje vanille-ijs overgoten met een shot espresso<br />
                        <br />
                        <span class="gerecht-header"><b>Zeppole</b> <b>€6,50</b></span><br />
                        Gefrituurde deegbolletjes bestrooid met poedersuiker, geserveerd met een chocoladedipsaus<br />
                        <br />
                        <span class="gerecht-header"><b>Torta Caprese</b> <b>€7,50</b></span><br />
                        Glutenvrije chocoladetaart gemaakt met amandelmeel en chocolade, geserveerd met een bolletje vanille-ijs<br />
                        <br />
                        <span class="gerecht-header"><b>Sgroppino</b> <b>€8,00</b></span><br />
                        Verfrissend Italiaans dessertdrankje gemaakt van citroensorbet, wodka en prosecco<br />
                        <br />
                        <span class="gerecht-header"><b>Crostata di Frutta</b> <b>€7,00</b></span><br />
                        Italiaanse fruitcake met een krokante korst en een assortiment van vers fruit bovenop<br />
                        <br />
                        <span class="gerecht-header"><b>Profiteroles</b> <b>€6,50</b></span><br />
                        Luchtige soesjes gevuld met vanille custard, overgoten met chocoladesaus<br />
                    </p>
                </article>
            </section>
        </div>
    </section>
</main>
<?php
    loadView('footer')
?>