function toggleMenu() { // FIXME: add event listener to the button
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

function bookingFormStyle() {
    const menu = document.getElementById('menu-floating-btn');
    const bookingForm = document.getElementById('booking-form');
    const menuQuestion = document.querySelector('#menu-floating-btn > ul > li > button');
    const bookingSection = document.getElementById('booking-section');

    if (bookingForm.style.display === 'block') {
        menuQuestion.style.display = 'none';
        menu.style.width = '20rem';

        if (!bookingSection.querySelector('h3')) {
            const bookingTitle = document.createElement('h3');
            bookingTitle.textContent = 'Maak hier uw reservering';
            bookingSection.prepend(bookingTitle);
        }
    } else {
        menuQuestion.style.display = 'block';
        menu.style.width = '10rem';

        const bookingTitle = bookingSection.querySelector('h3');
        if (bookingTitle) {
            bookingTitle.remove();
        }
    }
}

function showForm() { // FIXME: add event listener to the button
    const bookingForm = document.getElementById('booking-form');
    const menuQuestion = document.querySelector('#menu-floating-btn > ul > li > button');

    bookingForm.style.display = 'block';
    bookingFormStyle();
}

function closeForm() {
    const bookingForm = document.getElementById('booking-form');
    const menuQuestion = document.querySelector('#menu-floating-btn > ul > li > button');

    bookingForm.style.display = 'none';
    bookingFormStyle();
}

export function toggleMenuEvent() {
    const button = document.getElementById('floatingBtnImage'); // floating-button
    button.addEventListener('click', toggleMenu);
}

export function showFormEvent() {
    const menuQuestion = document.getElementById('floatingBtnReserveer');
    menuQuestion.addEventListener('click', showForm);
}

export function closeFormEvent() {
    document.addEventListener('click', function(event) {
        const menu = document.getElementById('menu-floating-btn');
        const closebtn = document.getElementById('menu-floating-btn-closing');
        const buttonImg = document.querySelector('#floating-button > button > img');
        const bookingForm = document.getElementById('booking-form');

        if ((!menu.contains(event.target) && event.target !== buttonImg) || 
            (!menu.contains(event.target) && event.target !== buttonImg && event.target !== bookingForm)) {
            menu.style.display = 'none';
            buttonImg.style.display = 'block';
            closebtn.style.display = 'none';
            if (event.target !== bookingForm) {
                closeForm();
            }
            // buttonImg.classList.remove('rotate-animation'); // TODO: Add animation
        }
    });
}