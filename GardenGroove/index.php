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
		
		.main{
			flex: 1;
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

        .section {
            padding: 5.5rem 0 1rem;
        }

        .section__title,
        .section__title-center {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            line-height: 140%;
        }

        .section__title-center {
            text-align: center;
        }

        .container {
            max-width: 968px;
            margin-left: 1.5rem;
            margin-right: 1.5rem;
        }

        .grid {
            display: grid;
        }

        .home {
            padding: 3.0rem 0 2rem;
        }

        .home__container {
			margin-left: 60px;
            position: relative;
            row-gap: 2rem;
            align-items: center;
            display: grid;
            grid-template-columns: 1fr 1fr;
        }

        .home__img {
			margin-top: 30px;
            width: 70%;
            height: 90%;
            order: 1;
			margin-left: 10rem;
            justify-self: center;
        }

        .home__title {
			color: #000;
            font-size: 3rem;
            line-height: 140%;
            margin-bottom: 1rem;
			margin-left: 80px;
        }

        .home__description {
			color: #000;
            margin-bottom: 2.5rem;
			margin-left: 80px;
            opacity: 0.7;
        }

        .home__social {
            position: absolute;
            top: 2rem;
            right: -8rem;
            display: grid;
            justify-items: center;
            row-gap: 3.8rem;
            top: 30%;
        }

        .home__social-follow {
            font-weight: 500;
            font-size: .75rem;
            color: #000;
            position: relative;
            transform: rotate(90deg);
        }

        .home__social-follow::after {
            content: '';
            position: absolute;
            width: 1rem;
            height: 2px;
            background-color: #000;
            right: -45%;
            top: 50%;
			color: #000;
        }

        .home__social-links {
            display: inline-flex;
            flex-direction: column;
            row-gap: .25rem;
        }

        .home__social-link {
            font-size: 1rem;
            color: #000;
            transition: .3s;
        }

        .home__social-link:hover {
            transform: translateX(.25rem);
        }

        .button {
			margin-left: 80px;
            text-align: center;
            justify-content: center;
            text-decoration: none;
            width: 130px;
            height: 40px;
            color: #fff;
            font-weight: 700;
            background: #314f33;
            border: solid #000 1px;
            border-radius: 30px;
            cursor: pointer;
            transition: .3s ease;
        }

        .button:hover {
            background-color: #A3B763;
        }

        .button__icon {
            transition: .3s;
        }

        .button:hover .button__icon {
            transform: translateX(.25rem);
        }

        .button--flex {
            display: inline-flex;
            align-items: center;
            column-gap: .5rem;
        }

        .button--link {
            color: #fff;
            font-weight: 500;
        }

        .button--link:hover .button__icon {
            transform: translateX(.25rem);
        }
		
		.selling_container{
			margin-top: 10px;
			width: 100%;
			display: grid;
			padding: 80px 10px 60px;
			grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
			grid-gap: 0;
		}
		
		.selling-h2{
			font-size: 32px;
			margin-left: 30px;
		}
		
		
		.selling-p{
			margin-top: 15px;
			margin-bottom: 25px;
			padding: 10px 30px;
		}
		
		.selling-item img{
			width: 60%;
            height: auto;
            border-radius: 10px;
            transition: .3s;
			background: #d0d7d0;
			border: solid 1px #000;
			border-radius: 60px;
			box-shadow: 5px 10px #314f33;
		}
		
		.selling-item:hover img {
            transform: translateY(-.5rem);
        }
		
		.item-title{
			margin-top: 20px;
		}
				
        .reviews {
            width: 80%;
            margin: auto;
            padding-top: 60px;
            text-align: center;
        }
		
		.reviews h1{
			font-size: 30px;
			color: #000;
		}
		
		.reviews p{
			margin-bottom: 20px;
			color: #000;
			opacity: 0.8;
			padding: 0;
			text-align: center;
		}
		
		.col h3{
			margin-top: 10px;
			margin-bottom: 10px;
			text-align: left;
			color: #000;
		}
		
		.row p{
			padding: 0;
			text-align: justify;
			color: #000;
		}
        .row {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .col {
            flex-basis: 45%;
            border-radius: 10px;
            margin-bottom: 5%;
            text-align: left;
            background: #d0d7d0;
            padding: 25px;
            cursor: pointer;
            display: flex;
			box-shadow: 5px 10px #314f33;
        }

        .col img {
            height: 50px;
            margin-left: 5px;
            margin-right: 30px;
            border-radius: 50%;
        }
		
		.care {
			width: 80%;
			margin: auto;
			text-align: center;
			padding-top: 50px;
		}

		.care-row {
			display: flex;
			justify-content: space-around;
			flex-wrap: wrap;
		}

		.care-col {
			flex-basis: 30%; 
			border-radius: 10px;
			margin-bottom: 5%;
			text-align: left;
			cursor: pointer;
			display: flex;
			position: relative;
			overflow: hidden;
			box-shadow: 5px 10px #314f33;
		}

		.care-col img {
			width: 120%;
			height: 120%;
			object-fit: cover;
			border-radius: 10px;
		}
		
		.care h1{
			font-size: 30px;
			color: #000;
		}
		
		.care p{
			margin-bottom: 20px;
			opacity: 0.8;
			padding: 0;
			color: #000;
		}
		
		.overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .care-col:hover .overlay {
            opacity: 1;
        }

        .overlay .text {
			font-size: 15px;
			padding: 10px;
			text-align: center;
            color: #fff;
        }

		
		footer {
			margin-top: 30px;
			background: #000;
			color: #fff;
			padding: 20px;
			bottom: 0;
			width: 100%;
		}
		
		footer .box-container {
			display: grid;
			place-items: center;
			border-bottom: solid 1px #A3B763;
			grid-template-columns: repeat(auto-fit, minmax(15rem, 1fr));
			gap: 1rem;
		}
		
		footer .box-container .box h3{
			color: #fff;
			text-decoration: none;
			font-size: 20px;
			padding-bottom: 1rem;
		}
		
		footer .box-container .box a{
			opacity: 0.7;
			color: #fff;
			text-decoration: none;
			font-size: 15px;
			padding-bottom: 1rem;
			display: block;
		}
		
		footer .box-container .box i{
			color: #fff;
			padding-right: .4rem;
		}
	

        footer p {
			margin-top: 20px;
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
                    <li><a href="#" class="link">Home</a></li>
                    <li><i class="fa-brands fa-pagelines" style="color: #ffffff;"></i><a href="./shop/shop.php" class="link">Shop</a></li>
                    <li><i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i><a href="./cart/cart.php" class="link">Cart</a></li>
                </ul>
            </div>
            <div class="nav-menu-btn">
                <i class="bx bx-menu" onclick="myMenuFunction()"></i>
            </div>
			
            <div class="nav-button">
                <a href="./signin_login/logIn.php"><i class="fa-solid fa-user" style="color: #fafafa;"></i></a>
			</div>
        </nav>

        <main class="main">
            <section class="home" id="home">
                <div class="home__container container grid">
                    <img src="./img/home.png" alt="" class="home__img">

                    <div class="home__data">
                        <h1 class="home__title">Rooted in Nature, <br>Flourishing in Style</h1>
                        <p class="home__description">
                            Transform your space with a touch of green magic our petite plants pack a powerful
                            punch of charm and wellness. Elevate your surroundings, one tiny wonder at a time!
                        </p>
                        <a href="./shop/shop.php" class="button button--flex">Shop Now<i class="fa-solid fa-arrow-right"></i></a>
                    </div>

                    <div class="home__social">
                        <span class="home__social-follow">Follow Us</span>

                        <div class="home__social-links">
                            <a href="https://github.com/jclaire-spec/PORTFOLIO/tree/1d13072396b9ebccbf8a62bd682d02ee0848dff6/Portfolio" target="_blank" class="home__social-link">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                            <a href="https://github.com/jclaire-spec/PORTFOLIO/tree/1d13072396b9ebccbf8a62bd682d02ee0848dff6/Portfolio" target="_blank" class="home__social-link">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="https://github.com/jclaire-spec/PORTFOLIO/tree/1d13072396b9ebccbf8a62bd682d02ee0848dff6/Portfolio" target="_blank" class="home__social-link">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
			
			<section class="best-sell">
				<div class="selling_container">
				<div class="selling-item">
				<h2 class="selling-h2">Best Selling Plants</h2>
				<p class="selling-p">"Elevate your space with our best-selling plants—lush, 
				vibrant, and easy to care for. Transform any environment into a haven of 
				natural beauty and well-being."</p>
				<a href="./shop/shop.php" class="button button--flex">See More<i class="fa-solid fa-arrow-right"></i></a>
				</div>
				<div class="selling-item">
					<img src="./shop/img/plant1.png" alt="Plant Image" class="product__img">
                    <h3 class="item-title">Tiny Treasures</h3>
                    <p class="item-price">₱220.50</p>
				</div>
				<div class="selling-item">
					<img src="./shop/img/plant4.png" alt="Plant Image" class="product__img">
                    <h3 class="item-title">Diminutive Delights</h3>
                    <p class="item-price">₱249.00</p>
				</div>
				<div class="selling-item">
					<img src="./shop/img/plant9.png" alt="Plant Image" class="product__img">
                    <h3 class="item-title">Miniature Greens</h3>
                    <p class="item-price">₱250.60</p>
				</div>
				</div>
			</section>
			
			<section class="care">
			<h1>Care To Your Plants</h1>
            <p>To care for and encourage the growth or development of.</p>
			<div class="care-row">
				<div class="care-col">
				<img src="./img/plant1.jpg">
				<div class="overlay">
					<div class="text">"Water plants consistently, ensuring the soil stays 
					moist but not waterlogged, to support healthy root development and growth."</div>
					</div>
				</div>
				<div class="care-col">
				<img src="./img/plant2.jpg">
				<div class="overlay">
					<div class="text">"Place plants in suitable light conditions, considering 
					their specific sunlight preferences, to optimize photosynthesis and overall vitality."</div>
					</div>
				</div>
				<div class="care-col">
				<img src="./img/plant3.jpg">
				<div class="overlay">
					<div class="text">"Fertilize plants appropriately, providing essential nutrients for 
					strong stems, lush foliage, and vibrant blooms, while also monitoring for signs of pests 
					and diseases."</div>
					</div>
				</div>
			</div>
		</section>

            <section class="reviews">
                <h1>What Our Customer Says</h1>
                <p>See the rate and reviews of our customer</p>
                <div class="row">
                    <div class="col">
                        <img src="./img/r1.jpg">
                        <div style="color: #fff;">
                            <p>I stumbled upon this online plant store and it's a gem!
                                The website is easy to navigate, offering a diverse range
                                of plants with detailed care tips. The quality is outstanding
                                — my plants arrived well-packaged, healthy, and vibrant.</p>
                            <h3>Lillianne Blake</h3>
							<i class="fa-solid fa-star" style="color: #000;"></i>
							<i class="fa-solid fa-star" style="color: #000;"></i>
							<i class="fa-solid fa-star" style="color: #000;"></i>
							<i class="fa-solid fa-star" style="color: #000;"></i>
							<i class="fa-solid fa-star" style="color: #000;"></i>
                        </div>
                    </div>
                    <div class="col">
                        <img src="./img/r2.jpg">
                        <div style="color: #fff;">
                            <p>Shipping was prompt, and the customer service team was
                                responsive and caring. Prices are reasonable, making it a
                                go-to for both beginners and enthusiasts. I highly recommend
                                this site for anyone wanting to build their indoor oasis.
                                Can't wait for my next purchase!</p>
                            <h3>Leroi Brent</h3>
							<i class="fa-solid fa-star" style="color: #000;"></i>
							<i class="fa-solid fa-star" style="color: #000;"></i>
							<i class="fa-solid fa-star" style="color: #000;"></i>
							<i class="fa-solid fa-star" style="color: #000;"></i>
							<i class="fa-solid fa-star" style="color: #000;"></i>
                        </div>
                    </div>
					<div class="col">
                        <img src="./img/r3.jpg">
                        <div style="color: #fff;">
                            <p>First time ordering plants from online, and I couldn't be happier with my 
							purchase. The website is user-friendly, making it easy to find what I needed. 
							The plants arrived in excellent condition, well-packaged and even more beautiful 
							than expected.</p>
                            <h3>Tiffany Wang</h3>
							<i class="fa-solid fa-star" style="color: #000;"></i>
							<i class="fa-solid fa-star" style="color: #000;"></i>
							<i class="fa-solid fa-star" style="color: #000;"></i>
							<i class="fa-solid fa-star" style="color: #000;"></i>
							<i class="fa-solid fa-star" style="color: #000;"></i>
                        </div>
                    </div>
					<div class="col">
                        <img src="./img/r4.jpg">
                        <div style="color: #fff;">
                            <p>The prices are fair for the quality received, and the 
							transparent checkout process was a breeze. I highly recommend this shop for plant enthusiasts. 
							My home is now flourishing with healthy greenery, thanks 
							to this fantastic online plant store. I'll definitely be 
							a returning customer!</p>
                            <h3>Blaire Stiff</h3>
							<i class="fa-solid fa-star" style="color: #000;"></i>
							<i class="fa-solid fa-star" style="color: #000;"></i>
							<i class="fa-solid fa-star" style="color: #000;"></i>
							<i class="fa-solid fa-star" style="color: #000;"></i>
							<i class="fa-solid fa-star" style="color: #000;"></i>
                        </div>
                    </div>
                </div>
            </section>
        </main>
		
		 <footer>
		 <div class="box-container">
			<div class="box">
			<h3>Follow us here:</h3>
			<a href="https://github.com/jclaire-spec/PORTFOLIO/tree/1d13072396b9ebccbf8a62bd682d02ee0848dff6/Portfolio" class="link"><i class="fa-brands fa-facebook" style="color: #9ADE7B;"></i>Facebook</a>
            <a href="https://github.com/jclaire-spec/PORTFOLIO/tree/1d13072396b9ebccbf8a62bd682d02ee0848dff6/Portfolio" class="link"><i class="fa-brands fa-twitter" style="color: #9ADE7B;"></i>Twitter</a>
            <a href="https://github.com/jclaire-spec/PORTFOLIO/tree/1d13072396b9ebccbf8a62bd682d02ee0848dff6/Portfolio" class="link"><i class="fa-brands fa-instagram" style="color: #9ADE7B;"></i>Instagram</a>
			</div>
			
			<div class="box">
			<h3>Costumer Support</h3>
			<a href="./FAQS/tc.php" class="link"><i class="fa-solid fa-angle-right" style="color: #9ADE7B;"></i>Terms & Conditions</a>
            <a href="#" class="link"><i class="fa-solid fa-angle-right" style="color: #9ADE7B;"></i>Privacy Policy</a>
            <a href="./FAQS/faq.php" class="link"><i class="fa-solid fa-angle-right" style="color: #9ADE7B;"></i>FAQ</a>
			</div>
			
			<div class="box">
			<h3>Contact us here:</h3>
			<a href="#" class="link"><i class="fa-solid fa-phone" style="color: #9ADE7B;"></i>91234567892</a>
            <a href="#" class="link"><i class="fa-solid fa-envelope" style="color: #9ADE7B;"></i>claireppdrklrd@gmail.com</a>
			<a href="#" class="link"><i class="fa-solid fa-envelope" style="color: #9ADE7B;"></i>gardengroove@gmail.com</a>
			</div>
			</div>
			<p>Copyright &#169; 2023 Jecca Claire. All Rights Reserved.</p>
		</footer>
    </div>
</body>
</html>