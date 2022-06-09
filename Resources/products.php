<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Soil2Soil</title>
    <link rel="shortcut icon" href="images/logo2.png">
</head>
<body>
    <nav>  
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="cart.php" class = "cart">Cart <span> 0 </span></a></li>
            <li><a href="aboutUs.html">About us</a></li>
        </ul>
    </nav>

    <fieldset>
        <legend>Our seedlings</legend>
        <table class = "center">
            <tr>
                <td>
                    <img src="images/products/p1.jpg" class="prodImg">
                </td>
                <td>
                    <img src="images/products/p2.jpg" class="prodImg">
                </td>
                <td>
                    <img src="images/products/p3.jpg" class="prodImg">
                </td>
                <td>
                    <img src="images/products/p4.jpg" class="prodImg">
                </td>
            </tr>

            <tr>
                <td>Blue-ginger</td>
                <td>Flaming Katy Kalanchoe</td>
                <td>Tiger aloe</td>
                <td>Golden pothos</td>
                
            </tr>

            <tr>
                <td>
                    <input type="button" onclick = "addBG()" class = "add" value="Add to cart">
                </td>
                <td>
                    <input type="button" onclick = "addFKK()" class = "add" value="Add to cart">
                </td>
                <td>
                    <input type="button" onclick = "addTA()" class = "add" value="Add to cart">
                </td>
                <td>
                    <input type="button" onclick = "addGP()" class = "add" value="Add to cart">
                </td>
            </tr>

            <tr>
                <td>
                    <img src="images/products/p5.jpg" class="prodImg">
                </td>
                <td>
                    <img src="images/products/p6.jpg" class="prodImg">
                </td>
                <td>
                    <img src="images/products/p7.jpg" class="prodImg">
                </td>
                <td>
                    <img src="images/products/p8.jpg" class="prodImg">
                </td>
            </tr>
               
            <tr>
                <td>Fairies Castle</td>
                <td>Whitey</td>
                <td>Rattlesnake plant</td>
                <td>Lace aloe</td>
            </tr>

            <tr>
                <td>
                    <input type="button" onclick = "addFC()" class = "add" value="Add to cart">
                </td>
                <td>
                    <input type="button" onclick = "addW()" class = "add" value="Add to cart">
                </td>
                <td>
                    <input type="button" onclick = "addRP()" class = "add" value="Add to cart">
                </td>
                <td>
                    <input type="button" onclick = "addLA()" class = "add" value="Add to cart">
                </td>
            </tr>
        </table>
    </fieldset>

    <script src = "main.js"></script>
</body>
</html>
