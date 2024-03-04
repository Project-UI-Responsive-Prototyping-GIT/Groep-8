<aside id="floating-button">
    <nav id="menu-floating-btn" style="display: none;"> <!-- styled toegevoegd zodat de button meteen op de eerste klik werkt -->
        <ul>
            <li>
                <button onclick="showForm()">Wilt u reserveren?</button>
            </li>
        </ul>
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
    </nav>
    <button onclick="toggleMenu()">
        <img src="./images/image (1) 1.png" alt="pizzaden logo knop">
        <i class="fa-solid fa-xmark fa-2xl" id="menu-floating-btn-closing"></i>
    </button>
</aside>

<script>
function toggleMenu() {
    const menu = document.getElementById('menu-floating-btn');
    const closebtn = document.getElementById('menu-floating-btn-closing');
    const buttonImg = document.querySelector('#floating-button > button > img');
    
    if (menu.style.display === 'none') {
        menu.style.display = 'block';
        buttonImg.style.display = 'none';
        closebtn.style.display = 'block';
        // buttonImg.classList.add('rotate-animation'); // TODO: Add animation
    } else {
        menu.style.display = 'none';
        buttonImg.style.display = 'block';
        closebtn.style.display = 'none';
        // buttonImg.classList.remove('rotate-animation'); // TODO: Add animation
    }
}

document.addEventListener('click', function(event) {
    const menu = document.getElementById('menu-floating-btn');
    const closebtn = document.getElementById('menu-floating-btn-closing');
    const buttonImg = document.querySelector('#floating-button > button > img');
    
    if (!menu.contains(event.target) && event.target !== buttonImg) {
        menu.style.display = 'none';
        buttonImg.style.display = 'block';
        closebtn.style.display = 'none';
        // buttonImg.classList.remove('rotate-animation'); // TODO: Add animation
    }
});

function showForm() {
    const bookingForm = document.getElementById('booking-form');
    bookingForm.style.display = 'block';
}

function closeForm() {
    const bookingForm = document.getElementById('booking-form');
    bookingForm.style.display = 'none';
}

document.addEventListener('click', function(event) {
    const menu = document.getElementById('menu-floating-btn');
    const closebtn = document.getElementById('menu-floating-btn-closing');
    const buttonImg = document.querySelector('#floating-button > button > img');
    const bookingForm = document.getElementById('booking-form');
    
    if (!menu.contains(event.target) && event.target !== buttonImg && event.target !== bookingForm) {
        menu.style.display = 'none';
        buttonImg.style.display = 'block';
        closebtn.style.display = 'none';
        closeForm();
    }
});
</script>

<style>
#floating-button {
    position: fixed;
    bottom: 2rem;
    right: 2rem;
    display: flex;
    flex-direction: column;
}

#floating-button > button {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #f8f8f8;
    border: none;
    border-radius: 50%;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    cursor: pointer;
    height: 4rem;
    width: 4rem;
}

#floating-button > button > img {
    height: 2rem;
    width: auto;
    
}

#menu-floating-btn-closing {
    display: none;
}

#booking-form {
    display: none;
}
</style>