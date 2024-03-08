<aside id="floating-button">
    <nav id="menu-floating-btn" style="display: none;"> <!-- styled toegevoegd zodat de button meteen op de eerste klik werkt -->
        <ul>
            <li>
                <button onclick="showForm()">Wilt u reserveren?</button>
            </li>
        </ul>
        <section id="booking-section">
            <form id="booking-form" class="shown" action="./server/bookingHandler.php" method="post">
                <p>Door dit formulier in te dienen, gaat u akkoord met ons <a href="./privacybeleid.php" target="_blank">privacybeleid</a>.</p>
                <input type="text" name="naam" id="naam" placeholder="Voornaam" maxlength="50" required>
                <input type="text" name="tussenvoegsel" id="tussenvoegsel" placeholder="Tussenvoegsel" maxlength="15">
                <input type="text" name="achterNaam" id="achterNaam" placeholder="Achternaam" maxlength="50" required>
                <input type="tel" name="telefoonnummer" id="telefoonnummer" placeholder="Telefoonnummer" required> <!-- pattern="pattern="[\+\d\(\)\.\s-]*" -->
                <input type="email" name="email" id="email" placeholder="E-mail" required>
                <input type="number" name="aantal_personen" id="aantal_personen" placeholder="Aantal personen" min="1" max="20" required>
                <input type="number" name="tijd" id="tijd" placeholder="Tijd in uur" min="16" max="21" required>
                <input type="date" name="datum" id="datum" placeholder="Datum" required>
                <input type="checkbox" name="toestemming" id="toestemming" required>
                <label for="toestemming">Ik ga akkoord met het verzenden van mijn gegevens voor reserveringsdoeleinden.</label>
                <input type="submit" value="Reserveer">
            </form>
        </section>
    </nav>
    <button onclick="toggleMenu()">
        <img src="./images/image (1) 1.png" alt="pizzaden logo knop">
        <i class="fa-solid fa-xmark fa-2xl" id="menu-floating-btn-closing"></i>
    </button>
</aside>