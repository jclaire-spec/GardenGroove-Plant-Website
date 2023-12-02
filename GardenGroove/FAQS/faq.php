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

        .header-desc{
            font-size: 14px;
            letter-spacing: 1;
            text-align: center;
        }
        
        .search{
            width: 50%;
            height: 50px;
            background-color: #fff;
            margin-top: 2%;
            border-radius: 30px;
            display: flex;
            justify-content: space-between;
            padding: 5px;
        }

        .search input{
            width: 100%;
            height: 100%;
            padding: 1% 2%;
            background: transparent;
            border: none;
            outline: none;
        }

        .submit {
            font-size: 15px;
            font-weight: 500;
            color: #fff;
            height: 100%;
            width: 20%;
            border: none;
            border-radius: 30px;
            outline: none;
            background: #314f33;
            cursor: pointer;
            transition: .3s ease-in-out;
        }

        .submit:hover {
            background: rgba(0, 0, 0, 0.7);
        }

        .faq{
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            padding: 3%;
        }

        .faq-name{
            flex: 0.5;
            padding: 2% 2% 0 0;
        }

        .faq-header{
            padding: 1% 0 0 0;
            font-size: 35px;
            letter-spacing: 2;
        }

        .faq-image{
            width: 100%;
            max-width: 400px;
        }

        .faq-box{
            flex: 1;
            min-width: 330px;
            padding: 4% 0 4% 4%;
            border-left: 2px solid #314f33;
        }

        .faq-wrapper{
            width: 100%;
            padding: 1.3rem;
            border-bottom: 1px solid #000;
        }

        .faq-title{
            display: block;
            position: relative;
            width: 100%;
            letter-spacing: 1.2;
            font-size: 24px;
            font-weight: 600;
            color: #314f33;
        }

        .faq-title:after{
            width: 10px;
            height: 10px;
            content: "";
            float: right;
            border-style: solid;
            border-width: 2px 2px 0 0;
            transform: rotate(135deg);
            transition: 0.4s ease-in-out;
        }

        .faq-detail{
            line-height: 1.5;
            letter-spacing: 1;
            max-height: 0;
            overflow: hidden;
            transition: 0.3s ease-in-out;
            font-size: 16px;
        }

        .faq-trigger{
            display: none;
        }

        .faq-trigger:checked + .faq-title + .faq-detail{
            max-height: 100px;
        }

        .faq-trigger:checked + .faq-title:after{
            transform: rotate(-45deg);
            transition: 0.4s ease-in-out;
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
        <h1 class="header-title">FAQ</h1>
        <p class="header-desc">Frequently Ask Questions</p>
        <div class="search">
            <input type="text" placeholder="Search...">
            <button class="submit">Search</button>
        </div>
    </div>

    <div class="faq">
        <div class="faq-name">
            <h1 class="faq-header">Have <br> Questions?</h1>
            <img class="faq-image" src="../img/faq.png"> 
        </div>
        <div class="faq-box">
            <div class="faq-wrapper">
                <input type="checkbox" class="faq-trigger" id="faq-trigger-1">
                <label class="faq-title" for="faq-trigger-1">What types of small plants do you offer for outdoor and indoor decorations?</label>
                <div class="faq-detail">
                    <p>Our collection includes a variety of small plants suitable for both outdoor 
                        garden spaces and indoor décor. Explore our catalog to find the perfect 
                        plants for your needs.</p>
                </div>
            </div>
            <div class="faq-wrapper">
                <input type="checkbox" class="faq-trigger" id="faq-trigger-2">
                <label class="faq-title" for="faq-trigger-2"> How do I care for small plants in indoor environments?</label>
                <div class="faq-detail">
                    <p>Indoor plant care is crucial for their well-being. Each product page provides 
                        care instructions, and you can refer to our Indoor Plant Care Guide for additional 
                        tips on creating a thriving indoor garden.</p>
                </div>
            </div>
            <div class="faq-wrapper">
                <input type="checkbox" class="faq-trigger" id="faq-trigger-3">
                <label class="faq-title" for="faq-trigger-3">How often should I water my small plants?</label>
                <div class="faq-detail">
                    <p>Watering frequency varies by plant type. Detailed watering instructions are provided 
                        on each product page. Our general advice is to allow the soil to dry slightly between 
                        waterings to prevent overwatering.</p>
                </div>
            </div>
            <div class="faq-wrapper">
                <input type="checkbox" class="faq-trigger" id="faq-trigger-4">
                <label class="faq-title" for="faq-trigger-4">Can I change or cancel my order after placing it?</label>
                <div class="faq-detail">
                    <p>We process orders quickly, but if you need to make changes, contact our customer support 
                        immediately. We'll do our best to accommodate your request if the order hasn't been shipped 
                        yet.</p>
                </div>
            </div>
            <div class="faq-wrapper">
                <input type="checkbox" class="faq-trigger" id="faq-trigger-5">
                <label class="faq-title" for="faq-trigger-5">What payment methods do you accept?</label>
                <div class="faq-detail">
                    <p>We accept Paypal, GCash, Credit and Debit Cards for a seamless shopping experience. 
                        Your payment information is securely processed to ensure a safe transaction.</p>
                </div>
            </div>
        </div>
    </div>
	<footer>
		<p>Copyright &#169; 2023 Jecca Claire. All Rights Reserved.</p>
	</footer>
</body>
</html>