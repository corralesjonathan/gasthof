let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("slide");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = slides.length }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "grid";
            dots[slideIndex - 1].className += " active";
        }

        // Agregar la función para avanzar automáticamente los slides cada 3 segundos (ajusta este valor según tus necesidades)
        let autoSlideInterval = setInterval(function () {
            plusSlides(1);
        }, 4000); // Cambiar de slide cada 4 segundos

        // Agregar manejo de eventos para detener/reiniciar el temporizador al interactuar con los puntos
        let dots = document.getElementsByClassName("dot");
        for (let i = 0; i < dots.length; i++) {
            dots[i].addEventListener("mouseover", function () {
                clearInterval(autoSlideInterval); // Detener el temporizador al pasar el mouse por encima
            });
            dots[i].addEventListener("mouseout", function () {
                autoSlideInterval = setInterval(function () {
                    plusSlides(1);
                }, 4000); // Reiniciar el temporizador cuando se libera el puntero
            });
        }

        // Agregar manejo de eventos para detener el temporizador cuando el mouse entra en el contenedor
        let sliderContainer = document.getElementById("slider-container");
        sliderContainer.addEventListener("mouseover", function () {
            clearInterval(autoSlideInterval);
        });

        // Agregar manejo de eventos para reiniciar el temporizador cuando el mouse sale del contenedor
        sliderContainer.addEventListener("mouseout", function () {
            autoSlideInterval = setInterval(function () {
                plusSlides(1);
            }, 4000); // Reiniciar el temporizador cuando se sale del contenedor
        });

        // Agregar manejo de eventos para cambiar las diapositivas deslizando horizontalmente en dispositivos móviles
        let touchStartX = null;
        let touchEndX = null;

        document.getElementById("slider-container").addEventListener("touchstart", function (e) {
            touchStartX = e.touches[0].clientX;
        });

        document.getElementById("slider-container").addEventListener("touchend", function (e) {
            touchEndX = e.changedTouches[0].clientX;

            // Determinar la dirección del deslizamiento
            if (touchStartX - touchEndX > 50) {
                plusSlides(1); // Deslizar hacia la izquierda para avanzar
            } else if (touchEndX - touchStartX > 50) {
                plusSlides(-1); // Deslizar hacia la derecha para retroceder
            }
        });