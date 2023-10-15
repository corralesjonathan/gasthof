let nav = document.getElementById("nav-container");
let open = document.getElementById("mobile-open-btn");
let close = document.getElementById("mobile-close-btn");

open.addEventListener("click", () => {
    nav.classList.add("visible");
})

close.addEventListener("click", () =>{
    nav.classList.remove("visible");
})
