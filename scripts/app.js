import { toggleMenu } from "./modules/floatingButton.js";
import { showForm } from "./modules/floatingButton.js";
import { closeEvent } from "./modules/floatingButton.js";
import { hamburgerMenuTogleEvent } from "./modules/hamburgerMenu.js";

window.toggleMenu = toggleMenu; // voegt de functie toe aan de global scope (zorgt ervoor dat onclick in html werkt)
window.showForm = showForm; // voegt de functie toe aan de global scope (zorgt ervoor dat onclick in html werkt)

closeEvent(); // event listener voor het sluiten van het formulier
hamburgerMenuTogleEvent(); // event listener voor het hamburger menu