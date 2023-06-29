<?php
require_once '../conn.php';
session_start();
if($_SESSION['rol'] > 3)
{
    header ("location: ../../index.php");
}


$stmt = $conn->query("SELECT id, title FROM products ");


while ($row = $stmt->fetch()) {  ?> 

   <div class="title"> <?php echo $row['title']; ?></div>
   <div class="delete"><a href="redirects/delete-redirect.php?delete=<?php echo $row['id']; ?>">Delete</a></div>

<?php }; ?>

<a href="../manager.php">Terug</a>

