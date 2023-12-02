<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "user_db");

// Fetch products from the database
$query = "SELECT * FROM products";
$result = mysqli_query($connect, $query);

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
            justify-content: center;
            align-items: center;
			flex-direction: column;
            min-height: 100vh;
            background: #fff;
        }

        .nav {
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
            margin: 5px 3px;
        }

        .link:hover,
        .active {
            border-bottom: 2px solid #fff;
        }

        .section__title-center{
            text-align: center;
            margin-top: 30px;
            line-height: 140%;
            font-size: 25px;
        }

        .product__description{
			margin-bottom: 20px;
            text-align: center;
            font-size: 15px;
        }

         .product__container {
			display: flex;
			flex-wrap: wrap;
			gap: 2rem;
			justify-content: center;
		}

		.product__card {
			position: relative;
			width: calc(20% - 1rem);
			margin-bottom: 2rem;
			text-align: center;
			box-sizing: border-box;
		}

        .product__img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            transition: .3s;
			border: 1px solid #000;
			border-radius: 100px;
			box-shadow: 5px 10px #314f33;
        }

        .product__title,
        .product__price {
			margin-top: 10px;
            font-size: 15px;
            font-weight: 600;
            color: #000;
            margin-bottom: 0.25rem;
            
        }
        
        .product__card:hover .product__img {
            transform: translateY(-.5rem);
        }

        .p_btn {
            text-decoration: none;
            display: inline-block;
            padding: 10px 20px;
            color: #fff;
            font-weight: 700;
            background-color: #1A5D1A;
            border: solid #1A5D1A 1px;
            border-radius: 30px;
            cursor: pointer;
        }

        .p_btn:hover {
            background-color: #557A46;
            color: #fff;
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
                <a href="../signin_login/logIn.php"><i class="fa-solid fa-user" style="color: #fafafa;"></i></a>
            </div>
        </nav>

        <div class="product section container" id="products">
            <h2 class="section__title-center">Check out our products</h2>
            <p class="product__description">
                Here are some plants from our shop, all are in excellent <br>shape and have a long life span.
                Buy and enjoy the best quality.
            </p>

             <div class="product__container">
                <?php
                // Display products dynamically
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="product__card" data-product-id="<?php echo $row['id']; ?>">
						<img src="<?php echo $row["image"]; ?>" alt="Plant Image" class="product__img">
						<h3 class="product__title" name="hidden_name"><?php echo $row["name"]; ?></h3>
						<p class="product__price" name="hidden_price">₱<?php echo $row["price"]; ?></p>
						<a href="?id=<?php echo $row['id']; ?>&add_to_cart=1" class="p_btn" name="add_to_cart">Add to Cart <i class="fa-solid fa-cart-shopping"></i></a>
					</div>
                <?php
                }
                ?>
            </div>
        </div>
        <footer>
            <p>Copyright &#169; 2023 Jecca Claire. All Rights Reserved.</p>
        </footer>
    </div>
	<script>
		document.addEventListener('DOMContentLoaded', function () {
		const addToCartButtons = document.querySelectorAll('.p_btn');

		addToCartButtons.forEach(button => {
			button.addEventListener('click', function (event) {
				event.preventDefault();

				const productCard = event.target.closest('.product__card');
				const productId = productCard.getAttribute('data-product-id'); // Add this line
				const productName = productCard.querySelector('.product__title').innerText;
				const productPrice = productCard.querySelector('.product__price').innerText;
				const productImage = productCard.querySelector('.product__img').src; // Get the image URL

				// Get the existing cart items from localStorage
				const existingCartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

				// Check if the item is already in the cart
				const existingItem = existingCartItems.find(item => item.id === productId);

				if (existingItem) {
					// If the item is already in the cart, update the quantity
					existingItem.quantity = (existingItem.quantity || 1) + 1;
				} else {
					// If the item is not in the cart, add a new item
					const newItem = {
						id: productId,
						name: productName,
						price: productPrice,
						image: productImage, // Include the image URL
						quantity: 1,
					};
					existingCartItems.push(newItem);
				}

				// Save the updated cart items back to localStorage
				localStorage.setItem('cartItems', JSON.stringify(existingCartItems));

				// Optionally, redirect to the cart page
				window.location.href = '../cart/cart.php';
			});
		});
	});
</script>
</body>
</html>