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
            <a class="logo-img header" href="index.php">
                <img src="img/Sushi-Logo.png" alt="">
            </a>
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
        <div class="box-text">
            <h1>A True Taste of Japanese Cuisine</h1>
            <h2>Made fresh when you order.</h2>
        </div>
    </div>
    <form name="login" action="login.php" method="post">
        <div class="box box0 ">
            <input type="text" name="username" placeholder="Username" require_once>
            <input type="password" name="password" id="password" placeholder="Password" require_once>

        </div>
        <div class="box box1">
            <input type="submit" name="submit" value="submit" require_once>
        </div>
        <input type="checkbox" id="check" onclick="myFunction()">
        <p>Show password</p>
    </form>
</body>
<?php
    require_once 'pages/conn.php';

    if(isset($_POST['submit'])){
       $username = $_POST['username'];
       $password = $_POST['password'];
        $data = [
            'username' => $username,
            'password' => $password,
        ];

        $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
        $stmt= $conn->prepare($sql);
        $stmt->execute($data);
         echo $username . " " . $password;
    }
?>
<script>
function myFunction() {
    const x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
        console.log("shit")
    } else {
        x.type = "password";
    }
}
</script>

</html>