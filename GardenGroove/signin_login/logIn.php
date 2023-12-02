<?php
session_start();
if(isset($_SESSION["user"])){
	header("Location: loginuser.php");
}

$errorMessage = "";

if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    require_once "database.php";
    $sql = "SELECT * FROM info WHERE username = ?";
    $stmt = mysqli_stmt_init($conn);
    
    if(mysqli_stmt_prepare($stmt, $sql)){
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $user = mysqli_fetch_assoc($result);
		

        if ($user) {
            if (password_verify($password, $user["password"])) {
                // Set user information in the session
                $_SESSION["user_info"] = [
                    'lastname' => $user['lastname'],
                    'firstname' => $user['firstname'],
                    'mi' => $user['mi'],
                    'username' => $user['username'],
                    'cell_number' => $user['cell_number'],
                    'address' => $user['address'],
                ];

                // Redirect to loginuser.php
                header("Location: loginuser.php");
                die();
            } else {
                $errorMessage = "Password does not match!";
            }
        } else {
            $errorMessage = "Username does not exist!";
        }
    }
}
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

        body {
            background-image: url("../img/bg2.jpg");
            background-size: cover;
            height: 100%;
            width: 100%;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .wrapper {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: rgba(39, 39, 39, 0.4);
        }

        .wrapper p {
            font-family: 'Roboto', sans-serif;
            font-size: 50px;
            font-weight: bolder;
            color: #fff;
            text-align: center;
        }

        .wrapper .shop {
            position: absolute;
            margin-top: 10%;
            font-family: 'Poppins', sans-serif;
            width: 130px;
            height: 40px;
            font-weight: bolder;
            background: transparent;
            border: solid #fff 1px;
            border-radius: 30px;
            cursor: pointer;
            transition: .3s ease;
            left: 50%;
            transform: translateX(-50%);
        }

        .shop:hover {
            background: #7A9D54;
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

        .form-box {
            position: absolute;
            top: 30%;
            transform: translateY(-50%);
            margin-right: 100px;
            width: 400px;
        }

        .login-container {
            position: absolute;
            left: 4px;
            width: 500px;
            display: flex;
            flex-direction: column;
            transition: .5s ease-in-out;
        }

        .top span {
            color: #fff;
            font-size: small;
            padding: 10px 0;
            display: flex;
            justify-content: center;
        }

        .top span a {
            font-weight: 500;
            color: #fff;
            margin-left: 5px;
        }

        .two-forms {
            display: flex;
            gap: 10px;
        }

        header{
            color: #fff;
            font-size: 30px;
            text-align: center;
            padding: 10px 0 30px 0;
        }

        .input-field {
            font-size: 15px;
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
            height: 50px;
            width: 100%;
            padding: 0 10px 0 45px;
            border: none;
            border-radius: 30px;
            outline: none;
            transition: .2s ease;
            margin-top: 20px;
        }

        .input-field:hover,
        .input-field:focus {
            background: rgba(255, 255, 255, 0.25);
        }

        ::-webkit-input-placeholder {
            color: #fff;
        }

        .input-box i {
            position: relative;
            top: -35px;
            left: 17px;
            color: #fff;
        }

        .submit {
            font-size: 15px;
            font-weight: 500;
            color: black;
            height: 45px;
            width: 100%;
            border: none;
            border-radius: 30px;
            outline: none;
            background: rgba(255, 255, 255, 0.7);
            cursor: pointer;
            transition: .3s ease-in-out;
            margin-top: 20px;
        }

        .submit:hover {
            background: rgba(255, 255, 255, 0.5);
            box-shadow: 1px 5px 7px 1px rgba(0, 0, 0, 0.2);
        }

        .two-col {
            display: flex;
            justify-content: space-between;
            color: #fff;
            font-size: small;
            margin-top: 10px;
        }

        .two-col .one {
            display: flex;
            gap: 5px;
        }

        .two label a {
            text-decoration: none;
            color: #fff;
        }

        .two label a:hover {
            text-decoration: underline;
        }
		
		.error{
			text-align: center;
			color: red;
			border: 5px;
			font-family: Arial, Helvetica, sans-serif;
			font-size: 13px;
		}
		
		footer {
			background: #000;
			color: #fff;
			padding: 10px;
			position: fixed;
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
                <a href="./logIn.php"><i class="fa-solid fa-user" style="color: #ffffff;"></i></a>
            </div>
        </nav>

        <div class="form-box">
            <div class="login-container">
                <div class="top">
                    <span>Don't have an account? <a href="./signUp.php" onclick="register()">Sign Up</a></span>
                    <header>Login</header>
                </div>
				<?php
					if (!empty($errorMessage)) {
						echo "<div class='error'>$errorMessage</div>";
					}
				?>
				<!---username: jecca23 password: jeccapepe123-->
                <form action="logIn.php" method="post">
            <div class="input-box">
                <input type="text" class="input-field" name="username" placeholder="Username">
                <i class="bx bx-user"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" name="password" placeholder="Password">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" name="submit" value="Sign In">
            </div>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="login-check">
                    <label for="login-check"> Remember Me</label>
                </div>
                <div class="two">
                    <label><a href="#">Forgot password?</a></label>
                </div>
            </div>
        </form>
            </div>
        </div>
    </div>
	<footer>
		<p>Copyright &#169; 2023 Jecca Claire. All Rights Reserved.</p>
	</footer>
</body>
</html>