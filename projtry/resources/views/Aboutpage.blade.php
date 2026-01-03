<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About Us</title>

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins', sans-serif;
}

body{
    background:#fff7cc;
    color:#1f2933;
}

/* ================= NAVBAR ================= */
.navbar {
    background:white;
    padding:20px 40px;
    display:flex;
    align-items:center;
    position:sticky;
    top:0;
    box-shadow:0 2px 10px rgba(0,0,0,0.05);
    z-index:100;
}

.logo {
    font-weight:700;
    font-size:24px;
    color:#d6336c;
}

.nav-links {
    margin:auto;
}

.nav-links a {
    margin:0 18px;
    text-decoration:none;
    color:#374151;
    font-size:18px;
}

.nav-links a:hover{
    color:#d6336c;
}

/* ================= BANNER ================= */
.banner{
    background:#e75a84;
    padding:80px 8%;
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap:50px;
    color:white;
}

.banner-text h1{
    font-size:64px;
    font-weight:800;
    line-height:1.1;
}

.banner-text p{
    margin-top:20px;
    font-size:18px;
    max-width:450px;
}

.banner-images{
    display:flex;
    gap:15px;
}

.banner-images img{
    width:140px;
    height:220px;
    object-fit:cover;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,0.25);
}

/* ================= ABOUT ================= */
.about{
    background:white;
    padding:80px 20px;
    display:flex;
    justify-content:center;
}

.about-content{
    max-width:900px;
    text-align:center;
}

.about h2{
    font-size:42px;
    color:#d6336c;
    margin-bottom:20px;
}

.about p{
    font-size:18px;
    line-height:1.8;
    color:#4b5563;
}

.about button{
    margin-top:30px;
    padding:14px 35px;
    background:#d6336c;
    color:white;
    border:none;
    border-radius:30px;
    font-size:16px;
    cursor:pointer;
}

.about button:hover{
    background:#a0264f;
}

/* ================= SPONSORS ================= */
.sponsors{
    background:#fdf0f4;
    padding:70px 20px;
    text-align:center;
}

.sponsors h2{
    font-size:36px;
    color:#d6336c;
    margin-bottom:10px;
}

.sponsors p{
    color:#6b7280;
    margin-bottom:30px;
}

.brands{
    display:flex;
    justify-content:center;
    gap:25px;
    flex-wrap:wrap;
}

.brand{
    background:white;
    padding:18px 40px;
    font-weight:700;
    border-radius:12px;
    box-shadow:0 5px 15px rgba(0,0,0,0.05);
}

/* ================= FOOTER ================= */
footer{
    background:#1f2933;
    padding:60px 20px;
    color:#e5e7eb;
}

.footer-container{
    max-width:1000px;
    margin:auto;
    display:flex;
    justify-content:space-between;
    flex-wrap:wrap;
    gap:30px;
}

.footer-box h3{
    color:white;
    margin-bottom:15px;
}

.footer-box p,
.footer-box a{
    color:#d1d5db;
    text-decoration:none;
    line-height:1.7;
}

.footer-box input{
    padding:10px;
    width:220px;
    border-radius:6px;
    border:none;
    margin-bottom:10px;
}

.footer-box button{
    padding:10px 25px;
    background:#d6336c;
    color:white;
    border:none;
    border-radius:25px;
    cursor:pointer;
}

.copyright{
    background:#111827;
    color:#9ca3af;
    text-align:center;
    padding:15px;
}

/* ================= RESPONSIVE ================= */
@media(max-width:900px){
    .banner{
        flex-direction:column;
        text-align:center;
    }

    .banner-images{
        flex-wrap:wrap;
        justify-content:center;
    }

    .banner-text h1{
        font-size:44px;
    }
}
</style>
</head>

<body>

<!-- NAVBAR -->
<div class="navbar">
    <div class="logo">👗 Fresh Style</div>
    <div class="nav-links">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
    </div>
</div>

<!-- BANNER -->
<section class="banner">
    <div class="banner-text">
        <h1>STYLE<br>STARTS WITH YOU</h1>
        <p>Designed for everyday confidence and modern lifestyle.</p>
    </div>

    <div class="banner-images">
        <img src="https://images.unsplash.com/photo-1529139574466-a303027c1d8b?auto=format&fit=crop&w=400&q=80">
        <img src="https://images.unsplash.com/photo-1509631179647-0177331693ae?auto=format&fit=crop&w=400&q=80">
        <img src="https://images.unsplash.com/photo-1520975916090-3105956dac38"> 
       <img src="https://images.unsplash.com/photo-1503342217505-b0a15ec3261c">
    </div>
</section>

<!-- ABOUT -->
<section class="about">
    <div class="about-content">
        <h2>Who We Are</h2>
        <p>
            Fresh Style is a modern fashion brand built for individuals
            who value comfort, creativity, and confidence.
            Our collections are carefully curated to fit everyday wear
            while keeping up with global fashion trends.
        </p>
        <button>Explore More</button>
    </div>
</section>

<!-- SPONSORS -->
<section class="sponsors">
    <h2>Trusted By</h2>
    <p>Collaborating with brands that share our passion</p>

    <div class="brands">
        <div class="brand">NIKE</div>
        <div class="brand">ADIDAS</div>
        <div class="brand">ZARA</div>
        <div class="brand">H&M</div>
    </div>
</section>

<!-- FOOTER -->
<footer>
    <div class="footer-container">

        <div class="footer-box">
            <h3>Fresh Style</h3>
            <p>📞 0919 352 1975</p>
            <p>✉ freshstyle@gmail.com</p>
        </div>

        <div class="footer-box">
            <h3>Site Map</h3>
            <p><a href="#">Home</a></p>
            <p><a href="#">About</a></p>
            <p><a href="#">Shop</a></p>
            <p><a href="#">Contact</a></p>
        </div>

        <div class="footer-box">
            <h3>Message Us</h3>
            <input type="text" placeholder="Your message">
            <br>
            <button>Send</button>
        </div>

    </div>
</footer>

<div class="copyright">
    © 2025 Fresh Style. All rights reserved.
</div>

</body>
</html>
