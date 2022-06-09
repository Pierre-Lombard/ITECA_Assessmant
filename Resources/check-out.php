<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="check-out-style.css">

</head>
<body>
<nav>  
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="#">Cart</a></li>
            <li><a href="aboutUs.html">About us</a></li>
        </ul>
    </nav>
<h1>Payments</h1>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form method ="POST">
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label>Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John Doe">

            <label>Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">

            <label>Address</label>
            <input type="text" id="adr" name="address" placeholder="123 Jacaranda St">

            <label> City</label>
            <input type="text" id="city" name="city" placeholder="Pretoria">

            <div class="row">


              <div class="col-50">
                <label>Zip</label>
                <input type="text" id="zip" name="zip" placeholder="0081">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            
            <label>Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">

            <label>Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">

            <label>Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">

            <div class="row">
              <div class="col-50">
                <label>Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>

              <div class="col-50">
                <label>CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
              
            </div>
          </div>
          
        </div>

        <input type="submit" value="Pay" class="btn" onclick="payment()">
      </form>
    </div>
  </div>

</div>

<?php
  if (isset($_POST['submit'])){
    $ccNum = $_POST['cardnumber'];
    $expYear = $_POST['expyear'];

    if($ccNum < 13){
      echo "<script>alert("."Your credit card number is incorect".");</script>";
    }else if ($expYear < 2022){
      echo "<script>alert("."Your expire date is incorect".");</script>";
    }else{
        header("Location: ../index.php");
    }
  }
?>
</body>
</html>
