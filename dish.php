<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dish-Gathof</title>
     <!--fonts-->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
     <link href="https://fonts.cdnfonts.com/css/bebas-neue" rel="stylesheet">
     <!--fonts-->
     <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <!--back to top button-->
    <a id="top" href="#"> <img src="./imgs/icons/up.svg" alt="Up"></a>
    <!--back to top button-->

    <!--whatsapp icon-->
    <a href="https://web.whatsapp.com/" target="_blank" class="whatsapp-button"><img src="./imgs/icons/whatsapp.svg" alt="WhatsApp"></a>
    <!--whatsapp icon-->

    <!--header-->
    <header>
        <!--nav-->
        <?php
        include 'top-nav.php';
        ?>
        <!--nav-->
    </header>
    <!--header-->
    <!--main content-->
    <main>
        <!--single dish-->
        <div class="dish-container">
            <div class="dish-img-container">
                <img class="dish-img" src="./imgs/single-dish/starters/kartoffelpuffer.webp" alt="">
            </div>
            <div class="dish-info-container">
                <div class="language-btn-container">
                    <button id="btnEN" class="btn order ">EN</button>
                    <button id="btnDE" class="btn order ">DE</button>
                </div>
                <div class="dish-title-container">
                <h2 id="dish-title" class="single-dish-title dish-title">Kartoffelpuffer</h2>
                <img src="./imgs/icons/star.svg" alt="Star">
                </div>
                <p id="dish-category" class="dish-type">Starter</p>
                <p id="dish-price" class="single-dish-price dish-price">$6.90</p>
                <p id="dish-description" class="dish-type slide-description">Potato pancakes are shallow fried pancakes of grated or ground potato, 
                    matzo meal, and a binding ingredient such as egg or applesauce, often flavored with grated garlic or onion and seasonings.</p>
                <img src="./imgs/icons/family.svg" alt="Family">
                <div class="add-cart-container">
                    <input class="quantity" type="text" id="quantity" value="1">
                    <a class="btn add-cart" href="#">ADD TO CART</a>
                </div>
            </div>
            </div>
        <!--single dish-->
        
        <!--related dishes-->
        <div class="dishes-main-container">
            <div class="home-titles-container">
                <h3 class="home-title1">discover</h3>
                <h2 class="home-title2">related dishes</h2>
            </div>
            <div class="dishes-container">
                <section class="dish-card">
                    <img src="./imgs/cards/Main Courses/schnitzel.webp" alt="Schnitzel" class="dish-card-img">
                    <div class="dish-data-container">
                        <div>
                            <h2 class="dish-title">Schnitzel</h2>
                            <p class="dish-type">Main course</p>
                        </div>
                        <a href="#"><img src="./imgs/icons/cart.svg" alt="Cart"></a>
                    </div>
                    <p class="dish-price">$5.90</p>
                    <a class="btn order" href="">Order</a>
                </section>
                <section class="dish-card">
                    <img src="./imgs/cards/Main Courses/spätzle.webp" alt="Spätzle" class="dish-card-img">
                    <div class="dish-data-container">
                        <div>
                            <h2 class="dish-title">Spätzle</h2>
                            <p class="dish-type">Main course</p>
                        </div>
                        <a href="#"><img src="./imgs/icons/cart.svg" alt="Cart"></a>
                    </div>
                    <p class="dish-price">$6.85</p>
                    <a class="btn order" href="">Order</a>
                </section>
                <section class="dish-card">
                    <img src="./imgs/cards/Desserts/käsekuchen.webp" alt="Käsekuchen" class="dish-card-img">
                    <div class="dish-data-container">
                        <div>
                            <h2 class="dish-title">Käsekuchen</h2>
                            <p class="dish-type">Dessert</p>
                        </div>
                        <a href="#"><img src="./imgs/icons/cart.svg" alt="Cart"></a>
                    </div>
                    <p class="dish-price">$7.25</p>
                    <a class="btn order" href="">Order</a>
                </section>
                <section class="dish-card">
                    <img src="./imgs/cards/Starters/kartoffelpuffer.webp" alt="Kartoffelpuffer" class="dish-card-img">
                    <div class="dish-data-container">
                        <div>
                            <h2 class="dish-title">Kartoffelpuffer </h2>
                            <p class="dish-type">Starter</p>
                        </div>
                        <a href="#"><img src="./imgs/icons/cart.svg" alt="Cart"></a>
                    </div>
                    <p class="dish-price">$6.25</p>
                    <a class="btn order" href="">Order</a>
                </section>
            </div>
        </div>
        <!--related dishes-->

        <!--subscribe form-->
        <?php
        include 'subscribe-form.php';
        ?>
        <!--subscribe form-->
    </main>
    <!--main content-->

    <!--footer-->
    <?php
    include 'footer.php';
    ?>  
    <!--footer-->
    
    <!--script-->
    <script src="./js/mobileNavMenu.js"></script>
    <script src="./js/navMenu.js"></script>
    <script src="./js/changeLanguage.js"></script>
    <script src="./js/currentYear.js"></script>
    <script src="./js/topButton.js"></script>
    <!--script-->
</body>
</html>