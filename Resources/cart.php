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
            <li><a href="products.php">Products</a></li>
            <li><a href="#">Cart<ion-icon name="cart-outline"></ion-icon></a></li>
            <li><a href="aboutUs.html">About us</a></li>
        </ul>
    </nav>

    <fieldset class = "products-container">
        <div class="product-header">
            <h5 class="product-title">Product</h5>
            <h5 class="price">Price</h5>
            <h5 class="quantity">Quantity</h5>
            <h5 class="total">Total</h5>
        </div>

        <div class="products">

        </div>

        <form action="check-out.php">
            <input type="submit" value="Go to check out">
        </form>
    </fieldset>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
</body>

<script src = "main.js"></script>
</html>