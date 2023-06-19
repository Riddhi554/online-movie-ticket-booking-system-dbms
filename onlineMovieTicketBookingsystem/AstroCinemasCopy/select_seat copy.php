<?php include('header.php') ?>


<?php 

if(!isset($_SESSION['user']))
    {   
        header("location:login.php?alert=Log In to Book Tickets!");
    }

?>
<?php 
$emptySeatError = '';
if(isset($_POST['submit'])){
    $emptySeatError = '';
    if(empty($_POST['seats'])){
        //checks if user submits empty
        $emptySeatError = 'Select atleast one seat.';
    }else{
        //booking process
        $userid = $_SESSION['usertoken'] ;
        $screencode = $_SESSION['screen'];
        $showcode = $_SESSION['show'];
        include('connection.php');



        $bookedSeats = $_POST['seats'];
        $data = array();

        foreach($bookedSeats as $seat)
        
            // $data[] = "(" . addslashes($seat) . ")";
            $data[] = addslashes($seat);
        
        $data = implode("," , $data);

        $sql = "INSERT INTO bookings (seat_id,user_id,screencode,showcode) VALUES ('$data','$userid',$screencode,$showcode)";


        if ($conn->query($sql) === TRUE) {
            // echo "New record created successfully";
            $last_id = $conn->insert_id;
            $_SESSION['booking_id'] = $last_id;
            header('Location:confirmation.php?$last_id');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
}
?>
<?php include('checkSeat.php'); ?>



<!DOCTYPE html>
<html>


 
    <body>

        
       <title>Select Seat</title>

        <div class="welcome" >
            <h2 style="text-align: center; font-size: 20px; color: #03658C;">Select Seat</h2>
            <hr width="100" >
            
    
        </div>
    <style>
                input[type=checkbox] {
                    position: relative;
                    cursor: pointer;
            }
            input[type=checkbox]:before {
                    content: "";
                    display: block;
                    position: absolute;
                    width: 20px;
                    height: 20px;
                    top: 0;
                    left: 0;
                    background-color:#e9e9e9;
        }
        input[type=checkbox]:checked:before {
                    content: "";
                    display: block;
                    position: absolute;
                    width: 20px;
                    height: 20px;
                    top: 0;
                    left: 0;
                    background-color:rgb(28, 156, 67);
        }
            input[type=checkbox]:checked:after {
                    content: "";
                    display: block;
                    width: 5px;
                    height: 10px;
                    border: solid white;
                    border-width: 0 2px 2px 0;
                    -webkit-transform: rotate(45deg);
                    -ms-transform: rotate(45deg);
                    transform: rotate(45deg);
                    position: absolute;
                    top: 2px;
                    left: 6px;
        }
        input[type=checkbox]:disabled:after{
            content: "";
            display: block;
            position: absolute;
            width: 20px;
            height: 20px;
            top: 0;
            left: 0;
            background-color:rgb(216, 112, 112);
        }
    </style>
    

        <!-- test checkbox  -->
        <div class="container">
            <div class="row">
                <div class="col-md-3">

                </div>
                <div class="col-md-6">
                    <div>
                        <h6 style="background-color: #82C0D9; padding: 10px; color: white;" class="text-center">Screen this Side</h6>
                    </div>
                    <div class="text-center">
                        <form action="select_seat.php" method="POST">
                        <table style="width:100%">
                        
                           <tr>
                               <td>&#x2798;</td>
                               <td>1</td>
                               <td>2</td>
                               <td>3</td>
                               <td>4</td>
                               <td>5</td>
                               <td>6</td>
                               <td>7</td>
                               <td>8</td>
                               <td>9</td>
                               <td>10</td>
                           </tr>

                           <tr>
                               <td>A</td>
                               <td><input type="checkbox" name="seats[]" value="A-01" <?php checkme("A-01",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="A-02" <?php checkme("A-02",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="A-03" <?php checkme("A-03",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="A-04" <?php checkme("A-04",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="A-05" <?php checkme("A-05",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="A-06" <?php checkme("A-06",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="A-07" <?php checkme("A-07",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="A-08" <?php checkme("A-08",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="A-09" <?php checkme("A-09",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="A-10" <?php checkme("A-10",$ajaycomma); ?>></td>
                               
                              
                           </tr>
                           <tr>
                               <td>B</td>
                               <td><input type="checkbox" name="seats[]" value="B-01" <?php checkme("B-01",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="B-02" <?php checkme("B-02",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="B-03" <?php checkme("B-03",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="B-04" <?php checkme("B-04",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="B-05" <?php checkme("B-05",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="B-06" <?php checkme("B-06",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="B-07" <?php checkme("B-07",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="B-08" <?php checkme("B-08",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="B-09" <?php checkme("B-09",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="B-10" <?php checkme("B-10",$ajaycomma); ?>></td>
                           </tr>
                           <tr>
                               <td>C</td>
                               <td><input type="checkbox" name="seats[]" value="C-01" <?php checkme("C-01",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="C-02" <?php checkme("C-02",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="C-03" <?php checkme("C-03",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="C-04" <?php checkme("C-04",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="C-05" <?php checkme("C-05",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="C-06" <?php checkme("C-06",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="C-07" <?php checkme("C-07",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="C-08" <?php checkme("C-08",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="C-09" <?php checkme("C-09",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="C-10" <?php checkme("C-10",$ajaycomma); ?>></td>
                           </tr>
                           <tr>
                               <td>D</td>
                               <td><input type="checkbox" name="seats[]" value="D-01" <?php checkme("D-01",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="D-02" <?php checkme("D-02",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="D-03" <?php checkme("D-03",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="D-04" <?php checkme("D-04",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="D-05" <?php checkme("D-05",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="D-06" <?php checkme("D-06",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="D-07" <?php checkme("D-07",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="D-08" <?php checkme("D-08",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="D-09" <?php checkme("D-09",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="D-10" <?php checkme("D-10",$ajaycomma); ?>></td>
                           </tr>
                           <tr>
                               <td>E</td>
                               <td><input type="checkbox" name="seats[]" value="E-01" <?php checkme("E-01",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="E-02" <?php checkme("E-02",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="E-03" <?php checkme("E-03",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="E-04" <?php checkme("E-04",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="E-05" <?php checkme("E-05",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="E-06" <?php checkme("E-06",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="E-07" <?php checkme("E-07",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="E-08" <?php checkme("E-08",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="E-09" <?php checkme("E-09",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="E-10" <?php checkme("E-10",$ajaycomma); ?>></td>
                           </tr>
                           <tr>
                               <td>F</td>
                               <td><input type="checkbox" name="seats[]" value="F-01" <?php checkme("F-01",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="F-02" <?php checkme("F-02",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="F-03" <?php checkme("F-03",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="F-04" <?php checkme("F-04",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="F-05" <?php checkme("F-05",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="F-06" <?php checkme("F-06",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="F-07" <?php checkme("F-07",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="F-08" <?php checkme("F-08",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="F-09" <?php checkme("F-09",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="F-10" <?php checkme("F-10",$ajaycomma); ?>></td>
                           </tr>
                           <tr>
                               <td>G</td>
                               <td><input type="checkbox" name="seats[]" value="G-01" <?php checkme("G-01",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="G-02" <?php checkme("G-02",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="G-03" <?php checkme("G-03",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="G-04" <?php checkme("G-04",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="G-05" <?php checkme("G-05",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="G-06" <?php checkme("G-06",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="G-07" <?php checkme("G-07",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="G-08" <?php checkme("G-08",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="G-09" <?php checkme("G-09",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="G-10" <?php checkme("G-10",$ajaycomma); ?>></td>
                           </tr>
                           <tr>
                               <td>H</td>
                               <td><input type="checkbox" name="seats[]" value="H-01" <?php checkme("H-01",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="H-02" <?php checkme("H-02",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="H-03" <?php checkme("H-03",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="H-04" <?php checkme("H-04",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="H-05" <?php checkme("H-05",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="H-06" <?php checkme("H-06",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="H-07" <?php checkme("H-07",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="H-08" <?php checkme("H-08",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="H-09" <?php checkme("H-09",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="H-10" <?php checkme("H-10",$ajaycomma); ?>></td>
                           </tr>
                           <tr>
                               <td>I</td>
                               <td><input type="checkbox" name="seats[]" value="I-01" <?php checkme("I-01",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="I-02" <?php checkme("I-02",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="I-03" <?php checkme("I-03",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="I-04" <?php checkme("I-04",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="I-05" <?php checkme("I-05",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="I-06" <?php checkme("I-06",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="I-07" <?php checkme("I-07",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="I-08" <?php checkme("I-08",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="I-09" <?php checkme("I-09",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="I-10" <?php checkme("I-10",$ajaycomma); ?>></td>
                           </tr>
                           <tr>
                               <td>J</td>
                               <td><input type="checkbox" name="seats[]" value="J-01" <?php checkme("J-01",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="J-02" <?php checkme("J-02",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="J-03" <?php checkme("J-03",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="J-04" <?php checkme("J-04",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="J-05" <?php checkme("J-05",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="J-06" <?php checkme("J-06",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="J-07" <?php checkme("J-07",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="J-08" <?php checkme("J-08",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="J-09" <?php checkme("J-09",$ajaycomma); ?>></td>
                               <td><input type="checkbox" name="seats[]" value="J-10" <?php checkme("J-10",$ajaycomma); ?>></td>
                           </tr>
                       </table>
                       <input class="btn btn-success" type="submit" name="submit" style="margin:10px;">
                       <!-- <input type="hidden" value="1" name="screencheckbox"> -->

                        </form>
                       

                    </div>
                    
                    <p class="text-danger text-center"><?php echo $emptySeatError;?></p>
                    
                
                </div>
                <div class="col-md-3"></div>
                
                
                
                
            </div>

            
            
        </div>


        




        <?php include('footer.php')?>

    </body>
</html>