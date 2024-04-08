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
        <section id="home-slideShow">
            <!-- TODO: JS classes gebruiken om slides te maken -->
            <figure class="home-slideShow-slide">
                <img src="./images/home/slideshow/slideShow1.jpeg" alt="slide 1" />
                <h2>Pizza</h2>
                <figcaption>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit eligendi commodi alias cupiditate enim aliquid.
                </figcaption>
            </figure>
            <figure class="home-slideShow-slide">
                <img src="./images/home/slideshow/slideShow2.jpeg" alt="slide 2" />
                <h2>Pizza</h2>
                <figcaption>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit eligendi commodi alias cupiditate enim aliquid.
                </figcaption>
            </figure>
            <figure class="home-slideShow-slide">
                <img src="./images/home/slideshow/slideShow3.jpeg" alt="slide 3" />
                <h2>Pizza</h2>
                <figcaption>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit eligendi commodi alias cupiditate enim aliquid.
                </figcaption>
            </figure>
            <section class="home-slideShow-arrows" id="home-slideShow-left">
                <i class="fa-solid fa-angle-left"></i>
            </section>
            <section class="home-slideShow-arrows" id="home-slideShow-right">
                <i class="fa-solid fa-angle-right"></i>
            </section>
        </section>
        <?php
            loadView('promises')
        ?>
        <section id="home-latest-reviews"></section> <!-- TODO: latest reviews -->
        <section id="home-events">
            <section id="home-event-container">
                <img id="home-event-image" src="./images/home/events/event-test.jpg" alt="event foto" />
                <section id="home-event-info">
                    <h2 id="home-event-name">event naam</h2>
                    <p id="home-event-description">event beschrijving</p>
                    <section id="home-event-date-info">
                        <i class="fa-regular fa-calendar-check"></i>
                        <p id="home-event-date">event datum</p>
                    </section>
                    <section id="home-event-time-info">
                        <i class="fa-regular fa-clock"></i>
                        <p id="home-event-time">event tijd</p>
                        <p> - </p>
                        <p id="home-event-time-end">event eind tijd</p>
                    </section>
                    <section id="home-event-timeToGo">
                        <section class="home-event-timeToGo-time">
                            <p id="home-event-days">00</p>
                            <p>dagen</p>
                        </section>
                        <section class="home-event-timeToGo-time">
                            <p id="home-event-hour">00</p>
                            <p>uur</p>
                        </section>
                        <section class="home-event-timeToGo-time">
                            <p id="home-event-minutes">00</p>
                            <p>minuten</p>
                        </section>
                        <section class="home-event-timeToGo-time">
                            <p id="home-event-seconds">00</p>
                            <p>secondes</p>
                        </section>
                    </section>
                </section>
            </section>
        </section>
        <section id="home-subscribe-newsletter">
            <h2>Abonneer op onze nieuwsbrief</h2>
            <form action="" method="post"> <!-- TODO: add action -->
                <input type="email" name="email" id="home-subscribe-email" placeholder="Vul hier je email in" />
                <input type="submit" value="Abonneer" />
            </form>
        </section>
    </main>
<?php
    loadView('footer')
?>