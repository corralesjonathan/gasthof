let heroSlideIndex = 1;
showHeroSlides(heroSlideIndex);

function plusHeroSlides(n) {
    showHeroSlides(heroSlideIndex += n);
}

function currentHeroSlide(n) {
    showHeroSlides(heroSlideIndex = n);
}

function showHeroSlides(n) {
    let i;
    let slides = document.getElementsByClassName("hero-slide");
    let dots = document.getElementsByClassName("hero-dot");
    if (n > slides.length) { heroSlideIndex = 1 }
    if (n < 1) { heroSlideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[heroSlideIndex - 1].style.display = "flex";
    dots[heroSlideIndex - 1].className += " active";
}

// Agregar la función para avanzar automáticamente los slides cada 3 segundos (ajusta este valor según tus necesidades)
let autoHeroSlideInterval = setInterval(function () {
    plusHeroSlides(1);
}, 6000); // Cambiar de slide cada 4 segundos
    

