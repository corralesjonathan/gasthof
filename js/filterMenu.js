let btnAll = document.getElementById('btnAll');
let btnDesserts = document.getElementById('btnDesserts');
let btnStarters = document.getElementById('btnStarters');
let btnMainCourses = document.getElementById('btnMainCourses');
let btnDrinks = document.getElementById('btnDrinks');
let dishesContainer = document.querySelector('.dishes-container');

// Agrega un evento click al botón "Todas"
btnAll.addEventListener('click', () => filterProducts('all'));

// Agrega un evento click a cada botón de categoría
btnDesserts.addEventListener('click', () => filterProducts('desserts'));
btnStarters.addEventListener('click', () => filterProducts('starters'));
btnMainCourses.addEventListener('click', () => filterProducts('main-courses'));
btnDrinks.addEventListener('click', () => filterProducts('drinks'));

// Modifica la función filterProducts para mostrar todas las categorías
function filterProducts(category) {
    let dishCard = document.querySelectorAll('.dish-card');
    dishCard.forEach(card => {
        if (category === 'all' || card.getAttribute('data-category') === category) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
}

// Inicialmente, muestra todas las categorías
filterProducts('all');