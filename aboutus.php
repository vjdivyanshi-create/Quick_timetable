<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us - QuickTimetable</title>
    
    <!-- Bootstrap CSS & JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #170251;
            color: white;
        }

        header {
    background: linear-gradient(135deg, #0f1a3c, #3450a1)
    padding: 80px 20px 40px;
    text-align: center;
    color: #fff;
}



        header h1 {
            font-size: 48px;
            margin-bottom: 10px;
        }

        header p {
            font-size: 20px;
        }

        .navbar {
            background-color: #170251;
        }

        .navbar .nav-link {
            color: white;
        }

        .navbar .nav-link:hover {
            color: #f9dd8f;
        }

        section {
            padding: 60px 20px;
        }

        h2 {
            color: #f9dd8f;
            margin-bottom: 30px;
            text-align: center;
        }

        .team-section {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .team-member {
            background: #f1f1f1;
            color: #222;
            border-radius: 8px;
            padding: 20px;
            flex: 1 1 250px;
            max-width: 250px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            font-weight: bold;
        }

        .contact-details {
            text-align: center;
            margin-top: 30px;
        }

        .contact-details p {
            font-size: 16px;
            margin: 10px 0;
        }

        @media (max-width: 768px) {
            .team-section {
                flex-direction: column;
                align-items: center;
            }

            header h1 {
                font-size: 36px;
            }

            header p {
                font-size: 18px;
            }
        }
    </style>
</head>
<body>

<!-- Navbar (same as index.php) -->
<nav class="navbar navbar-expand-sm fixed-top">
    <div class="container">
        <a href="#" class="navbar-brand">
            <img src="images/logo image.jpg" alt="Logo" style="width: 200px; height: auto; border-radius: 10px;">
        </a>
        <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item px-2">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="register.php">Register</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="aboutus.php">About Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Header section (matches index.php style) -->
<header>
    <h1>About QuickTimetable</h1>
    <p>Your smart school timetable generator</p>
</header>

<!-- Team Section -->
<section>
    <h2>👥 Our Team</h2>
    <div class="team-section">
        <div class="team-member">KHUSHAL SHRIMAL</div>
        <div class="team-member">DIVYANSHI VIJAY</div>
        <div class="team-member">KHEMCHAND SAINI</div>
    </div>
</section>

<!-- Contact Section -->
<section>
    <h2>📞 Contact Us</h2>
    <div class="contact-details">
        <p><strong>Email:</strong> support@quicktimetable.com</p>
        <p><strong>Phone:</strong> 6375937815</p>
        <p><strong>Address:</strong> SKIT, Jaipur, Rajasthan</p>
    </div>
</section>

<!-- Footer -->
<?php include("include/footer.php"); ?>

</body>
</html>
