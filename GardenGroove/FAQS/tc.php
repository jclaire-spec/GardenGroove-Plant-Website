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
            min-height: 20vh;
            background: #fff;
        }
		
		.wrapper::after {
			content: "";
			flex-grow: 1;
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

        .header{
            background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(../img/bg2.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 5% 5%;
            border-radius: 30px;
            color: #fff;
        }

        .header-title{
            font-size: 48px;
            letter-spacing: 1.5;
        }
		
		.header-desc2{
			text-align: justify;
			margin-top: 10px;
			padding: 10px;
		}
		
		.tc{
			margin-top: 30px;
			margin-bottom: 30px;
		}
		
		.tc ul{
			margin-left: 20px;
			list-style-type: disc;
		}

		.tc li{
			font-size: 15px;
			margin: 0 120px 0 120px;
		}

		span{
			font-weight: bolder;
			font-size: 20px;
			color: #314f33;
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
                    <li><i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i><a href="#" class="link">Cart</a>
                    </li>
                </ul>
            </div>
            <div class="nav-menu-btn">
                <i class="bx bx-menu" onclick="myMenuFunction()"></i>
            </div>
            <div class="nav-button">
                <a href="../signin_login/logIn.php"><i class="fa-solid fa-user" style="color: #fafafa;"></i></a>
            </div>
        </nav>
    </div>
    <div class="header">
        <h1 class="header-title">T&C</h1>
        <p class="header-desc1">Terms and Conditions</p>
		<p class="header-desc2">Welcome to Garden Groove. Please read these terms and conditions carefully 
		before using our <br>website. By accessing or using our website, you agree to be bound by these terms 
		and conditions.</p>
    </div>
	
		<div class="tc">
			<ol>
                <li style="margin-top: 10px;"><span>Acceptance of Terms</span></li>
                <ul>
                    <li>By using our website, you agree to comply with and be bound 
					by these terms and conditions. If you do not agree to these terms, 
					please do not use our website.</li>
                </ul>
                <li style="margin-top: 10px;"><span>Products and Services</span></li>
                <ul>
                    <li>Our website offers a variety of plants and related products 
					for sale. We strive to provide accurate and up-to-date information 
					about our products, including pricing and availability. However, 
					we reserve the right to correct any errors or inaccuracies and to 
					change or update information at any time without prior notice.</li>
                </ul>
                <li style="margin-top: 10px;"><span>Order and Payment</span></li>
                <ul>
                    <li><strong>Ordering:</strong> When you place an order on our website, you are 
					making an offer to purchase the products in your cart. We 
					reserve the right to accept or decline your order.</li>
                    <li><strong>Payment:</strong> We accept Paypal, GCash, Credit and Debit Cards. Payment must be made in full 
					before we dispatch the products. All transactions are secure, and your payment 
					information is encrypted.</li>
                </ul>
                <li style="margin-top: 10px;"><span>Shipping and Delivery</span></li>
                <ul>
                    <li><strong>Shipping:</strong> Shipping costs and estimated delivery times will be provided during the checkout process.</li>
                    <li><strong>Delivery:</strong> While we strive to ensure timely delivery, we cannot guarantee delivery dates. Delays may 
					occur due to unforeseen circumstances. If your order is significantly delayed, we will notify you.</li>
                </ul>
                <li style="margin-top: 10px;"><span>Changes to Terms & Conditions</span></li>
                <ul>
                    <li>We reserve the right to update, change, or replace any part of these terms and conditions at our discretion. 
					It is your responsibility to check our website periodically for changes. Your continued use of or access to our 
					website following the posting of any changes constitutes acceptance of those changes.</li>
                </ul>
            </ol>
		</div>

	
	<footer>
		<p>Copyright &#169; 2023 Jecca Claire. All Rights Reserved.</p>
	</footer>
</body>
</html>