<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style2.css">
    <title>Soil2Soil</title>
    <link rel="shortcut icon" href="images/logo2.png">
</head>
<body>
    <nav>  
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="cart.php" class = "cart">Cart</a></li>
            <li><a href="aboutUs.html">About us</a></li>
        </ul>
    </nav>
    
    <div class="main">
    <div class = "imgcontainer">
        <img src="images/logo.png" alt="Soil2Soil" class= "logo">
    </div>


    <form method ="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <table>
            <tr>
                <td>
                    <label>Username</label>
                </td>
                <td>
                    <input type="text" name="uname">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Password</label>
                </td>
                <td>
                    <input type="password" name="psw">
                </td>
            </tr>

            <tr>
                <td colspan = "2">
                    <input type="submit" value="log in">
                </td>
            </tr>
        </table>

    </form>
    </div>

    <?php
        if(isset($_GET["submit"])){
            
        }
    ?>
</body>
</html>
