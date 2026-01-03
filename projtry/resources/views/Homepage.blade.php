<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home Page</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins', sans-serif;
}

body{
    background: yellow;
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

.menu-toggle{
    display:none;
    font-size:28px;
    cursor:pointer;
}

/* ================= HERO ================= */
.hero{
    display:flex;
    align-items:center;
    justify-content:space-between;
    padding:80px 8%;
    gap:50px;
    background:#e75a84;
}

.hero-text{
    flex:1;
}

.hero-text h1{
    font-size:64px;
    font-weight:800;
    color:white;
}

.hero-text p{
    margin:20px 0;
    font-size:18px;
    color:white;
    max-width:500px;
}

.hero-text button{
    padding:14px 35px;
    background:#d6336c;
    color:white;
    border:none;
    border-radius:30px;
    font-size:16px;
    cursor:pointer;
}

.hero-text button:hover{
    background:#a0264f;
}

.hero-image{
    flex:1;
}

.hero-image img{
    width:100%;
    max-width:520px;
    height:520px;
    object-fit:cover;
    border-radius:30px;
    box-shadow:0 20px 40px rgba(0,0,0,0.2);
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
    display:flex;
    align-items:center;
    gap:50px;
    flex-wrap:wrap;
}

.about-content img{
    width:260px;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,0.1);
}

.about-text h2{
    font-size:42px;
    margin-bottom:15px;
    color:#d6336c;
}

.about-text p{
    font-size:16px;
    line-height:1.8;
    color:#4b5563;
}

.about-text button{
    margin-top:25px;
    padding:12px 30px;
    background:#d6336c;
    color:white;
    border:none;
    border-radius:30px;
    cursor:pointer;
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
}

.sponsor-logos{
    margin-top:30px;
    display:flex;
    justify-content:center;
    gap:25px;
    flex-wrap:wrap;
}

.sponsor-logos div{
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
}

.copyright{
    background:#111827;
    color:#9ca3af;
    text-align:center;
    padding:15px;
}

/* ================= RESPONSIVE ================= */
@media(max-width:900px){
    .hero{
        flex-direction:column;
        text-align:center;
    }

    .hero-image img{
        height:420px;
    }
}

@media(max-width:768px){
    .nav-links{
        display:none;
        position:absolute;
        top:70px;
        left:0;
        width:100%;
        background:white;
        text-align:center;
        padding:20px 0;
    }

    .nav-links.active{
        display:block;
    }

    .menu-toggle{
        display:block;
    }

    .hero-text h1{
        font-size:42px;
    }
}
</style>
</head>

<body>

<!-- NAVBAR -->
<div class="navbar">
    <div class="logo">👗 Fresh Style</div>

    <div class="menu-toggle" id="menuToggle">☰</div>

    <div class="nav-links" id="navLinks">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
    </div>
</div>

<!-- HERO -->
<section class="hero">
    <div class="hero-text">
        <h1>Fresh Style</h1>
        <p>Discover trendy fashion that matches your confidence and personality.</p>
        <button>Shop Now</button>
    </div>

    <div class="hero-image">
        <img src="https://images.unsplash.com/photo-1503342217505-b0a15ec3261c?auto=format&fit=crop&w=1200&q=80">
    </div>
</section>

<!-- ABOUT -->
<div class="about">
    <div class="about-content">
        <img src="https://images.unsplash.com/photo-1520975916090-3105956dac38">
        <div class="about-text">
            <h2>About Our Shop</h2>
            <p>
                Fashion Shop brings you stylish, affordable, and high-quality clothing
                designed to make you feel confident every day.
            </p>
            <button>Learn More</button>
        </div>
    </div>
</div>

<!-- SPONSORS -->
<div class="sponsors">
    <h2>Our Partners</h2>
    <div class="sponsor-logos">
        <div>ZARA</div>
        <div>H&M</div>
        <div>MANGO</div>
        <div>FOREVER 21</div>
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
            <p>Home</p>
            <p>About</p>
            <p>Shop</p>
            <p>Contact</p>
        </div>

        <div class="footer-box">
            <h3>Contact Us</h3>
            <input type="text" placeholder="Message">
            <br>
            <button>Submit</button>
        </div>

    </div>
</footer>

<div class="copyright">
    © 2025 Fashion Shop. All rights reserved.
</div>

<script>
const menuToggle = document.getElementById("menuToggle");
const navLinks = document.getElementById("navLinks");

menuToggle.addEventListener("click", () => {
    navLinks.classList.toggle("active");
});
</script>

</body>
</html>
