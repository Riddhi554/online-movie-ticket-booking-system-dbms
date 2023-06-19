<?php 
session_start();
$rate = $_POST['rating'];
$feed = $_POST['feedbackForm'];
$booking_id = $_SESSION['booking_id'];
$userName = $_SESSION['user'];

include('connection.php');

$sql = "INSERT INTO feedbackForm (booking_id,rating,feedback,username) VALUES ('$booking_id','$rate','$feed','$userName') ";
if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
    header('Location:index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
























?>