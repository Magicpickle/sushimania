<?php
require_once '../../conn.php';
session_start();
if($_SESSION['rol'] > 3)
{
    header ("location: ../../index.php");
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
} 
echo $_GET['delete'];
$stmt = $conn->query("DELETE FROM products WHERE id='$id'");
$stmt->fetch();

Header("Location: ../delete.php");
