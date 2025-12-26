<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fashion Shop</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #ffe3ea;
        }

        /* ================= NAVBAR ================= */
        .navbar {
            background: white;
            padding: 25px 40px;
            display: flex;
            align-items: center;
            position: relative;
        }

        .logo {
            font-weight: bold;
            font-size: 22px;
            position: absolute;
            left: 40px;
        }

        .nav-links {
            margin: auto;
        }

        .nav-links a {
            margin: 0 20px;
            text-decoration: none;
            color: #000;
            font-size: 20px;
            font-weight: 500;
        }

        /* ================= BANNER ================= */
        .banner {
            background: maroon;
            color: white;
            padding: 40px;
            display: flex;
            align-items: center;
             gap: 15px; 
             justify-content: center;   /* center everything horizontally */           
        }

        .banner-text h1 {
            font-size: 70px;
            
        }

        .banner-text p {
            margin-top: 10px;
            font-size: 18px;
        }

        .banner-images {
            display: flex;
            gap: 15px;
        }

        .banner-images img {
            width: 140px;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }

        /* ================= ABOUT ================= */
        .about {
            background: white;
            padding: 50px;
            text-align: center;
        }

        .about h2 {
            font-size: 32px;
            margin-bottom: 15px;
        }

        .about p {
            max-width: 700px;
            margin: auto;
            line-height: 1.6;
            font-size: 18px;
        }

        .about button {
            margin-top: 20px;
            padding: 10px 25px;
            border: none;
            background: #555;
            color: white;
            cursor: pointer;
            font-size: 16px;
        }

        /* ================= SPONSORS ================= */
        .sponsors {
            padding: 40px;
            background: maroon;
            text-align: center;
        }

        .sponsors h2 {
            margin-bottom: 10px;
            font-size: 28px;
        }

        .sponsors p {
            margin-bottom: 25px;
            font-size: 16px;
        }

        .brands {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }

        .brand {
            background: white;
            padding: 15px 35px;
            font-weight: bold;
            font-size: 18px;
        }

        /* ================= FOOTER ================= */
        footer {
            background: #111;
            color: white;
            padding: 40px;
        }

        .footer-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .footer-box {
            margin-bottom: 20px;
        }

        .footer-box h3 {
            margin-bottom: 10px;
            font-size: 20px;
        }

        .footer-box p,
        .footer-box a {
            font-size: 20px;
            color: #ccc;
            text-decoration: none;
            line-height: 1.6;
        }

        .footer-box input {
            padding: 8px;
            width: 200px;
        }

        .footer-box button {
            padding: 8px 20px;
            margin-top: 10px;
            cursor: pointer;
        }

        .copyright {
            text-align: center;
            margin-top: 20px;
            font-size: 20px;
            color: #aaa;
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <div class="navbar">
        <div class="logo">👗 Fashion Shop</div>

        <div class="nav-links">
            <a href="#">Homepage</a>
            <a href="#">Aboutpage</a>
            <a href="#">Contactpage</a>
        </div>
    </div>

    <!-- BANNER -->
    <div class="banner">
        <div class="banner-text">
            <h1>BE YOU<br>BE ONE</h1>
            <p>Fashionable. Confident. You.</p>
        </div>

        <div class="banner-images">
            <img src="https://images.unsplash.com/photo-1520975916090-3105956dac38">
            <img src="https://images.unsplash.com/photo-1521334884684-d80222895322">
            <img src="https://images.unsplash.com/photo-1503342217505-b0a15ec3261c">
            <img src="https://images.unsplash.com/photo-1512436991641-6745cdb1723f">
            <img src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d">

        </div>
    </div>

    <!-- ABOUT -->
    <div class="about">
        <h2>About Us</h2>
        <p>
            Life is a fashion. Welcome to Fashion Shop, where fashion meets confidence.
            We offer stylish, high-quality, and affordable clothing made to express
            your unique personality.
        </p>
        <button>Read More</button>
    </div>

    <!-- SPONSORS -->
    <div class="sponsors">
        <h2>Sponsors</h2>
        <p>We’re grateful to our partners who support our vision.</p>

        <div class="brands">
            <div class="brand">BENCH</div>
            <div class="brand">UNIQLO</div>
            <div class="brand">PENSHOPPE</div>
            <div class="brand">JUANA</div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer>
        <div class="footer-container">

            <div class="footer-box">
                <h3>Fashion Shop</h3>
                <p>📞 09193521975</p>
                <p>✉ fashionshop@gmail.com</p>
            </div>

            <div class="footer-box">
                <h3>Site Map</h3>
                <p><a href="#">Home</a></p>
                <p><a href="#">About Us</a></p>
                <p><a href="#">Shop</a></p>
                <p><a href="#">Contact Us</a></p>
            </div>

            <div class="footer-box">
                <h3>Contact Us</h3>
                <input type="text" placeholder="Message">
                <br>
                <button>Submit</button>
            </div>

        </div>

        <div class="copyright">
            © 2025 Fashion Shop. All rights reserved.
        </div>
    </footer>

</body>
</html>
