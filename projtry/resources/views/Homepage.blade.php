<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Fashion Shop</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: Arial, sans-serif;
}

body{
    background:white;
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
.menu-toggle{
    display:none;
    font-size:26px;
    cursor:pointer;
}

/* ================= BANNER ================= */
.banner{
    background:maroon;
    padding:50px 30px;
    display:flex;
    align-items:center;
    justify-content:center;
    gap:40px;
    text-align:center;
}

.banner-text{
    color:white;
}

.banner-text h1{
    font-size:72px;
    line-height:1;
    font-weight:bold;
}

.banner-text p{
    margin-top:10px;
    font-size:18px;
}

.banner-images{
    display:grid;
    grid-template-columns:repeat(3,180px);
    gap:15px;
}

.banner-images img{
    width:180px;
    height:260px;
    object-fit:cover;
    border-radius:10px;
}

/* ================= ABOUT ================= */
.about{
    background:white;
    padding:60px 20px;
    display:flex;
    justify-content:center;
}

.about-content{
    max-width:900px;
    display:flex;
    align-items:center;
    gap:40px;
    text-align:left;
}

.about-content img{
    width:220px;
    border-radius:10px;
}

.about-text h2{
    font-size:40px;
    margin-bottom:10px;
}

.about-text p{
    font-size:16px;
    line-height:1.7;
}

.about-text button{
    margin-top:20px;
    padding:12px 25px;
    background:#555;
    color:white;
    border:none;
    cursor:pointer;
}

/* ================= SPONSORS ================= */
.sponsors{
    background:maroon;
    padding:50px 20px;
    text-align:center;
}

.sponsors h2{
    font-size:36px;
    margin-bottom:10px;
}

.sponsors p{
    max-width:600px;
    margin:0 auto 30px;
}

.sponsor-logos{
    display:flex;
    justify-content:center;
    gap:25px;
    flex-wrap:wrap;
}

.sponsor-logos div{
    background:white;
    padding:18px 40px;
    font-weight:bold;
    font-size:18px;
}

/* ================= FOOTER ================= */
footer{
    background:white;
    padding:50px 20px;
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
    margin-bottom:10px;
}

.footer-box p,
.footer-box a{
    font-size:14px;
    color:black;
    text-decoration:none;
}

.footer-box input{
    padding:8px;
    width:220px;
}

.footer-box button{
    margin-top:10px;
    padding:8px 20px;
}

.copyright{
    background:black;
    color:white;
    text-align:center;
    padding:15px;
    margin-top:30px;
}

/* ================= RESPONSIVE ================= */
@media(max-width:900px){
    .banner{
        flex-direction:column;
    }

    .banner-images{
        grid-template-columns:repeat(2,180px);
    }

    .about-content{
        flex-direction:column;
        text-align:center;
    }
}

@media(max-width:768px){
    .nav-links{
        display:none;
        position:absolute;
        top:60px;
        left:0;
        width:100%;
        background:#ffd6de;
        flex-direction:column;
        text-align:center;
        padding:15px 0;
    }

    .nav-links.active{
        display:flex;
    }

    .menu-toggle{
        display:block;
    }
}
</style>
</head>

<body>

<!-- NAVBAR -->
<div class="navbar">
    <div class="logo">👗 Fashion Shop</div>

    <div class="menu-toggle" id="menuToggle">☰</div>

    <div class="nav-links" id="navLinks">
        <a href="#">Homepage</a>
        <a href="#">Aboutpage</a>
        <a href="#">Contactpage</a>
    </div>
</div>

<!-- BANNER -->
<div class="banner">
    <div class="banner-text">
        <h1>NEW YEAR<br>NEW SALE</h1>
        <p>Be stylish. Be confident. Be you.</p>
    </div>

    <div class="banner-images">
        <img src="https://images.unsplash.com/photo-1607746882042-944635dfe10e?crop=entropy&cs=tinysrgb&fit=crop&h=260&w=180">
        <img src="https://images.unsplash.com/photo-1520975916090-3105956dac38">
        <img src="https://images.unsplash.com/photo-1521334884684-d80222895322">
        <img src="https://images.unsplash.com/photo-1503342217505-b0a15ec3261c">
        <img src="https://images.unsplash.com/photo-1512436991641-6745cdb1723f">
        <img src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d">
    </div>
</div>

<!-- ABOUT -->
<div class="about">
    <div class="about-content">
        <img src="https://images.unsplash.com/photo-1520975916090-3105956dac38">
        <div class="about-text">
            <h2>Shop Now!</h2>
            <p>
                Life is a fashion. Welcome to Fashion Shop, where fashion meets confidence.
                We offer stylish, high-quality, and affordable clothing designed to express
                your unique personality.
            </p>
            <button>Read More</button>
        </div>
    </div>
</div>

<!-- SPONSORS -->
<div class="sponsors">
    <h2>Sponsors</h2>
    <p>
        We’re grateful to our sponsors and partners who support our vision of
        making fashion accessible to everyone.
    </p>

    <div class="sponsor-logos">
        <div>BENCH</div>
        <div>UNIQLO</div>
        <div>PENSHOPPE</div>
        <div>JUANA</div>
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
