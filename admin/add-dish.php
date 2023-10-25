<?php 
    require_once '../database.php';
    // Reference: https://medoo.in/api/insert
    
    if ($_POST) {
    $dishData = [
        "dish_name" => $_POST["dish_name"],
        "dish_description"=> $_POST["dish_description"],
        "dish_image"=> $_POST["dish_image"],
        "dish_price"=> $_POST["dish_price"],
        "featured"=> $_POST["featured"],
        "people"=> $_POST["people"],
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
    <title>Add Dish</title>
    <link rel="stylesheet" href="../css/themes/admin.css">
</head>
<body>
    <div class="container">
        <h2>Add New Dish</h2>
        <form method="post" action="add-dish.php">
            <div class="form-items">
                <label for="dish_name">Dish name</label>
                <input id="dish_name" class="textfield" name="dish_name" type="text">
            </div>
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
                <label for="dish_description">Dish Description</label>
                <textarea id="dish_description" name="dish_description" cols="30" rows="10"></textarea>
            </div>
            <div class="form-items">
                <label for="dish_image">Dish Image</label>
                <img id="preview" src="../imgs/placeholder-img.jpg" alt="Preview">
                <input id="dish_image" type="file" name="dish_image" onchange="readURL(this)">
            </div>
            <div class="form-items">
                <label for="dish_price">Dish Price</label>
                <input placeholder="$" id="dish_price" class="textfield" name="dish_price" type="text">
            </div>
            <div class="form-items">
                <label for="featured">Is the dish featured?</label>
                <select id="featured" name="featured">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>
            <div class="form-items">
                <label for="people">This dish is:</label>
                <select id="people" name="people">
                    <option value="Individual">Individual</option>
                    <option value="Couples">Couples</option>
                    <option value="Family">Famiy</option>
                </select>
            </div>
            <div class="form-items">
                <input class="submit-btn" type="submit" value="Add New Dish">
            </div>
        </form>
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