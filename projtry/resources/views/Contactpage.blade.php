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
    font-family: 'Poppins', sans-serif;
}

body {
    background: white;
    color: #1f2933;
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
    font-weight: 700;
    font-size: 22px;
    position: absolute;
    left: 40px;
    color: #d6336c;
}

.nav-links {
    margin: auto;
}

.nav-links a {
    margin: 0 20px;
    text-decoration: none;
    color: #374151;
    font-size: 18px;
    font-weight: 500;
}

.nav-links a:hover {
    color: #d6336c;
}

/* ================= CONTACT HEADER ================= */
.contact-header {
    background: #e75a84;
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
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
}

/* LEFT INFO */
.contact-info {
    flex: 1;
}

.contact-info h2 {
    font-size: 28px;
    margin-bottom: 15px;
    color: #d6336c;
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
    color: #d6336c;
}

.contact-form input,
.contact-form textarea {
    width: 100%;
    padding: 12px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    font-size: 16px;
    border-radius: 8px;
}

.contact-form textarea {
    height: 120px;
    resize: none;
}

.contact-form button {
    padding: 12px 30px;
    border: none;
    background: #d6336c;
    color: white;
    font-size: 16px;
    cursor: pointer;
    border-radius: 25px;
    transition: all 0.3s ease;
}

.contact-form button:hover {
    background: #a0264f;
}

/* ================= FOOTER ================= */
footer {
    background: #1f2933;
    color: #e5e7eb;
    padding: 40px 20px;
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
    color: white;
}

.footer-box p,
.footer-box a {
    font-size: 16px;
    color: #d1d5db;
    text-decoration: none;
    line-height: 1.6;
}

.footer-box a:hover {
    color: #d6336c;
}

.copyright {
    text-align: center;
    margin-top: 20px;
    font-size: 16px;
    color: #9ca3af;
}
</style>
</head>

<body>

<!-- NAVBAR -->
<div class="navbar">
    <div class="logo">👗 Fresh Style</div>
    <div class="nav-links">
        <a href="index.html">Home</a>
        <a href="about.html">About</a>
        <a href="contact.html">Contact</a>
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
            Reach out to Fresh Style and we’ll respond as soon as possible.
        </p>
        <p>📞 0919 352 1975</p>
        <p>✉ freshstyle@gmail.com</p>
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
            <h3>Fresh Style</h3>
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
        © 2025 Fresh Style. All rights reserved.
    </div>
</footer>

</body>
</html>
