<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CAZY - Outfit and Nail Inspiration">
    <title>CAZY - Outfit & Nail Inspiration</title>
    <style>
        /* Resetting some default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Merriweather'
        }

        /* Body and overall styling */
        body {
            background-color : #f74e89;
            color: #333;
            line-height: 1.6;
        }
        
        /* Header styling*/
        header {
        color: #f74e89;
        padding: 20px 0;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
    }
        .container {
            width: 80%;
            margin: 0 auto;
            max-width: 1200px;
        }

        h1 {
            color: #ffffff; /* Ganti warna judul jadi putih */
            text-align: center;
            font-size: 48px;
        }

        nav {
            margin-top: 20px;
            text-align: center;
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        nav ul li {
            margin: 0 20px;
            position: relative;
        }

        nav ul li a {
            text-decoration: none;
            color: #ffffff; /* Warna teks menu jadi putih */
            font-size: 20px;
            font-weight: bold;
            font-family: 'Merriweather' sans-serif;
            padding: 10px 15px;
        }

        nav ul li a:hover {
            color: #0b2f9f; 
        }

        /* Dropdown Styling for Horizontal Menu */
        .dropdown {
            position: relative;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f5fb;
            min-width: 160px;
            z-index: 1;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            border-radius: 5px;
            top: 100%; /* Positioning dropdown below the parent */
            left: 0;
        }

        .dropdown-content a {
            color: #333;
            padding: 12px 16px;
            text-decoration: none;
            display: block; 
            font-size: 14px
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #ffb6c1;
        }

        /* Home Section */
        #home {
            background-color: #d2e0fb;
            padding: 60px 0;
            text-align: center;
        }

        h2 { 
             color: #003285;
             font-size: 28px;
             margin-bottom: 20px;
        }

        p {
            color: #334854;
            font-size: 18px;
            line-height: 1.8;
            max-width: 700px;
            margin: 0 auto;
        }

        /* Footer Styling */
        footer {
            background-color: #f74e89;
            padding: 20px 0;
            text-align: center;
        }

        footer p {
            color: #ffffff;
            font-size: 16px;
        }

        /* Responsive design for smaller screens */
        @media (max-width: 768px) {
            h1 {
                font-size: 28px;
            }

            nav ul {
                flex-direction: column;
            }

            nav ul li {
                margin: 10px 0;
            }

            #home p {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <!-- Header Section -->
<header>
    <div class="container">
        <h1>CAZY</H1>
        <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li class="dropdown">
                        <a href="#">Clothes</a>
                        <ul class="dropdown-content">
                            <li><a href="#">All</a></li>
                            <li><a href="#">Top</a></li>
                            <li><a href="#">Pants</a></li>
                            <li><a href="#">Skirt</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">Nails</a>
                        <ul class="dropdown-content">
                            <li><a href="#">All</a></li>
                            <li><a href="#">Acrylics Nail Art</a></li>
                            <li><a href="#">Gel Nail Art</a></li>
                            <li><a href="#">Ombre Nail Art</a></li>
                            <li><a href="#">3D Nail Art</a></li>
                            <li><a href="#">Nail Charms</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">Bags</a>
                        <ul class="dropdown-content">
                            <li><a href="#">All</a></li>
                            <li><a href="#">Sling Bag</a></li>
                            <li><a href="#">Shoulder Bag</a></li>
                            <li><a href="#">Tote Bag</a></li>
                            <li><a href="#">Backpack</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#">Accessories</a>
                        <ul class="dropdown-content">
                            <li><a href="#">All</a></li>
                            <li><a href="#">Rings</a></li>
                            <li><a href="#">Necklace</a></li>
                            <li><a href="#">Bracelet</a></li>
                            <li><a href="#">Scarf</a></li>
                            <li><a href="#">Belt</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Content Section -->
    <section id="home">
        <div class="container">
            <h2>About CAZY</h2>
            <p>Welcome to <strong>CAZY</strong>, your ultimate source for outfit and nail art inspiration. Whether you're looking for the latest fashion trends, nail designs, or stylish accessories, we've got you covered. Explore our curated collections of clothes, bags, nails, and accessories to help you express your unique style and creativity. Let CAZY be your style guide!</p>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <div class="container">
            <p>&copy; 2024 CAZY. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
