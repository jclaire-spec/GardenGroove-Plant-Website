<?php
session_start();

// Check if the user is not logged in
if (!isset($_SESSION['user_info'])) {
    // Redirect to login page or handle accordingly
    header("Location: logIn.php");
    exit();
}
$user_info = $_SESSION['user_info'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="This is for WBDV Final Activity">
    <meta name="author" content="Jecca Claire B. Pepe">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Times New Roman', Times, serif;
        }

        .wrapper {
             position: relative;
            display: flex;
			flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #fff;
        }

        .nav {
            position: fixed;
            top: 0;
            display: flex;
            justify-content: space-around;
            width: 85%;
            line-height: 45px;
            border-radius: 30px;
            background: #314f33;
            padding: 5px 10px;
            margin-top: 30px;
            z-index: 100;
        }

        .nav-logo p {
            font-family: 'Times New Roman', Times, serif;
            color: #fff;
            font-size: 25px;
            font-weight: 500;
            text-transform: uppercase;
        }

        .nav-menu ul {
            display: flex;
        }

        .nav-menu ul li {
            list-style-type: none;
            margin-right: 30px;
        }

        .nav-menu ul li .link {
            text-decoration: none;
            font-weight: 500;
            color: #fff;
            font-size: 18px;
            padding-bottom: 15px;
            margin: 0 3px;
        }

        .link:hover,
        .active {
            border-bottom: 2px solid #fff;
        }

        .logout-button {
            margin-top: 21px;
            margin-left: 40px;
            padding: 10px 35px;
            border-radius: 50px;
            font-weight: bolder;
            border: 1px solid #7A9D54;
            background: #7A9D54;
            cursor: pointer;
            transition: 0.3s ease;
        }

        .logout-button:hover {
            background: rgba(211, 211, 211, 0.4);
        }

        .user-container {
            display: flex;
            align-items: flex-start;
            justify-content: center;
			margin: 120px 50px 58px 80px; 
        }

        .user-info {
            margin-right: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 5px 5px 10px 5px #7A9D54;
            padding: 20px;
            display: flex;
            width: 22%;
            flex-direction: column;
            align-items: center;
        }

        .user-info img {
			margin-left: 20px;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .user-info h2{
            text-align: center;
            margin-bottom: 15px;
        }

        .info p{
            padding: 5px;
        }

        .user-details {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .account-details,
        .payment-methods {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 5px 5px 10px 5px #7A9D54;
            padding: 30px;
            width: 30%;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .account-details p,
        .payment-methods p {
            padding: 5px;
        }

        .account-details h2 {
            margin-left: 40px;
            margin-bottom: 20px;
            border-bottom: 2px solid #1A5D1A;
        }

        .payment-methods h2 {
            margin-top: 5px;
            margin-left: 30px;
            border-bottom: 2px solid #1A5D1A;
        }

        .shipping-add h2{
            margin-bottom: 20px;
            border-bottom: 2px solid #1A5D1A;
        }

        .shipping-add p{
            padding: 5px;
        }

        span{
            opacity: 0.7;
        }

        .shipping-add {
            margin-left: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 5px 5px 10px 5px #7A9D54;
            padding: 30px;
            width: 30%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        form {
            margin-top: 5px;
        }

        .input-field {
            font-size: 15px;
            background: #7A9D54;
            color: #fff;
            padding: 0 20px 0 40px;
            width: 100%;
            height: 20px;
            border: none;
            border-radius: 10px;
            outline: none;
            margin-bottom: 10px;
        }

        label {
            opacity: 0.7;
        }

        .submit {
            margin-top: 31px;
            margin-left: 60px;
            padding: 10px 30px;
            border-radius: 50px;
            font-weight: bolder;
            border: 1px solid #7A9D54;
            cursor: pointer;
            transition: 0.3s ease;
        }

        .submit:hover {
            background: #7A9D54;
        }

        .submit1 {
            margin-top: 11px;
            margin-left: 40px;
            padding: 10px 30px;
            border-radius: 50px;
            font-weight: bolder;
            border: 1px solid #7A9D54;
            cursor: pointer;
            transition: 0.3s ease;
        }

        .submit1:hover {
            background: #7A9D54;
        }
		
		footer {
			background: #000;
			color: #fff;
			padding: 10px;
			text-align: center;
			bottom: 0;
			width: 100%;
		}

        footer p {
            text-align: center;
        }

    </style>
    <script src="https://kit.fontawesome.com/187d3b140a.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <nav class="nav">
            <div class="nav-logo">
                <p>Garden Groove</p>
            </div>
            <div class="nav-menu" id="navMenu">
                <ul>
                    <li><a href="../index.php" class="link">Home</a></li>
                    <li><i class="fa-brands fa-pagelines" style="color: #ffffff;"></i><a href="../shop/shop.php" class="link">Shop</a></li>
                    <li><i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i><a href="../cart/cart.php" class="link">Cart</a></li>
                </ul>
            </div>
            <div class="nav-menu-btn">
                <i class="bx bx-menu" onclick="myMenuFunction()"></i>
            </div>
            <div class="nav-button">
                <a href="./signin_login/loginuser.php"><i class="fa-solid fa-user" style="color: #fafafa;"></i></a>
            </div>
        </nav>
    <div class="user-container">
        <div class="user-info">
            <div class="info">
            <img src="../img/user.jpg" alt="User Profile Picture" width="150" height="150">
            <h2><?php echo $user_info['firstname'] . ' ' . $user_info['lastname']; ?></h2>
                <p><i class="fa-solid fa-user" style="color: #1A5D1A;"></i> <?php echo $user_info['username']; ?></p>
                <p><i class="fa-solid fa-phone" style="color: #1A5D1A;"></i> <?php echo $user_info['cell_number']; ?></p>
                <p><i class="fa-solid fa-location-dot" style="color: #1A5D1A;"></i> <?php echo $user_info['address']; ?></p>
                <a href="logout.php"><button class="logout-button">Log Out</button></a>
            </div>
        </div>
        <div class="account-details">
            <h2>Account Details</h2>
            <p><span>Lastname:</span> <?php echo $user_info['lastname']; ?></p>
            <p><span>Firstname:</span> <?php echo $user_info['firstname']; ?></p>
            <p><span>Middle Initial:</span> <?php echo $user_info['mi']; ?></p>
            <p><span>Address:</span> <?php echo $user_info['address']; ?></p>
            <h2 style="margin-top: 15px; text-align: center;">Payment Methods</h2>
            <form id="paymentForm">
                <label for="paymentMethod">Select Payment Method:</label>
                <select id="paymentMethod" class="input-field" required>
					<option value="" disabled selected>Options</option>
                    <option value="creditCard">Credit Card</option>
                    <option value="debitCard">Debit Card</option>
                    <option value="debitCard">GCash</option>
					<option value="debitCard">PayPal</option>
                </select>
                <button type="button" class="submit1" onclick="savePaymentMethod()">Save Payment</button>
            </form>
        </div>
        <div class="shipping-add">
            <h2>Shipping Address</h2>
            <form id="shippingForm">
                <label for="address">Address:</label>
                <input type="text" class="input-field" id="address" name="address" required>

                <label for="state">State:</label>
                <input type="text" class="input-field" id="state" name="state" required>

                <label for="country">Country:</label>
                <input type="text" class="input-field" id="country" name="country" required>

                <label for="city">City:</label>
                <input type="text" class="input-field" id="city" name="city" required>

                <label for="zip">Zip Code:</label>
                <input type="text" class="input-field" id="zip" name="zip" required>

                <button type="button" class="submit" onclick="saveShippingAddress()">Save Address</button>
            </form>
        </div>
    </div>
<footer>
	<p>Copyright &#169; 2023 Jecca Claire. All Rights Reserved.</p>
</footer>
<script>
    function saveShippingAddress() {
        // Get the values from the form
        var address = document.getElementById("address").value;
        var state = document.getElementById("state").value;
        var country = document.getElementById("country").value;
        var city = document.getElementById("city").value;
        var zip = document.getElementById("zip").value;

        // Display the saved address
        var shippingInfo = document.getElementById("shippingInfo");
        shippingInfo.innerHTML = "<p><span>Address:</span> " + address + "</p>" +
            "<p><span>State:</span> " + state + "</p>" +
            "<p><span>Country:</span> " + country + "</p>" +
            "<p><span>City:</span> " + city + "</p>" +
            "<p><span>Zip Code:</span> " + zip + "</p>";

        // Hide the form
        document.getElementById("shippingForm").style.display = "none";
    }

    function editShippingAddress() {
        // Enable editing of the form fields
        document.getElementById("address").disabled = false;
        document.getElementById("state").disabled = false;
        document.getElementById("country").disabled = false;
        document.getElementById("city").disabled = false;
        document.getElementById("zip").disabled = false;

        // Show the form
        document.getElementById("shippingForm").style.display = "block";
    }
</script>
</body>
</html>