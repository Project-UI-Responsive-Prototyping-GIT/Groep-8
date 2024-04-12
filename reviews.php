<?php
    include 'includes/functions.php';

    $metaData = [
        'pageauthor' => 'P. Staats en S. Stikkelorum',
        'pagetitle' => 'HOME - Pizzaden'
    ];
    
    loadView('header', $metaData);
?>
<main class="main-container review">
    <section class="reviews-container">
    <form action="" method="get">
        Beoordeling<br><br>
        <label for="name">Naam:<br></label>
        <input class="rating" type="text" name="name"><br>

        <label for="description">Schrijf hier je beoordeling<br></label>
        <textarea class="rating" id="textarea-review" name="description" rows="5" cols="50"></textarea><br>

        <label for="rating">Rating:</label>
        <div class="rating-opties">
            <?php for ($i = 1; $i <= 5; $i++) : ?>
                <input class="rating-opties" type="radio" name="rating" value="<?php echo $i; ?>" id="rating<?php echo $i; ?>">
                <label for="rating<?php echo $i; ?>"><?php echo $i; ?></label>
            <?php endfor; ?>
        </div><br>

        <input class="rating-submit" type="submit" value="Submit">
    </form>
    <section class="flexbox-review">
        <section class="main-review-flex">
                <?php

            if ($_SERVER["REQUEST_METHOD"] == "GET") {
                if (isset($_GET['name']) && !empty($_GET['name']) &&
                    isset($_GET['description']) && !empty($_GET['description']) &&
                    isset($_GET['rating']) && !empty($_GET['rating'])) {
                    
                    echo "<article class='main-review'>";
                    echo "<p>{$_GET['name']}</p>";
                    echo "<p class='uitkomstbeschrijving'>{$_GET['description']}</p>";
                    echo "<p>Rating: {$_GET['rating']}</p>";
                    echo "</article>";
                } else {
                    echo "<p>Vul alsjeblieft alle velden in.</p>";
                }
            }
            ?>
            <article class="main-review">
                <p>John</p>
                <p class="uitkomstbeschrijving">Echt de lekkerste pizza ooit gegeten</p>
                <p>Rating: 5</p>
            </article>
        
            <article class="main-review">
                <p>Karen</p>
                <p class="uitkomstbeschrijving">Valt mee, heb beter gegeten</p>
                <p>Rating: 2</p>
            </article>

            <article class="main-review">
                <p>Michael</p>
                <p class="uitkomstbeschrijving">Average pizza, but good value for money.</p>
                <p>Rating: 3</p>
            </article>
        </section>
        </section>
</main>
<?php
    loadView('footer');
?>