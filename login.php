<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="background">
        <header>
            <div class="logo-img header">
                <img src="img/Sushi-Logo.png" alt="">
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">RESERVATIONS</a></li>
                    <li><a href="#">CONTACT</a></li>
                    <a href="order.php">
                        <button>ORDER</button>
                    </a>
                </ul>
            </nav>
        </header>
    </div>
    <form name="login" action="login.php" method="post">
        <div class="box box0 ">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
        </div>
        <div class="box box1">
            <input type="submit" name="submit" value="submit">
        </div>
    </form>
</body>
<?php
    require_once 'pages/conn.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users(username, password) VALUES ('$username .' , ' . $password.')";

    $conn->exec($sql);
    echo $username . " " . $password;
?>

</html>