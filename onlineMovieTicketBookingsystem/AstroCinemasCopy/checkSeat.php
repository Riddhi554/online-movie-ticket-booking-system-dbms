<?php 
   
    include('connection.php');
    $screencode = $_SESSION['screen'];
    $showcode = $_SESSION['show'];
    
    
    // $sql = "SELECT seat_id FROM bookings WHERE screencode = $screencode";
    $sql = "SELECT seat_id FROM bookings WHERE screencode = $screencode AND showcode = $showcode"; //updating show code
    $result = mysqli_query($conn,$sql);

    $seatid = mysqli_fetch_all($result);
    
    $bookedSeat = array();
    foreach($seatid as $id){
        
           $bookedSeat[] = $id[0];
           
        
    }
    $ajay='';
    for($i=0;$i<count($bookedSeat);$i++){
        $ajay = $ajay . $bookedSeat[$i] . ",";
        }

    $ajaycomma = explode(",",$ajay);
    
        
    function checkme($seatidd,$ajaycomma){
        $disabled='';
        
          foreach($ajaycomma as $m){
              
            if($seatidd == $m)
            {
                $disabled = $disabled . "disabled";
            }
          }

         echo $disabled;
    }
?>