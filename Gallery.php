<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fortune Bottles - Stay Hydrated, Stay Fortuned</title>
    <link rel="stylesheet" href="sheet.css">
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

        h1, h2 {
            color: #ff5500;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

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

     

        .cta-button:hover {
            background-color: #ff5500;
            transform: scale(1.1);
        }

      
        .about {
            
            background-color: #252525;
            text-align: center;
        }
    
    
      

        .container {
            text-align: center;
            padding: 50px 5%;
            background-color: #101010;
        }

        .container h2 {
            font-size: 2.5rem;
            color: #ff5500;
            margin-bottom: 30px;
        }

        .gallery-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .gallery-card {
            background: #252525;
            padding: 15px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            overflow: hidden;
            width: 300px;
            margin-bottom: 3%;
            text-align: center;
        }

        .gallery-card:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.7);
        }

        .gallery-card img {
            width: 100%;
            border-radius: 10px;
            transition: transform 0.3s ease-in-out;
        }

        .gallery-card:hover img {
            transform: scale(1.1);
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
      
        @media (max-width: 480px) {
            .gallery-row {
                flex-direction: column;
                align-items: center;
            }

            .gallery-card {
                width: 90%;
            }
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

    <div class="container" id="gallery">
        <h2>Gallery</h2>
        <div class="gallery-row">
            <div class="gallery-card">
                <img src="download (1).jpg" alt="Gallery Image 1">
            </div>
            <div class="gallery-card">
                <img src="download (1).jpg" alt="Gallery Image 2">
            </div>
            <div class="gallery-card">
                <img src="images (1).jpg" alt="Gallery Image 3">
            </div>
            <div class="gallery-card">
                <img src="download (1).jpg" alt="Gallery Image 4">
            </div>
            <div class="gallery-card">
                <img src="images.jpg" alt="Gallery Image 5">
            </div>
            <div class="gallery-card">
                <img src="images (1).jpg" alt="Gallery Image 6">
            </div>
            <div class="gallery-card">
                <img src="download (1).jpg" alt="Gallery Image 1">
            </div>
            <div class="gallery-card">
                <img src="images (1).jpg" alt="Gallery Image 1">
            </div>
        </div>
        <p>
            Under the skilled and insightful guidance of our Managing Director R. Raja, we, Fortune Containers, have achieved a reputable position in the industry. His extensive industrial experience, managerial expertise, and sound domain knowledge have helped us gain immense clientele trust.
            <br>
            Our team consists of hardworking and skilled personnel who have played a crucial role in positioning our company among the top names in the industry. We are supported by professionals in production, quality control, marketing, warehousing, administration, and more.
            <br>
            <b>Our Infrastructure</b><br>
            We have a state-of-the-art infrastructure equipped with modern technology to manage operations systematically. The facility is divided into various departments, including design, production, quality control, logistics, and administration.
            <br>
            <b>Quality Assurance</b><br>
            Our company prioritizes quality at every step. A dedicated quality control department ensures that every product meets high standards before delivery. Strict quality parameters are applied to maintain excellence across our product range.
        </p>
    </div>

  
    <footer class="footer">
        <p>Contact us: <strong><a href="mailto:monicraj2003@gmail.com">monicraj2003@gmail.com</a></strong> | +91 9894231404 | <a href="https://inexpensivecoders.com/">Inexpensivecoders</a></p>
    </footer>

    
    <script>
        function toggleMenu() {
            document.getElementById("menu-list").classList.toggle("show");
        }
    </script>

</body>

</html>
