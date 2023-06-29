<?php
require_once '../conn.php';
session_start();
if($_SESSION['rol'] > 3)
{
    header ("location: ../../index.php");
}


if(isset($_POST['submit'])){
    

    $sql = "INSERT INTO products(title, info, price)
    VALUES (:title, :info, :price)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":title", $_POST['title']);
    $stmt->bindParam(":info", $_POST['info']);
    $stmt->bindParam(":price", $_POST['price']);
    $stmt->execute();
    $result = $stmt->fetch();
    header('Location: ../manager.php'); 
};





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/submit.css">
    <!-- <link rel="icon" type="image/x-icon" href="img/icon.png">     -->
    <title>016 | Submit</title>
</head>
<body>

    <div class="flex">
    <div class="submit-box">
        <form action="#" method="POST">

            <label>Title</label>
            <input required type="text" name="title" placeholder="Title">
            <label>Info</label>
            <input required type="text" name="info" placeholder="Info">
            <label>price</label>
            <input required type="number" name="price" placeholder="1">

            <input class="sub" type="submit" value="Submit " name="submit">
        </form>
        <a href="../manager.php">Terug</a>
    </div>
    </div>
    <?php 
    
    // echo $id;
    
    ?>
</body>
</html>