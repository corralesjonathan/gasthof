<?php 
    require_once '../database.php';
    // Reference: https://medoo.in/api/insert
    $featured = isset($_POST['featured']) ? $_POST['featured'] : 0;

    if ($_POST) {
    $dishData = [
        "dish_name" => $_POST["dish_name"],
        "dish_description"=> $_POST["dish_description"],
        "dish_image"=> $_POST["dish_image"],
        "dish_price"=> $_POST["dish_price"],
        "featured" => $featured,
        "id_dish_size" => $_POST["id_dish_size"], 
        "id_dish_category" => $_POST["id_dish_category"], 
    ];
    
    $database->insert("tb_dishes", $dishData);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gasthof-Add Dishes</title>
    <link rel="stylesheet" href="../css/themes/admin.css">
</head>
<body>
    <div class="main-container">
    <img src="../imgs/gasthof-logo.webp" alt="Gathof Logo">
    <h2>Add New Dish</h2>
        <div class="container">

            <div class="column">
                <form method="post" action="add-dish.php">
                    <div class="form-items">
                        <label for="dish_name">Dish name</label>
                        <input id="dish_name" class="textfield" name="dish_name" type="text">
                    </div>
                    <div class="form-items">
                        <label for="dish_description">Dish Description</label>
                        <textarea id="dish_description" name="dish_description" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-items">
                        <label for="dish_price">Dish Price</label>
                        <input id="dish_price" class="textfield" name="dish_price" type="text">
                    </div>
            </div>

            <div class="column">
                    <div class="form-items">
                        <label for="id_dish_category">Dish Category</label>
                        <select id="id_dish_category" name="id_dish_category">
                            <option value="1">Starter</option>
                            <option value="2">Main course</option>
                            <option value="3">Dessert</option>
                            <option value="4">Drink</option>
                        </select>
                    </div>
                    <div class="form-items">
                        <label for="id_dish_size">Dish Size</label>
                        <select id="id_dish_size" name="id_dish_size">
                            <option value="1">Individual</option>
                            <option value="2">Couples</option>
                            <option value="3">Family</option>
                        </select>
                    </div>
                    <div class="form-items">
                        <div>
                        <label>Is a freatured dish?</label>
                        <input id="featured" type="radio" name="featured" value="1"> Yes
                        <input id="featured" type="radio" name="featured" value="0"> No
                        </div>
                    </div>
            </div>

            <div class="column">
                    <div class="form-items">
                        <label for="dish_image">Dish Image</label>
                        <img id="preview" src="../imgs/placeholder-img.jpg" alt="Preview">
                        <input id="dish_image" type="file" name="dish_image" onchange="readURL(this)">
                    </div>
                        <div class="form-items">
                        <input class="submit-btn" type="submit" value="Add New Dish">
                    </div>
            </div>   
            </form>
        </div>
    </div>
    <script>
        function readURL(input) {
            if(input.files && input.files[0]){
                let reader = new FileReader();

                reader.onload = function(e) {
                    let preview = document.getElementById('preview').setAttribute('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        } 
    </script>
    
</body>
</html>