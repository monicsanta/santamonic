<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fortune Bottles - Contact Us</title>
</head>

<body>
    <php include ="mail.php";
    ?>
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
        }

        .contact-section {
            padding: 100px 20px 40px 20px;
            text-align: center;
        }

        .contact-title {
            font-size: 2.5rem;
            color: #ff5500;
        }

        .contact-form {
            margin: 30px auto;
            display: inline-block;
            background-color: transparent;
            padding: 50px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgb(223, 220, 220);
            width: 100%;
            max-width: 500px;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }

        .contact-form button {
            background-color: #ff5500;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 5px;
            font-size: 1.2rem;
            cursor: pointer;
        }

        .contact-form button:hover {
            background-color: #e04e00;
        }

        

        .captcha-box {
            font-size: 1.8rem;
            font-weight: bold;
            color: #ff5500;
            background: #fff;
            padding: 10px;
            display: inline-block;
            margin-bottom: 10px;
            border-radius: 5px;
            letter-spacing: 5px;
        }

        .refresh-btn {
            background: none;
            border: none;
            color: #ff5500;
            font-size: 1rem;
            cursor: pointer;
            margin-left: 10px;
        }

        .refresh-btn:hover {
            color: #e04e00;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background: #101010;
            color: #fff;

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

     
        .hero {
            height: 100vh;
            background: url('3c1b6ffde225332121004e0fb345a56d.webp') no-repeat center center/cover;
            align-items: center;
            color: #fff;
            text-shadow: 2px 2px 5px #000;
            text-align: center;

           
        }

        .hero h1 {
            font-size: 4rem;

            text-transform: uppercase;

        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 7%;
        }

        .cta-button {
            background-color: #00b300;
            padding: 15px 30px;
            font-size: 1.1rem;
            color: white;
            border-radius: 50px;
            margin-top: 2%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
            transition: 0.3s;
        }

        .cta-button:hover {
            background-color: #ff5500;
            transform: scale(1.1);
        }

        /* About Section */
        .about {
            padding: 50px 0;
            background-color: #252525;
            text-align: center;
        }

        .about h2 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .about p {
            font-size: 1.1rem;
            max-width: 800px;
            margin: 0 auto;
            padding-bottom: 40px;
        }

        /* Features Section */
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            margin-left: 2%;
            margin-right: 2%;
            padding: 1%;
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

        .fortune {
            color: white !important;
            padding-top: 16%;
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
        .popup-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            display: none;
            justify-content: center;
            align-items: center;
        }

        .popup {
            background: #fff;
            color: #333;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            width: 300px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            transform: scale(0.8);
            opacity: 0;
            transition: all 0.3s ease;
        }

        .popup.show {
            transform: scale(1);
            opacity: 1;
        }

        .popup h3 {
            color: #ff5500;
            margin-bottom: 10px;
        }

        .popup button {
            margin-top: 10px;
            padding: 8px 20px;
            background: #ff5500;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .popup button:hover {
            background: #e04e00;
        }
   
    </style>
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
            <li><a href="Contact.php">Contact</a></li>
    </nav>
    </ul>     

    <div class="contact-section">
        <h2 class="contact-title">Contact Us</h2>
        <div class="contact-form">
            <form id="contact-Form">
            <form id="contact-Form" action="mail.php" method="POST" onsubmit="ClearForm() ; return  true;>
                <label for="name">Full Name</label>
              <input type="text" id="name" name="name" placeholder="Your Name" required>

                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Your Email" required>

                <label for="message">Message</label>
                <textarea id="message" name="message" rows="4" placeholder="Your Message" required></textarea>

                <label>Enter the code below:</label>
                <div>
                    <span class="captcha-box" id="captchaValue"></span>
                    <button type="button" class="refresh-btn" onclick="generateCaptcha()">🔄 Refresh</button>
                </div>
                <input type="text" id="captcha" name="captcha" placeholder="Enter code" required>

                <button type="submit">SUBMIT</button>
</form>
</div>
</div>
<div id="popupOverlay" class="popup-overlay">
        <div id="popup" class="popup">
            <h3>Success!</h3>
            <p>Your message has been sent.</p>
            <button onclick="closePopup()">Close</button>
        </div>
    </div>


    

    
    <footer class="footer" id="footer">
        <p>Contact us: <strong><a href="mailto:monicraj2003@gmail.com">monicraj2003@gmail.com</a></strong> | +91
            9894231404 | <a href="https://inexpensivecoders.com/">Inexpensivecoders</a></p>
    </footer>
    <script>
        function toggleMenu() {
            document.getElementById("menu-list").classList.toggle("show");
        }
    </script>

<script>
        document.getElementById("contact-Form").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent actual form submission
            document.getElementById("popupOverlay").style.display = "flex";
            setTimeout(() => {
                document.getElementById("popup").classList.add("show");
            }, 50);
        });

        function closePopup() {
            document.getElementById("popup").classList.remove("show");
            setTimeout(() => {
                document.getElementById("popupOverlay").style.display = "none";
            }, 300);
        }
    </script>
    <script src="script.js">

    </script>

</body>


</html>