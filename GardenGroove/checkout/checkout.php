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
		
		.container{
			display: flex;
			justify-content: center;
			align-items: center;
			padding: 20px;
			margin-top: 75px;
		}

		.container form .row{
			display: flex;
			flex-wrap: wrap;
			gap: 15px;
		}

		.container form .row .col{
			flex: 1 1 250px;
		}

		.container form .row .col .title{
			font-size: 20px;
			color: #333;
			padding-bottom: 5px;
			text-transform: uppercase;
		}

		.container form .row .col .inputBox{
			margin: 15px 0;
		}

		.container form .row .col .inputBox span{
			margin-bottom: 10px;
			display: block;
		}

		.container form .row .col .inputBox input{
			width: 100%;
			border: 1px solid #ccc;
			padding: 10px 15px;
			font-size: 15px;
			text-transform: none;
		}

		.container form .row .col .inputBox input:focus{
			border: 1px solid #000;
		}

		.container form .row .col .flex{
			display: flex;
			gap: 15px;
		}

		.container form .row .col .flex .inputBox{
			margin-top: 5px;
		}

		.container form .row .col .inputBox img{
			height: 34px;
			margin-top: 5px;
			filter: drop-shadow(0 0 1px #000);
		}

		.submit {
            font-size: 15px;
            font-weight: 700;
            color: #fff;
            height: 45px;
            width: 100%;
            border: none;
            border-radius: 30px;
            outline: none;
            background: #1A5D1A;
            cursor: pointer;
            transition: .3s ease-in-out;
            margin-top: 20px;
        }

        .submit:hover {
            background-color: #557A46;
            color: #fff;
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
                    <li><i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i><a href="../cart/cart.php" class="link">Cart</a>
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
		
	<div class="container">
    <form action="">
        <div class="row">
            <div class="col">
                <h3 class="title">billing address</h3>
                <div class="inputBox">
                    <span>Full Name :</span>
                    <input type="text" placeholder="Fname...">
                </div>
                <div class="inputBox">
                    <span>Email :</span>
                    <input type="email" placeholder="example@example.com">
                </div>
                <div class="inputBox">
                    <span>Address :</span>
                    <input type="text" placeholder="Room - Street - Locality">
                </div>
                <div class="inputBox">
                    <span>City :</span>
                    <input type="text" placeholder="...">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>State :</span>
                        <input type="text" placeholder="...">
                    </div>
                    <div class="inputBox">
                        <span>Zip code :</span>
                        <input type="text" placeholder="...">
                    </div>
                </div>
            </div>

            <div class="col">
                <h3 class="title">payment</h3>
                <div class="inputBox">
                    <span>Cards Accepted :</span>
                    <img src="../img/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>Name:</span>
                    <input type="text" placeholder="...">
                </div>
                <div class="inputBox">
                    <span>Credit Card Number :</span>
                    <input type="number" placeholder="...">
                </div>
                <div class="inputBox">
                    <span>Exp Month :</span>
                    <input type="text" placeholder="...">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>Exp Year :</span>
                        <input type="number" placeholder="...">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" placeholder="...">
                    </div>
                </div>
            </div>
        </div>
        <input type="submit" value="Checkout" class="submit">
    </form>
</div>
</body>
</html>