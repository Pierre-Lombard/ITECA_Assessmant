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
                    <input type="submit" value="sign up" name = "sign-up">
                </td>
            </tr>
        </table>

    </form>
    </div>

    <?php
        
        if (isset($_POST['sign-up'])){

            $DATABASE_HOST = 'localhost:4306';
            $DATABASE_USER = 'root';
            $DATABASE_PASS = '';
            $DATABASE_NAME = 'soil2soil';
            $conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
                if(!$conn){
                    die("Connection failed");
                }

                $username = $_POST['uname'];
                $password = $_POST['psw'];
    
                if(empty($username) || empty($password)){
                    echo "<script>alert('";
                    echo "One or more fields are empty";
                    echo "')</script>";
                    exit();
                }else if(strlen($password) < 8){
                    echo "<script>alert('";
                    echo "Invalid password";
                    echo "')</script>";
                    exit();
                }else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
                    echo "<script>alert('";
                    echo "Invalid username";
                    echo "')</script>";
                    exit();
                }else{
                    $sql = "SELECT username FROM users WHERE username =?";
                    $stmt = mysqli_stmt_init($conn);
                    if(!mysqli_stmt_init($stmt, $sql)){
                        echo "<script>alert('";
                        echo "SQL error";
                        echo "')</script>";
                        exit();
                    }else{
                        mysqli_stmt_bind_parm($stmt, "s", $username);
                        mysqli_stmt_execute($stmt);
                        mysqli_stmt_store_result($stmt);
                        $reultCheck = mysql_stmt_num_rows($stmt);
                        if($reultCheck > 0){
                            echo "<script>alert('";
                            echo "Username taken";
                            echo "')</script>"; 
                            exit();
                        }else{
                            $sql = "INSERT INTO user ('username', 'pass') VALUES (?, ?)";
                            $stmt = mysqli_stmt_init($conn);
                            if(!mysqli_stmt_init($stmt, $sql)){
                            echo "<script>alert('";
                            echo "SQL error";
                            echo "')</script>";
                            exit();  
                        }else {
                            $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

                            mysqli_stmt_bind_parm($stmt, "ss", $username, $hashedPwd);
                            mysqli_stmt_execute($stmt);
                            header("Location: ../index.php?signup=success");
                            exit();
                        }
                    }
                }
            }
                mysqli_stmt_close($stmt);
                mysqli_close($conn);
        }else{
            header("Location ../index.php");
        }
    ?>
</body>
</html>
