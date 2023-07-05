<?php
require_once 'conn.php';
session_start();
if($_SESSION['rol'] > 3)
{
    header ("location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>manage</title>
    <link rel="stylesheet" href="../css/manager.css">
    <link rel="icon" type="image" href="../img/sushi-logo-favicon.png">
</head>

<body>
    <div class="background">
        <header>
            <a class="logo-img header" href="../index.php">
                <img src="../img/Sushi-Logo.png" alt="">
            </a>
            <!-- <nav>
                    <ul>
                        <li><a href="index.html">HOME</a></li>
                        <li><a href="#">ABOUT</a></li>
                        <li><a href="#">RESERVATIONS</a></li>
                        <li><a href="#">CONTACT</a></li>
                     
                    </ul>
                </nav> -->

        </header>

        <div class="button-group">
            <a href="manager/add.php">
                <button>
                    <p>Add</p>
                </button>
            </a>
            <a href="manager/edit.php">
                <button>
                    <p>Edit</p>
                </button>
            </a>
            <a href="manager/delete.php">
                <button>
                    <p>Delete</p>
                </button>
            </a>
        </div>

    </div>
</body>

</html>