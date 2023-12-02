<?php
session_start();
require_once "database.php";

if(isset($_POST["submit"])){
    $lastname = $_POST["lastname"];
    $firstname = $_POST["firstname"];
    $mi = $_POST["mi"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $cell_number = $_POST["cell_number"];
    $address = $_POST["address"];

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $errors = array();
    if(empty($lastname) || empty($firstname) || empty($mi) || empty($username) || empty($password) || empty($confirm_password) || empty($cell_number) || empty($address)){
        array_push($errors, "All fields are required");
    }

    if(strlen($password) < 8) {
        array_push($errors, "Password must be at least 8 characters long");
    }

    if($password !== $confirm_password) {
        array_push($errors, "Password does not match");
    }
	
	$_SESSION['user_info'] = [
    'lastname' => $lastname,
    'firstname' => $firstname,
    'mi' => $mi,
    'username' => $username,
    'cell_number' => $cell_number,
    'address' => $address,
];

    // Check if the username already exists
    $sql = "SELECT * FROM info WHERE username = ?";
    $stmt = mysqli_stmt_init($conn);
    if(mysqli_stmt_prepare($stmt, $sql)){
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if(mysqli_num_rows($result) > 0){
            array_push($errors, "Username already exists");
        }
    }

    if(count($errors) > 0) {
        foreach($errors as $error) {
			
        }
    } else {
        // Insert user data into the database
        $sql = "INSERT INTO info (lastname, firstname, mi, username, password, cell_number, address) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if(mysqli_stmt_prepare($stmt, $sql)) {
            mysqli_stmt_bind_param($stmt, "sssssss", $lastname, $firstname, $mi, $username, $passwordHash, $cell_number, $address);
            mysqli_stmt_execute($stmt);
            echo "<div>You are registered successfully.</div>";
            header("Location: ../index.php");
            die();
        } else {
            die("Something went wrong");
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
            top: 55%;
            transform: translateY(-50%);
            width: 500px;
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
            padding: 5px 0;
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
            justify-content: space-between;
        }

        header{
            color: #fff;
            font-size: 30px;
            text-align: center;
            padding: 10px 0 10px 0;
        }

        .input-field {
            font-size: 15px;
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
            height: 40px;
            width: 100%;
            padding: 0 10px 0 45px;
            border: none;
            border-radius: 30px;
            outline: none;
            transition: .2s ease;
            margin-top: 20px;
        }

        .input-box1 .input-field{
            font-size: 15px;
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
            height: 40px;
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

        .submit {
            font-size: 15px;
            font-weight: 500;
            color: #000;
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
        .register-container, .login-container{
            width: 100%;
            padding: 0 20px;
        }
        .register-container .two-forms{
            flex-direction: column;
            gap: 0;
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
            <div class="top">
                <span>Have an account? <a href="./logIn.php" onclick="login()">Login</a></span>
                <header>Sign Up</header>
            </div>
			<?php
				if (!empty($error)) {
					echo "<div class='error'>$error</div>";
				}
			?>
             <form action="signUp.php" method="post">
            <div class="two-forms">
                <div class="input-box1">
                    <input type="text" class="input-field" name="lastname" placeholder="Lastname">
                </div>
                <div class="input-box1">
                    <input type="text" class="input-field" name="firstname" placeholder="Firstname">
                </div>
                <div class="input-box1">
                    <input type="text" class="input-field" name="mi" placeholder="M.I">
                </div>
                <div class="input-box1">
                    <input type="text" class="input-field" name="username" placeholder="Username">
                </div>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" name="password" placeholder="Password">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" name="confirm_password" placeholder="Re-type Password">
            </div>
            <div class="input-box">
                <input type="text" class="input-field" name="cell_number" placeholder="Cell #">
            </div>
            <div class="input-box">
                <input type="text" class="input-field" name="address" placeholder="Address">
            </div>
            <div class="input-box">
                <input type="submit" class="submit" name="submit" value="Register">
            </div>
        </form>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="register-check">
                    <label for="register-check"> Remember Me</label>
                </div>
            </div>	
        </div>
	</div>
	<footer>
		<p>Copyright &#169; 2023 Jecca Claire. All Rights Reserved.</p>
	</footer>
</body>
</html>