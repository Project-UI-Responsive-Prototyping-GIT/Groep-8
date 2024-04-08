const container = document.getElementById('home-slideShow');
const arrowLeft = document.getElementById('home-slideShow-left');
const arrowRight = document.getElementById('home-slideShow-right');

let slideIndex = 0;

export function showSlides() {
    let slides = container.getElementsByClassName('home-slideShow-slide');
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = 'none';
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }
    slides[slideIndex - 1].style.display = 'block';

    let timer;

    function resetTimer() {
        clearTimeout(timer);
        timer = setTimeout(showSlides, 4000);
    }

    resetTimer();

    arrowLeft.addEventListener('click', () => {
        slideIndex--;
        if (slideIndex < 1) {
            slideIndex = slides.length;
        }
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = 'none';
        }
        slides[slideIndex - 1].style.display = 'block';
        resetTimer();
    });

    arrowRight.addEventListener('click', () => {
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1;
        }
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = 'none';
        }
        slides[slideIndex - 1].style.display = 'block';
        resetTimer();
    });
}