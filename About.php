<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fortune Bottles</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background: #101010;
            color: #fff;
            line-height: 1.6;
        }

        h1,
        h2 {
            color: #ff5500;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* Navigation */
        nav {
            background-color: #252525;
            padding: 15px;
            position: sticky;
            top: 0;
            z-index: 1;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
        }

        .menu-icon {
            display: none;
            font-size: 2rem;
            color: #ff5500;
            cursor: pointer;
        }

        nav ul {
            display: flex;
            justify-content: center;
            list-style-type: none;
        }

        nav ul li {
            margin: 0 20px;
        }

        nav ul li a {
            color: #ff5500;
            font-size: 1.2rem;
            text-transform: uppercase;
            padding: 10px 20px;
            transition: 0.3s;
        }

        nav ul li a:hover {
            background-color: #ff5500;
            color: #101010;
            border-radius: 25px;
        }

        /* Responsive Navigation */
        @media (max-width: 768px) {
            .menu-icon {
                display: block;
            }

            nav ul {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 60px;
                left: 0;
                width: 100%;
                background-color: #252525;
                padding: 10px 0;
            }

            nav ul.show {
                display: flex;
            }

            nav ul li {
                text-align: center;
                margin: 10px 0;
            }
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #ff5500, #e00000);
            text-align: center;
            padding: 100px 0;
            color: white;
        }

        .hero h1 {
            font-size: 4rem;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 40px;
        }

        .cta-button {
            background-color: #00b300;
            padding: 15px 30px;
            font-size: 1.1rem;
            color: white;
            border-radius: 50px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
            transition: 0.3s;
        }

        .cta-button:hover {
            background-color: #ff5500;
            transform: scale(1.1);
        }

        /* About Section */
        .about {

            background-color: #252525;
            text-align: center;

        }

        .about h2 {
            font-size: 4rem;
            margin-bottom: 2%;
            text-align: center;

        }

        .about p {
            font-size: 1.1rem;
            padding: 3%;
            margin: 0 auto;
            padding-bottom: 2%;
            font-weight: bolder;
            text-align: center;
        }

        /* Features Section */
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            margin-left: 2%;
            margin-right: 2%;
            padding: 1%;
            margin-bottom: 3%;
            background-color: #101010;
            text-align: center;
        }

        .feature-item {
            background-color: #333;
            padding: 10%;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            transition: 0.3s ease;
        }

        .feature-item:hover {
            transform: translateY(-10px);
            background-color: #ff5500;
        }

        .feature-item i {
            font-size: 3rem;
            color: #ff5500;
            margin-bottom: 15px;
        }

        .feature-item h3 {
            font-size: 1.5rem;
            color: #fff;
            margin-bottom: 10px;
        }

        .feature-item p {
            font-size: 1rem;
            color: #ccc;
        }

        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
            font-size: 14px;
        }

        .footer a {
            color: #f4a261;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        .Cheers {
            font-size: xx-large;
            font-weight: 900;
            color: #ff5500;
            letter-spacing: 3px;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            text-align: center;

        }

        .feature-heading {
            font-size: 42px;
            color: #ff5500;
            margin-top: 2%;
            text-align: center;
        }

        .feature-heading {
            padding-top: 1%;
        }

        .flex-nav {
            display: flex;
            justify-content: start;
            gap: 2%;
        }

        .fortune-hide {
            margin-top: 2%;
            font-weight: bold;
            font-size: 2em;
            display: none;

        }

        @media (max-width: 768px) {
            .fortune-hide {
                display: block;
                text-align: center;
            }
        }
    </style>
</head>

<body>


    <nav>
        <div class="flex-nav">
            <span class="menu-icon" onclick="toggleMenu()">&#9776;</span>
            <span class="fortune-hide">Fortune Container</span>
        </div>
        <ul id="menu-list">
            <li><a href="Home.php">Home</a></li>
            <li><a href="About.php">About Us</a></li>
            <li><a href="Product.php">Product</a></li>
            <li><a href="Gallery.php">Gallery</a></li>
            <li><a href="Contact.php">Contact Us</a></li>
        </ul>
    </nav>







    <div class="about" id="about">
        <h2>About Us</h2>
        <p>
            At Fortune Bottles, we are passionate about bringing the world’s finest beverages to your table, one
            bottle
            at a time.
            With a commitment to quality, innovation, and sustainability, we strive to provide premium bottles that
            cater to a wide range of tastes and preferences. Whether you’re savoring a refreshing soda, indulging in
            a
            classic wine, or exploring new flavors, we ensure that every bottle reflects our dedication to
            excellence.
        </p>

        <p>
            Founded with the vision of creating a lasting impact in the beverage industry, Fortune Bottles works
            closely
            with trusted suppliers and artisans to bring you a curated selection of drinks. Our bottles are crafted
            with
            the utmost care and attention to detail, designed not only for function but to elevate your experience
            with
            every sip.
        </p>

        <p>
            As we continue to grow, we remain focused on our core values: sustainability, quality, and community. We
            believe in taking steps toward a greener future, which is why our packaging is designed with
            environmental
            responsibility in mind. Whether it’s through eco-friendly materials or minimizing our carbon footprint,
            we’re working hard to make sure that Fortune Bottles contributes to a better tomorrow.
        </p>

        <p>
            Join us on our journey to discover exceptional beverages that spark joy, inspire moments of connection,
            and
            create memories that last.
        </p>

        <br>
        <strong class="Cheers">Cheers to a Fortune of Flavors!</strong>
    </div>
    </div>



    <div class="feature-heading" id="feature-heading">
        <h3>Features</h3>
    </div>
    <div class="features" id="features">

        <div class="feature-item">

            <h3>Personalized Fortune</h3>
            <p>Each bottle contains a unique fortune message that can be customized.
            <p>
        </div>
        <div class="feature-item">

            <h3>Glow-in-the-Dark</h3>
            <p>Bottles with glow-in-the-dark messages or decorations.</p>
        </div>
        <div class="feature-item">

            <h3>Crystal or Gemstone</h3>
            <p>Bottles containing small gemstones like amethyst, rose quartz, or citrine.</p>
        </div>
        <div class="feature-item">

            <h3>Scented Fortune</h3>
            <p>Infused with light fragrances like lavender, jasmine, or citrus.</p>
        </div>
        <div class="feature-item">

            <h3>Customized Fortune</h3>
            <p>DIY kits allowing customers to create their own fortune bottles.</p>
        </div>


    </div>


    <footer class="footer">
        <p>Contact us: <strong><a href="mailto:monicraj2003@gmail.com">monicraj2003@gmail.com</a></strong> | +91
            9894231404 | <a href="https://inexpensivecoders.com/">Inexpensivecoders</a></p>
    </footer>


    <script>
        function toggleMenu() {
            document.getElementById("menu-list").classList.toggle("show");
        }
    </script>
    <script src="script.js" ></script>

</body>

</html>