<?php 
    require_once '../database.php';
    // Reference: https://medoo.in/api/select
    $dishes = $database->select("tb_dishes","*");  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gasthof-Dishes List</title>
    <link rel="stylesheet" href="../css/themes/admin.css">
</head>
<body>
    
    <h2 style='color: #333333'>Registered Users</h2>
    <table>
        <thead>
            <tr style='background: #9d1310; height: 30px'>
                <td style='color: #ffffff'>Dish name</td>
                <td style='color: #ffffff'>Dish description</td>
                <td style='color: #ffffff'>Dish price</td>
                <td style='color: #ffffff'>Dish image</td>
                <td style='color: #ffffff'>Actions</td>
            </tr>
        </thead>
        <tbody>
            <?php 
                for($i=0; $i<count ($dishes); $i++){
                echo "<tr style='background: #f7f7f7'>";
                echo "<td style='padding-right: 40px'>".$dishes[$i]["dish_name"]."</td>";
                echo "<td style='padding-right: 40px'>".$dishes[$i]["dish_description"]."</td>";
                echo "<td style='padding-right: 40px'>".$dishes[$i]["dish_price"]."</td>";
                echo "<td style='padding-right: 40px'>".$dishes[$i]["dish_image"]."</td>";
                echo "<td style='padding-right: 40px'><a style='color: blue; text-decoration:none' href='edit-users.php?id=".$dishes[$i]["id_user"]."'> 
                Edit </a> <a style='color: red; text-decoration:none' href='delete-user.php?id=".$dishes[$i]["id_user"]."'>Delete</a></td>";
                echo "</tr>";
            };
            ?>
        </tbody>
    </table>
</body>
</html>