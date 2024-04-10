import { showSlides } from "./modules/homeSlideShow.js";
import HomeEvent from "./modules/homeEvent.js";
import { MenuItem, menuNavigationEvents } from "./modules/menuItems.js";
import { countMenuItems, yearsOfExperience } from "./modules/aboutExperienceCount.js";
import GalleryFotos from "./modules/galleryFotos.js";
import { toggleMenuEvent, showFormEvent, closeFormEvent } from "./modules/floatingButton.js";
import { formSubmitEvent } from "./modules/formSubmission.js";

// om een event te starten
// event naam, event beschrijving, event datum, event tijd, event eind tijd
const event = new HomeEvent('Event Name', 'Event Description', '2024-05-19', '12:00', '14:00');

// om een menu item te maken
// image, title, description, price
export const voorgerechten = [
    new MenuItem('images/menu/voorgerechten/Bruschetta.png', 'Voorgerecht 1', 'Dit is een voorgerecht', 5.00),
    new MenuItem('images/menu/voorgerechten/Garlic-Bread.png', 'Voorgerecht 2', 'Dit is een voorgerecht', 6.00),
    new MenuItem('images/menu/voorgerechten/Bruschetta.png', 'Voorgerecht 3', 'Dit is een voorgerecht', 7.00),
    new MenuItem('images/menu/voorgerechten/Garlic-Bread.png', 'Voorgerecht 4', 'Dit is een voorgerecht', 8.00),
    new MenuItem('images/menu/voorgerechten/Bruschetta.png', 'Voorgerecht 5', 'Dit is een voorgerecht', 9.00)
];
export const pizzas = [
    new MenuItem('images/menu/pizzas/Pepperoni-Pizza.png', 'Pepperoni Pizza', 'pizza ingrediënten', 9.00),
    new MenuItem('images/menu/pizzas/Shrimp-Pizza.png', 'Shrimp Pizza', 'pizza ingrediënten', 10.00),
    new MenuItem('images/menu/pizzas/Pepperoni-Pizza.png', 'Pepperoni Pizza', 'pizza ingrediënten', 11.00),
    new MenuItem('images/menu/pizzas/Shrimp-Pizza.png', 'Shrimp Pizza', 'pizza ingrediënten', 12.00),
    new MenuItem('images/menu/pizzas/Pepperoni-Pizza.png', 'Pepperoni Pizza', 'pizza ingrediënten', 13.00),
    new MenuItem('images/menu/pizzas/Shrimp-Pizza.png', 'Shrimp Pizza', 'pizza ingrediënten', 14.00),
    new MenuItem('images/menu/pizzas/Pepperoni-Pizza.png', 'Pepperoni Pizza', 'pizza ingrediënten', 15.00)
];
export const pastas = [
    new MenuItem('images/menu/pastas/spaghetti.png', 'Pasta 1', 'Dit is een pasta', 13.00),
    new MenuItem('images/menu/pastas/pasta.png', 'Pasta 2', 'Dit is een pasta', 14.00),
    new MenuItem('images/menu/pastas/spaghetti.png', 'Pasta 3', 'Dit is een pasta', 15.00),
    new MenuItem('images/menu/pastas/pasta.png', 'Pasta 4', 'Dit is een pasta', 16.00),
    new MenuItem('images/menu/pastas/spaghetti.png', 'Pasta 5', 'Dit is een pasta', 17.00)
];
export const desserts = [
    new MenuItem('images/menu/desserts/Sweet-Dessert.png', 'Dessert 1', 'Dit is een dessert', 17.00),
    new MenuItem('images/menu/desserts/Dessert.png', 'Dessert 2', 'Dit is een dessert', 18.00),
    new MenuItem('images/menu/desserts/Sweet-Dessert.png', 'Dessert 3', 'Dit is een dessert', 19.00),
    new MenuItem('images/menu/desserts/Dessert.png', 'Dessert 4', 'Dit is een dessert', 20.00),
    new MenuItem('images/menu/desserts/Sweet-Dessert.png', 'Dessert 5', 'Dit is een dessert', 21.00)
];
export const dranken = [
    new MenuItem('images/menu/dranken/cola.png', 'Drank 1', 'Dit is een drank', 21.00),
    new MenuItem('images/menu/dranken/Sprite.png', 'Drank 2', 'Dit is een drank', 22.00),
    new MenuItem('images/menu/dranken/cola.png', 'Drank 3', 'Dit is een drank', 23.00),
    new MenuItem('images/menu/dranken/Sprite.png', 'Drank 4', 'Dit is een drank', 24.00),
    new MenuItem('images/menu/dranken/cola.png', 'Drank 5', 'Dit is een drank', 25.00)
];

// om een foto in de gallery te zetten
// src, alt
const galleryFotos = [
    new GalleryFotos('https://picsum.photos/200', 'Gallery 1'),
    new GalleryFotos('https://picsum.photos/200', 'Gallery 2'),
    new GalleryFotos('https://picsum.photos/200', 'Gallery 3'),
    new GalleryFotos('https://picsum.photos/200', 'Gallery 4'),
    new GalleryFotos('https://picsum.photos/200', 'Gallery 5'),
    new GalleryFotos('https://picsum.photos/200', 'Gallery 6'),
    new GalleryFotos('https://picsum.photos/200', 'Gallery 7'),
    new GalleryFotos('https://picsum.photos/200', 'Gallery 8'),
    new GalleryFotos('https://picsum.photos/200', 'Gallery 9'),
    new GalleryFotos('https://picsum.photos/200', 'Gallery 10')
];

function handleFloatingButton() {
    toggleMenuEvent();
    showFormEvent();
    closeFormEvent();
    formSubmitEvent();
}

function handleIndexPage() {
    showSlides();
    event.startEvent();
}

function handleMenuPage() {
    menuNavigationEvents();
    MenuItem.defaultLoad(); // laat de pizza menu standaart zien
}

function handleAboutPage() {
    countMenuItems();
    yearsOfExperience();
}

function handleGalleryPage() {
    galleryFotos.forEach(foto => {
        foto.render();
    });
}

if (window.location.pathname.includes('/index.php') || window.location.pathname.endsWith('/Groep-8/')) {
    handleIndexPage();
} else if (window.location.pathname.includes('/ourMenu.php')) {
    handleMenuPage();
} else if (window.location.pathname.includes('/aboutUs.php')) {
    handleAboutPage();
} else if (window.location.pathname.includes('/gallery.php')) {
    handleGalleryPage();
} else if (!window.location.pathname.includes('/vacatures.php') && !window.location.pathname.includes('/reviews.php')) {
    handleFloatingButton();
}