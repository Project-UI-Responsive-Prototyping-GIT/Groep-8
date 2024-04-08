<?php
    include 'includes/functions.php';

    $metaData = [
        'pageauthor' => 'P. Staats en S. Stikkelorum',
        'pagetitle' => 'HOME - Pizzaden'
    ];
    
    loadView('header', $metaData);
?>
<main class="main-container">
    <!-- TODO: maak gebruik van css-flexbox -->
    <section id="reviews-container">
        <section id="reviews-tolal">
            <article id="reviews-total-card-head">
                <h2>Pizzaden reviews</h2>
            </article>
            <section id="reviews-total-card-body">
                <article class="reviews-total-card-body-colm">
                    <h3><b><span id="reviews-average-rating">0</span> / 5</b></h3>
                    <section id="reviews-average-stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </section>
                    <h3><span id="reviews-total-reviews">0</span> Reviews</h3>
                </article>
                <section class="reviews-total-card-body-colm"></section>
            </section>
        </section>
    </section>
</main>
<?php
    loadView('footer');
?>