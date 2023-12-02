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
            min-height: 94vh;
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
		
		h2{
			border-bottom: solid #000 1px;
			text-align: center;
		}
		
		h1{
			border-bottom: solid #000 1px;
		}

        .cart-container {
            width: 90%;
            display: flex; 
            margin-top: 110px;
        }
		

        .cart-wrapper {
            display: flex;
            flex-direction: column;
            flex-grow: 2;
            margin-right: 50px;
			margin-left: 70px;
        }

         .cart-item {
			margin-top: 20px;
			width: 100%;
			margin-bottom: 20px;
			display: flex;
			align-items: center;
			justify-content: space-between; 
		}

		.cart-item-image {
			margin-left: 30px;
			max-width: 100px;
			margin-right: 20px; 
		}

		.cart-item p {
			flex-grow: 1; 
			color: #000;
			margin-right: 20px;
		}

		.quantity {
			display: flex;
			align-items: center;
			margin-left: 30px;
		}

		.quantity span {
			display: inline-block;
			width: 25px;
			height: 25px;
			background-color: #1A5D1A;
			border-radius: 20%;
			font-weight: 900;
			color: #fff;
			cursor: pointer;
			text-align: center;
			line-height: 25px;
			margin-right: 5px;
		}
		
		 .quantity span:nth-child(2) {
            background-color: transparent;
            color: #fff;
            cursor: auto;
        }

		.cart-item input {
			width: 50px; 
			margin-right: 20px; 
		}

		.cart-item p:last-child {
			margin-left: 10px;
		}

        .cart-summary {
            flex-grow: 1;
			margin-top: 40px;
        }

        .cart-totals {
            border-left: 1px solid #000;
            width: 90%;
            padding: 20px;
            margin-top: 20px;
            position: sticky;
            top: 0;
            align-self: flex-start;
        }

        .total-line {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
		
		.total-line p{
			margin-top: 10px;
		}

        .checkout {
			margin-top: 20px;
			margin-left: 50px;
            background-color: #1A5D1A;
            color: #fff;
            padding: 10px 20px;
            border: solid #fff 1px;
            border-radius: 30px;
            cursor: pointer;
        }

        .checkout:hover {
            opacity: 0.8;
        }
		
		.cart-item-image img {
			max-width: 100px;
			max-height: 100px;
			width: auto;
			height: auto;
			border-radius: 5px;
		}
		
		.remove-item {
			background-color: transparent;
			color: #000;
			padding: 10px 5px;
			border: none;
			cursor: pointer;
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

         <div class="cart-container">
            <div class="cart-wrapper">
                <h1>Your Cart</h1>
                <div class="cart-items" id="cartItemsContainer">
                    <!-- Cart items will be added here -->
                </div>
            </div>
            <div class="cart-summary">
                <div class="cart-totals">
                    <h2>Cart Total</h2>
                    <div class="total-line">
                        <p>Subtotal</p>
						<p class="subtotal-value">₱0.00</p>
                    </div>
                    <div class="total-line">
                        <p>Shipping</p>
                        <p>Free</p>
                    </div>
                    <div class="total-line">
                       <p><strong>Total</strong></p>
						<p class="total-value">₱0.00</p>
                    </div>
                    <a href="../checkout/checkout.php"><button class="checkout">Proceed to Checkout <i class="fa-solid fa-arrow-right"></i></button></a>
                </div>
            </div>
        </div>
    </div>
	<footer>
		<p>Copyright &#169; 2023 Jecca Claire. All Rights Reserved.</p>
	</footer>

    <script>
		document.addEventListener('DOMContentLoaded', function () {
		const cartWrapper = document.getElementById('cartItemsContainer');
		const subtotalElement = document.querySelector('.subtotal-value');
		const totalElement = document.querySelector('.total-value');

		// Get the cart items from localStorage
		const cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

		// Display cart items
		function displayCartItems() {
			cartWrapper.innerHTML = ''; // Clear existing items

			let subtotal = 0;

			cartItems.forEach((item, index) => {
				const cartItem = document.createElement('div');
				cartItem.classList.add('cart-item');

				const itemPrice = parseFloat(item.price.replace('₱', ''));

				subtotal += itemPrice * (item.quantity || 1);

				cartItem.innerHTML = `
					<button class="remove-item" data-index="${index}"><i class="fa-solid fa-x"></i></button>
					<div class="cart-item-image">
						<img src="${item.image}" alt="Product Image">
					</div>
					<div class="cart-item-details">
						<p class="item-name">${item.name}</p>
					</div>
					<div class="quantity">
						<span class="minus" onclick="updateQuantity(${index}, -1)">-</span>
						<span class="quantity-value" style="color: #000;">${item.quantity || 1}</span>
						<span class="plus" onclick="updateQuantity(${index}, 1)">+</span>
					</div>
					<p class="item-total" style="margin-left: 30px;">₱${(itemPrice * (item.quantity || 1)).toFixed(2)}</p>
				`;

				cartWrapper.appendChild(cartItem);

				const removeButton = cartItem.querySelector('.remove-item');
				removeButton.addEventListener('click', function () {
					// Get the index of the item to remove
					const removeIndex = parseInt(this.getAttribute('data-index'));
					// Remove the item from the cartItems array
					cartItems.splice(removeIndex, 1);
					// Update localStorage with the modified cartItems array
					localStorage.setItem('cartItems', JSON.stringify(cartItems));
					// Refresh the displayed cart items
					displayCartItems();
					// Recalculate subtotal and total
					updateSubtotalAndTotal();
				});
			});

			// Update subtotal and total
			updateSubtotalAndTotal();
		}

		function updateQuantity(index, change) {
			const item = cartItems[index];
			if (!item.quantity) {
				item.quantity = 1;
			}
			item.quantity += change;

			// Update localStorage with the modified cartItems array
			localStorage.setItem('cartItems', JSON.stringify(cartItems));

			// Refresh the displayed cart items
			displayCartItems();

			// Recalculate subtotal and total
			updateSubtotalAndTotal();
		}

		function updateSubtotalAndTotal() {
			const shippingCost = 0; // Assuming free shipping
			const subtotal = calculateSubtotal();
			const total = subtotal + shippingCost;

			// Display the updated values
			subtotalElement.textContent = `₱${subtotal.toFixed(2)}`;
			totalElement.textContent = `₱${total.toFixed(2)}`;
		}

		function calculateSubtotal() {
			return cartItems.reduce((sum, item) => {
				const itemPrice = parseFloat(item.price.replace('₱', ''));
				const itemQuantity = item.quantity || 1;
				return sum + itemPrice * itemQuantity;
			}, 0);
		}

		// Event delegation for quantity buttons
		cartWrapper.addEventListener('click', function (event) {
			const target = event.target;

			if (target.classList.contains('minus') || target.classList.contains('plus')) {
				const index = parseInt(target.closest('.cart-item').querySelector('.remove-item').getAttribute('data-index'));
				const change = target.classList.contains('minus') ? -1 : 1;

				updateQuantity(index, change);
			}
		});

		// Initial display of cart items
		displayCartItems();
	});
</script>
</body>
</html>