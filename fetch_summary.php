<?php
include 'config.php';

// Fetch total bookings
$sql_total_bookings = "SELECT COUNT(*) AS total_bookings FROM bookings";
$result_total_bookings = $conn->query($sql_total_bookings);
$total_bookings = $result_total_bookings->fetch_assoc()['total_bookings'];

// Fetch revenue (assuming each booking has a fixed price for simplicity)
$fixed_price = 1000; // Example price
$revenue = $total_bookings * $fixed_price;

// Fetch upcoming trips
$today = date("Y-m-d");
$sql_upcoming_trips = "SELECT COUNT(*) AS upcoming_trips FROM bookings WHERE booking_date > '$today'";
$result_upcoming_trips = $conn->query($sql_upcoming_trips);
$upcoming_trips = $result_upcoming_trips->fetch_assoc()['upcoming_trips'];

$summary = array(
    "total_bookings" => $total_bookings,
    "revenue" => $revenue,
    "upcoming_trips" => $upcoming_trips
);

echo json_encode($summary);

$conn->close();
?>
