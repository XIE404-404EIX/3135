<?php

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.kieu-1 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.kieu-2 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.kieu-3 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.kieu-1,
.kieu-2,
.kieu-3 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: blue;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}


/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .kieu-1 {
    margin-bottom: 20px;
  }
}

</style>
</head>
<body>

<h2> Checkout Form</h2>
<p>Family Mart<p>
<div class="row">
  <div class="kieu-3">
    <div class="container">
      <form action="/action_page.php">
      
        <div class="row">
          <div class="kieu-2">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Vlad Akulenko" required>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="vlad@example.com" required>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="4501 Kingsway #102" required>
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="Burnaby" required>

            <div class="row">
              <div class="kieu-2">
                <label for="state">State</label>
                <input type="text" id="state" name="state" >
              </div>
              <div class="kieu-2">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="V5H 2A9" required>
              </div>
            </div>
          </div>

          <div class="kieu-2">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Vlad Akulenko" required>
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="December" required>
            <div class="row">
              <div class="kieu-2">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholer="2022" required>
              </div>
              <div class="kieu-2">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="123" required>
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadress"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>
  <div class="kieu-1">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <p><a href="#">Coca-Cola</a> <span class="price">$2.99</span></p>
      <p><a href="#">Doritos</a> <span class="price">$3.25</span></p>
      <p><a href="#">Cookies</a> <span class="price">$5</span></p>
      <p><a href="#">Apple Juice</a> <span class="price">$2</span></p>
      <p><a href="#">Estimated Shipping for Member</a> <span class="price">$0</span></p>
      <p><a href="#">Estimated Taxes</a> <span class="price">$1.10</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>$14.34</b></span></p>
    </div>
  </div>
</div>

</body>
<footer>
        <p>&copy; <?php echo date("Y"); ?> Family Mart, Inc.</p>
    </footer>
</html>
