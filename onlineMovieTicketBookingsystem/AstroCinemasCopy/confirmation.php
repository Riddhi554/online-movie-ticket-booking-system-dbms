


<!DOCTYPE html>
<html lang="en">
    <title>Confirmation</title>
    <link rel="stylesheet" type="text/css" href="css/radiobuttons.css">

 <?php include('header.php'); ?>
 <?php
    $username = '';
    $username = $_SESSION['user'];
    $userToken = $_SESSION['usertoken'];
    $booking_id = $_SESSION['booking_id'];
    
 ?>

 <?php 
    include('connection.php'); 
    $sql = "SELECT user_id,booking_id,time_booking,seat_id,screencode,showcode,movietitle FROM bookings WHERE booking_id = $booking_id";
    $result = mysqli_query($conn,$sql);

    $booking = mysqli_fetch_all($result);
 
    foreach($booking as $bok){
        $screencode = $bok[4];
        $timeBook = $bok[2];
        $seatno = $bok[3];
        $showcode = $bok[5];
        $movie_title = $bok[6];
    }
 
 ?>



    <body>
        <div class="row wel-confirm" style="padding-bottom: 100px;">

            <div class="col-md-4"></div>
            <div class="col-md-4">

                <div class="card text-center">
                    <div class="card-header text-success">
                       <b> Booked!</b>
                    </div>
                    <div class="card-body text-left">
                        <h5 class="card-title"><b>Your ID  :</b> <?php echo $userToken; ?></h5>
                        <p class="card-text"><b>Movie Title :</b> <?php  echo $movie_title;  ?></p>
                        <p class="card-text"><b>Booking ID :</b> <?php  echo $booking_id;  ?></p>
                        <p class="card-text"><b>Screen No :</b> <?php  echo $screencode;  ?></p>
                        <p class="card-text"><b>Show Time :</b> <?php 

                            if($showcode==1){
                                echo "10:00 AM - 1:00 PM";
                            }elseif($showcode==2){
                                echo "1:00 PM - 4:00 PM";
                            }else{
                                echo "4:00 PM - 7:00 PM";
                            }
                        
                        ?></p>
                        <p class="card-text"><b>Seat No :</b> <?php  echo $seatno;  ?></p>
                        <p class="card-text"><b>Time of Booking :</b> <?php  echo $timeBook;  ?></p>
                        
                    </div>
                    <div class="card-footer text-success">
                        Thank you <?php echo $_SESSION['user']; ?> for booking with us!<button style="margin-left:30px;" class="btn btn-primary btn-sm" onclick="window.print()">Print</button>
                    </div>
                 </div>
                 <br>
                   <h6 style="color: white; text-align:center;">Scroll Down</h6>
            </div>
            <div class="col-md-4"></div>

        </div>
     
        <div class="container" >
            <div class="row" style="margin-top: 40px;">
                <div class="col-6" >
                    <!-- Direction  -->
                    <h6>Our Location</h6>
                    <hr style="border:#464E59 solid 0.5px">
                    <iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=5-9%20oavandham%20society%20harni%20warasiya%20ring%20road%20vadodara%20gujarat%20india+(home)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" 
                        width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                </div>

                <div class="col-6">
                        <!-- Feedback  -->
                        <h6>Feedback</h6>
                        <hr style="border:#464E59 solid 0.5px">
                        <medium>A little feedback helps us a lot. Share your booking experience with us.</medium>
                        <div class="text-center">
                        
                            <form  action="feedback_process.php" method="POST">
                            

                                <table>
                                    <tr>
                                        
                                        <td><span style="color:red">Very Bad</span><input type="radio" name=rating value="1"></td>
                                        <td><span style="color:orange">Bad</span><input type="radio" name=rating value="2"></td>
                                        <td><span style="color:#d2ee00">Good</span><input type="radio" name=rating value="3"></td>
                                        <td><span style="color:lightgreen">Very Good</span><input type="radio" name=rating value="4"></td>
                                        <td><span style="color:green">Excellent</span><input type="radio" name=rating value="5"></td>
                                    </tr>
                                </table>
                                
                                
                                <textarea maxlength="150" placeholder="Feedback" class="form-control" rows="3" name="feedbackForm"></textarea>
                                <input style="float: right; margin-top:10px; width:100%;" type="submit" name="feedback_submit" class="btn btn-sm  btn-outline-primary">
                            </form>

                        </div>
                        
                        
                </div>

            </div> 
        </div>
        
              
        

        
    </body>
<?php include('footer.php');?>
</html>