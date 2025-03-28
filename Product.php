<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fortune Bottles - Products</title>
    <link rel="stylesheet"href="sheet.css">
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



        .products-section {
            padding: 5%;
            text-align: center;
           
        }

        .products-title {
            font-size: 2.5rem;
            color:#ff5500;
        }

        .products-description {
            font-size: 1.2rem;
            margin: 20px 0;
            color: #333;
        }

        .product-container {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
            padding: 20px 0;
        }

        .product-item {
            background-color:transparent;
            border: 1px solid #ddd;
            border-radius: 10px;
            width: 300px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease;
            margin-bottom: 20px;
        }

        .product-item img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            object-fit: cover;
        }

        .product-item h3 {
            font-size: 1.5rem;
            margin: 15px 0;
            color: #333;
        }

        .product-details {
            font-size: 1rem;
            color: #666;
            margin-bottom: 15px;
        }

        .product-price {
            font-size: 1.3rem;
            font-weight: bold;
            color: #4CAF50;
        }

        .product-item:hover {
            transform: scale(1.05);
        }

        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 15px;
            cursor: pointer;
            font-size: 1.2rem;
        }

        .btn:hover {
            background-color: #45a049;
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

       
        @media (max-width: 768px) {
            .products-title {
                font-size: 2rem;
            }

            .products-description {
                font-size: 1rem;
            }

            .product-container {
                flex-direction: column;
                align-items: center;
            }

            .product-item {
                width: 80%; 
                margin: 15px 0;
            }

            .btn {
                font-size: 1rem;
                padding: 10px 20px; 
            }
        }

        
        @media (max-width: 480px) {
            .products-title {
                font-size: 1.8rem;
            }

            .products-description {
                font-size: 0.9rem;
            }

            .product-container {
                padding: 10px; 
            }

            .product-item {
                width: 100%; 
            }

            .btn {
                font-size: 1rem;
                padding: 10px 20px;
            }

            .navbar a {
                font-size: 1rem; 
                padding: 12px 18px;
            }
            .navbar {
    flex-direction: column;
    align-items: center;
}}

.navbar a {
    display: block;
    padding: 10px;
    font-size: 1rem;
    text-align: center;
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
    <div class="products-section">
        <h2 class="products-title">Our Products</h2>
        <p class="products-description">Discover the perfect bottle to match your lifestyle. Stay hydrated in style with Fortune Bottles.</p>
        
        <div class="product-container">
            <div class="product-item">
                <img src="images (1).jpg" alt="Fortune Bottle 1">
                <h3>Fortune Bottle - Classic</h3>
                <p class="product-details">BPA-free, eco-friendly, and stylish bottle that keeps drinks cold for 24 hrs and hot for 12 hrs.</p>
                <a href="#" class="btn">Buy Now</a>
            </div>

            <div class="product-item">
                <img src="download (1).jpg" alt="Fortune Bottle 2">
                <h3>Fortune Bottle - Sports Edition</h3>
                <p class="product-details">Designed for active lifestyles with a leak-proof lid, perfect for workouts and outdoor adventures.</p>
                <a href="#" class="btn">Buy Now</a>
            </div>

            <div class="product-item">
                <img src="download.jpg" alt="Fortune Bottle 3">
                <h3>Fortune Bottle - Premium</h3>
                <p class="product-details">A high-end bottle with sleek design and double-wall insulation to keep drinks at the perfect temperature.</p>
                <a href="#" class="btn">Buy Now</a>
            </div>
        </div>
    </div>

    <footer class="footer" id="footer">
        <p>Contact us: <strong><a href="mailto:monicraj2003@gmail.com">monicraj2003@gmail.com</a></strong> | +91 9894231404 | <a href="https://inexpensivecoders.com/">Inexpensivecoders</a></p>
    </footer>
    <script>
        function toggleMenu() {
            document.getElementById("menu-list").classList.toggle("show");
        }
    </script>
    <script src="script.js" ></script>

</body>

</html>
