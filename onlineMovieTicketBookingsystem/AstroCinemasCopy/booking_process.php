<!-- This file is not used  -->
<!-- Booking process has been moved to selectseat  -->

<?php 

session_start();

 $userid = $_SESSION['usertoken'] ;
 $screencode = $_SESSION['screen'];
include('connection.php');



$bookedSeats = $_POST['seats'];
$data = array();

foreach($bookedSeats as $seat)
    $data[] = addslashes($seat);
   
$data = implode("," , $data);

$sql = "INSERT INTO bookings (seat_id,user_id,screencode) VALUES ('$data','$userid',$screencode)";


if ($conn->query($sql) === TRUE) {
    header('Location:confirmation.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>



