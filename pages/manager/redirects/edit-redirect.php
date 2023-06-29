<?php
require_once '../../conn.php';
session_start();
if($_SESSION['rol'] > 3)
{
    header ("location: ../../index.php");
}

$id = $_GET['edit'];

if(isset($_POST['update_price'])){

   $title = $_POST['title'];
   $price = $_POST['price'];

   $stmt = $conn->query("UPDATE products SET  title='$title', price='$price' WHERE id = '$id'");  
   header('Location: ../edit.php');
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div>

   <?php
      $stmt = $conn->query("SELECT * FROM products WHERE id = '$id'");
      while ($row = $stmt->fetch()){
   ?> 
   <form action="" method="post" >
      <h3 class="title">Update de User</h3>
         <input type="text" placeholder="<?php echo $row['title']?>" name="title" value="<?php echo $row['title']?>">
         <input type="number" min="1" max="100" placeholder="<?php echo $row['price']?>" name="price" class="box" value="<?php echo $row['price']?>">
         <input type="submit" name="update_price" value="update price">
      <a href="../edit.php" class="btn">Terug</a>
   </form>
   <?php }; ?>
</div>
</div>
</body>
</html>
