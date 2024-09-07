<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Booking System</title>
    <link rel="stylesheet" href="Homepage styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">TravelBooking</div>
            <label for="menu-toggle" class="menu-icon">&#9776;</label>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropbtn">Destinations</a>
                    <div class="dropdown-content">
                        <a href="#">Europe</a>
                        <a href="#">Asia</a>
                        <a href="#">America</a>
                        <a href="#">Londen</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropbtn">About</a>
                    <div class="dropdown-content">
                        <a href="#">Our Story</a>
                        <a href="#">Team</a>
                    </div>
                </li>
                <li><a href="#">Contact</a></li>
                <li><a href="Dashboard.html">Dashboard</a></li>
            </ul>
            <ul class="auth-links">
                <li><a href="Loginpage.html"><i class="fa fa-user"></i> Login</a></li>
                <li><a href="#"><i class="fa fa-sign-out"></i> Logout</a></li>
            </ul>
        </nav>
    </header>

    <div class="slider">
        <div class="slides">
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">

            <div class="slide first">
                <img src="1.jpg" alt="">
            </div>
            <div class="slide">
                <img src="2.jpg" alt="">
            </div>
            <div class="slide">
                <img src="3.jpg" alt="">
            </div>
            <div class="slide">
                <img src="4.jpg" alt="">
            </div>
            <div class="slide">
                <img src="5.jpg" alt="">
            </div>

            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
            </div>
        </div>

        <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
        </div>
    </div>

    <main>
        <section class="content">
            <h1>Welcome to TravelBooking</h1>
            <p>Your adventure starts here. Explore the world's best destinations with our travel booking system.</p>
            <div class="features">
                <div class="feature">
                    <i class="fa fa-plane"></i>
                    <h2>Book Flights</h2>
                    <p>Find the best flights to your dream destinations.</p>
                </div>
                <div class="feature">
                    <i class="fa fa-bed"></i>
                    <h2>Reserve Hotels</h2>
                    <p>Choose from a wide range of hotels worldwide.</p>
                </div>
                <div class="feature">
                    <i class="fa fa-map-signs"></i>
                    <h2>Discover Tours</h2>
                    <p>Explore guided tours and unique experiences.</p>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-content">
            <h3>TravelBooking</h3>
            <p>Explore the world with us. Your adventure starts here.</p>
            <ul class="socials">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 TravelBooking. Designed by Viniksha Shree</p>
        </div>
    </footer>
</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel_booking";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<?php
include 'config.php';

$sql = "SELECT * FROM bookings";
$result = $conn->query($sql);

$bookings = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $bookings[] = $row;
    }
}

echo json_encode($bookings);

$conn->close();
?>


