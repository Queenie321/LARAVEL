<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>

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


        /* ================= CONTACT HEADER ================= */
        .contact-header {
            background: maroon;
            color: white;
            text-align: center;
            padding: 50px;
        }

        .contact-header h1 {
            font-size: 60px;
        }

        .contact-header p {
            font-size: 18px;
            margin-top: 10px;
        }

        /* ================= CONTACT SECTION ================= */
        .contact-section {
            background: white;
            max-width: 900px;
            margin: 50px auto;
            padding: 40px;
            display: flex;
            gap: 40px;
            flex-wrap: wrap;
        }

        /* LEFT INFO */
        .contact-info {
            flex: 1;
        }

        .contact-info h2 {
            font-size: 28px;
            margin-bottom: 15px;
        }

        .contact-info p {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        /* RIGHT FORM */
        .contact-form {
            flex: 1;
        }

        .contact-form h2 {
            font-size: 28px;
            margin-bottom: 15px;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        .contact-form textarea {
            height: 120px;
            resize: none;
        }

        .contact-form button {
            padding: 12px 30px;
            border: none;
            background: maroon;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .contact-form button:hover {
            background: #800000;
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
            <a href="index.html">Homepage</a>
            <a href="about.html">Aboutpage</a>
            <a href="contact.html">Contactpage</a>
        </div>
    </div>

    <!-- HEADER -->
    <div class="contact-header">
        <h1>Contact Us</h1>
        <p>We’d love to hear from you</p>
    </div>

    <!-- CONTACT SECTION -->
    <div class="contact-section">

        <!-- INFO -->
        <div class="contact-info">
            <h2>Get in Touch</h2>
            <p>
                Have questions or feedback?  
                Reach out to Fashion Shop and we’ll respond as soon as possible.
            </p>
            <p>📞 0919 352 1975</p>
            <p>✉ fashionshop@gmail.com</p>
            <p>📍 Philippines</p>
        </div>

        <!-- FORM -->
        <div class="contact-form">
            <h2>Send a Message</h2>
            <input type="text" placeholder="Your Name">
            <input type="email" placeholder="Your Email">
            <textarea placeholder="Your Message"></textarea>
            <button>Send Message</button>
        </div>

    </div>

    <!-- FOOTER -->
    <footer>
        <div class="footer-container">
            <div class="footer-box">
                <h3>Fashion Shop</h3>
                <p>Style. Confidence. You.</p>
            </div>

            <div class="footer-box">
                <h3>Quick Links</h3>
                <p><a href="#">Home</a></p>
                <p><a href="#">About</a></p>
                <p><a href="#">Shop</a></p>
                <p><a href="#">Contact</a></p>
            </div>
        </div>

        <div class="copyright">
            © 2025 Fashion Shop. All rights reserved.
        </div>
    </footer>

</body>
</html>
