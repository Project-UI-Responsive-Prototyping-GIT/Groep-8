import { voorgerechten, pizzas, pastas, desserts, dranken } from "../app.js";

const btnVoorgerechten = document.getElementById('menu-discover-nav-voorgerechten');
const btnPizzas = document.getElementById('menu-discover-nav-pizzas');
const btnPastas = document.getElementById('menu-discover-nav-pastas');
const btnDesserts = document.getElementById('menu-discover-nav-desserts');
const btnDranken = document.getElementById('menu-discover-nav-dranken');

export class MenuItem {
    constructor(image, title, description, price) {
        this.image = image;
        this.title = title;
        this.description = description;
        this.price = price;
    }

    createMenuItem() {
        const menuItem = document.createElement('article');
        menuItem.classList.add('menu-discover-item');

        const image = document.createElement('img');
        image.classList.add('menu-discover-item-image');
        image.src = this.image;
        image.alt = this.title;
        menuItem.appendChild(image);

        const title = document.createElement('h3');
        title.classList.add('menu-discover-item-title');
        title.textContent = this.title;
        menuItem.appendChild(title);

        const description = document.createElement('p');
        description.classList.add('menu-discover-item-description');
        description.textContent = this.description;
        menuItem.appendChild(description);

        const price = document.createElement('p');
        price.classList.add('menu-discover-item-price');
        price.textContent = '€ ' + this.price;
        menuItem.appendChild(price);

        return menuItem;
    }

    appendMenuItemToParent() {
        const parentElement = document.getElementById('menu-discover-items');

        parentElement.appendChild(this.createMenuItem());
    }

    static clearMenuItems() {
        const parentElement = document.getElementById('menu-discover-items');
        parentElement.innerHTML = '';
    }

    static defaultLoad() {
        pizzas.forEach(menuItem => menuItem.appendMenuItemToParent());
    }
}

export function menuNavigationEvents() {
    btnVoorgerechten.addEventListener('click', () => {
        MenuItem.clearMenuItems();
        voorgerechten.forEach(menuItem => menuItem.appendMenuItemToParent());

        // active class
        btnVoorgerechten.classList.add('menuActive');
        btnPizzas.classList.remove('menuActive');
        btnPastas.classList.remove('menuActive');
        btnDesserts.classList.remove('menuActive');
        btnDranken.classList.remove('menuActive');
    });

    btnPizzas.addEventListener('click', () => {
        MenuItem.clearMenuItems();
        pizzas.forEach(menuItem => menuItem.appendMenuItemToParent());

        // active class
        btnVoorgerechten.classList.remove('menuActive');
        btnPizzas.classList.add('menuActive');
        btnPastas.classList.remove('menuActive');
        btnDesserts.classList.remove('menuActive');
        btnDranken.classList.remove('menuActive');
    });

    btnPastas.addEventListener('click', () => {
        MenuItem.clearMenuItems();
        pastas.forEach(menuItem => menuItem.appendMenuItemToParent());

        // active class
        btnVoorgerechten.classList.remove('menuActive');
        btnPizzas.classList.remove('menuActive');
        btnPastas.classList.add('menuActive');
        btnDesserts.classList.remove('menuActive');
        btnDranken.classList.remove('menuActive');
    });

    btnDesserts.addEventListener('click', () => {
        MenuItem.clearMenuItems();
        desserts.forEach(menuItem => menuItem.appendMenuItemToParent());

        // active class
        btnVoorgerechten.classList.remove('menuActive');
        btnPizzas.classList.remove('menuActive');
        btnPastas.classList.remove('menuActive');
        btnDesserts.classList.add('menuActive');
        btnDranken.classList.remove('menuActive');
    });

    btnDranken.addEventListener('click', () => {
        MenuItem.clearMenuItems();
        dranken.forEach(menuItem => menuItem.appendMenuItemToParent());

        // active class
        btnVoorgerechten.classList.remove('menuActive');
        btnPizzas.classList.remove('menuActive');
        btnPastas.classList.remove('menuActive');
        btnDesserts.classList.remove('menuActive');
        btnDranken.classList.add('menuActive');
    });
}