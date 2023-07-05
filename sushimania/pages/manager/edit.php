<?php
require_once '../conn.php';
session_start();
if($_SESSION['rol'] > 3)
{
    header ("location: ../../index.php");
}


$stmt = $conn->query("SELECT id, title, price FROM products ");


while ($row = $stmt->fetch()) {  ?> 

   <div class="title"> <?php echo $row['title']; ?></div>
   <div class="price"> <?php echo $row['price']; ?></div>
   <div class="delete"><a href="redirects/edit-redirect.php?edit=<?php echo $row['id']; ?>">edit</a></div>

<?php }; ?>

<a href="../manager.php">Terug</a>