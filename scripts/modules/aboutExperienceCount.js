import { voorgerechten, pizzas, pastas, desserts, dranken } from "../app.js";

export function countMenuItems() {
    const menuItemCountElement = document.getElementById('aboutUs-body-menu-items');
    const menuItemCount = voorgerechten.length + pizzas.length + pastas.length + desserts.length + dranken.length;

    menuItemCountElement.innerHTML = menuItemCount;

    return menuItemCount;
}

export function yearsOfExperience() {
    const yearsOfExperienceElement = document.getElementById('aboutUs-body-experience');
    const openingDate = new Date('2022-05-19');
    const currentDate = new Date();
    const yearsOfExperience = currentDate.getFullYear() - openingDate.getFullYear();

    yearsOfExperienceElement.innerHTML = yearsOfExperience;

    return yearsOfExperience;
}