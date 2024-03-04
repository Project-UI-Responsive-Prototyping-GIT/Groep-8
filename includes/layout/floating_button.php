<aside id="floating-button">
    <nav id="menu-floating-btn" style="display: none;"> <!-- styled toegevoegd zodat de button meteen op de eerste klik werkt -->
        <ul>
            <li>
                <button onclick="showForm()">Wilt u reserveren?</button>
            </li>
        </ul>
        <section id="booking-section">
            <form id="booking-form" class="shown" action="">
                <input type="text" name="name" id="name" placeholder="Voornaam" maxlength="50" required>
                <input type="text" name="tussenvoegsel" id="tussenvoegsel" placeholder="Tussenvoegsel" maxlength="15">
                <input type="text" name="lastname" id="lastname" placeholder="Achternaam" maxlength="50" required>
                <input type="tel" name="telefoonnummer" id="telefoonnummer" placeholder="Telefoonnummer" pattern="[\+\d\(\)\.\s-]*" required>
                <input type="email" name="email" id="email" placeholder="E-mail" required>
                <input type="number" name="aantal_personen" id="aantal_personen" placeholder="Aantal personen" min="1" max="20" required>
                <input type="number" name="tijd" id="tijd" placeholder="Tijd in uur" min="16" max="21" required>
                <input type="date" name="date" id="date" placeholder="Datum" required>
                <input type="submit" value="Reserveer">
            </form>
        </section>
    </nav>
    <button onclick="toggleMenu()">
        <img src="./images/image (1) 1.png" alt="pizzaden logo knop">
        <i class="fa-solid fa-xmark fa-2xl" id="menu-floating-btn-closing"></i>
    </button>
</aside>