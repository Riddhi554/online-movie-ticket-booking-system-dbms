

<?php include('header.php');?> 

 <?php 
include('connection.php');

$sql = "SELECT * FROM changemovie WHERE screencode=1";
$result = mysqli_query($conn,$sql);
$car = mysqli_fetch_array($result,MYSQLI_ASSOC);

$one_title = $car['title'];
$one_trailer = $car['trailer'];
$one_poster = $car['poster'];
$one_more = $car['more'];


$sql = "SELECT * FROM changemovie WHERE screencode=2";
$result = mysqli_query($conn,$sql);
$car = mysqli_fetch_array($result,MYSQLI_ASSOC);

$two_title = $car['title'];
$two_trailer = $car['trailer'];
$two_poster = $car['poster'];
$two_more = $car['more'];


$sql = "SELECT * FROM changemovie WHERE screencode=3";
$result = mysqli_query($conn,$sql);
$car = mysqli_fetch_array($result,MYSQLI_ASSOC);
$three_title = $car['title'];
$three_trailer = $car['trailer'];
$three_poster = $car['poster'];
$three_more = $car['more'];
?>

<?php 


if(isset($_POST['setScreenCode'])){
    $_SESSION['screen'] = $_POST['setScreenCode'];
    $_SESSION['show'] = $_POST['radioShowCode'];
    header('Location:select_seat.php');
}

?>


<?php 

$welcomeName='';
if(isset($_SESSION['user']))
    {   
       
       $welcomeName = $_SESSION['user'];
    }
?>
<!DOCTYPE html>
<html>

    
    
    <title>Home</title>
    <body style="font-family: 'Jost', sans-serif;">
        
    <div class="text-center wel">
                <h2 style="text-align: center; font-size: 30px; color: white;">Welcome <?php echo $welcomeName; ?> To AstroCinemas</h2>
                <medium style="color: white;">Best Online Ticketing System In Town</medium>
                
    </div>
            
        <div class="container" >

            <div class="row" >
                <div class="col-md-4">

                    <div class="poster_container text-center">
                        <h5>Screen A</h5x>
                        <div class="poster text-center" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);">
                            
                            <img src="<?php echo $one_poster; ?>">
                            
                            
                            <div class="book" >
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#showtime_a">Book</button>
                               
                           </div>

                     
                            
                        </div>
                        <h3><?php echo $one_title; ?></h3>

                        
                       <div class="text-center">
                       <button type="button" class="btn btn-outline-primary" data-toggle="collapse" data-target="#more_s_a">More <svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 01.708 0L8 10.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z" clip-rule="evenodd"/>
                            </svg></button>
                                                        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#trailer_a"><svg class="bi bi-caret-right-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 011.659-.753l5.48 4.796a1 1 0 010 1.506z"/>
                            </svg> Trailer</button>
                        </div>
                        

                    </div>
                    
                    
                    
                    <div class="more text-left">
                        <div id="more_s_a" class="collapse more_content text-justify" >
                        <p><?php echo $one_more; ?></p>                            
                            
                        </div>
                    </div>



                </div>
 
                <div class="col-md-4">
                    <div class="poster_container text-center">
                        <h5>Screen B</h5>
                        <div class="poster text-center" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);">
                            
                            <img src="<?php echo $two_poster; ?>">
                            

                            <div class="book" >
                                <form method="POST" action="index.php">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#showtime_b">Book</button>

                                </form>
                           </div>
                            
                        </div>
                        <h3><?php echo $two_title; ?></h3>

                        
                       <div class="text-center">
                       <button type="button" class="btn btn-outline-primary" data-toggle="collapse" data-target="#more_s_b">More <svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 01.708 0L8 10.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z" clip-rule="evenodd"/>
                            </svg></button>
                                                        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#trailer_b"><svg class="bi bi-caret-right-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 011.659-.753l5.48 4.796a1 1 0 010 1.506z"/>
                            </svg> Trailer</button>
                            
                        </div>
                        

                    </div>
                    
                    
                    
                    <div class="more text-left">
                        
                        <div id="more_s_b" class="collapse more_content text-justify">
                            <p><?php echo $two_more; ?></p>
                        </div>
                    </div>

                </div>
                <!--Screen C-->
                <div class="col-md-4">
                    <div class="poster_container text-center">
                        <h5>Screen C</h5>
                        <div class="poster text-center" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);">
                            
                            <img src="<?php echo $three_poster; ?>">
                            

                            <div class="book" >
                            <form method="POST" action="index.php">
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#showtime_c">Book</button>

                                </form>
                           </div>
                            
                        </div>
                        <h3><?php echo $three_title; ?></h3>

                        
                        <div class="text-center">
                            <button type="button" class="btn btn-outline-primary" data-toggle="collapse" data-target="#more_s_c">More <svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 01.708 0L8 10.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z" clip-rule="evenodd"/>
                                </svg></button>
                                                            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#trailer_c"><svg class="bi bi-caret-right-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 011.659-.753l5.48 4.796a1 1 0 010 1.506z"/>
                                </svg> Trailer</button>                       
                       
                            
                        </div>
                        

                    </div>
                    
                    
                    
                    <div class="more text-left">
                        
                        <div id="more_s_c" class="collapse more_content text-justify">
                            <p><?php echo $three_more; ?></p>
                        </div>
                    </div>

                   

                </div>

            </div>

        </div>
        

        <div>

            <div class="container">
                <div class="modal fade" id="trailer_a" role="dialog">
                <div class="modal-dialog modal-lg">
                
                    <div class="modal-content">
                    <div class="modal-header">
                    <h4 class="modal-title">Trailer</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                       
                    </div>
                    <div class="modal-body text-center">
                        <iframe width="100%" height ="315" src="<?php echo $one_trailer; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                    </div>
                    
                </div>
                </div>
            </div>
            <div class="container">
                <div class="modal fade" id="trailer_b" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                    <h4 class="modal-title">Trailer</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        
                    </div>
                    <div class="modal-body text-center">
                        <iframe width="100%" height="315" src="<?php echo $two_trailer; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                    </div>
                    
                </div>
                </div>
            </div>

                    <div class="container">

                        <div class="modal fade" id="trailer_c" role="dialog">
                        <div class="modal-dialog modal-lg">

                            <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Trailer</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                
                            </div>
                            <div class="modal-body text-center">
                                <iframe width="100%" height="315" src="<?php echo $three_trailer; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                            </div>
                            
                        </div>
                        </div>

                        
                    </div>


        </div>

        <div class="container">

            <div class="modal fade" id="showtime_a">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Select Showtime</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <div class="modal-body">
                            <form method="POST" action="index.php" id="showcode_a_form" >
                            <table>
                                            <tr>                          
                                                <td><input type="radio" name="radioShowCode" value="1"> &nbsp;&nbsp;&nbsp;- Morning Show : 10:00 AM - 1:00 PM</td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" name="radioShowCode" value="2"> &nbsp;&nbsp;&nbsp;- Noon Show : 1:00 PM - 4:00 PM</td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" name="radioShowCode" value="3"> &nbsp;&nbsp;&nbsp;- Evening Show : 4:00 PM - 7: 00 PM</td>
                                            </tr>
                                            <tr>
                                                <td><input type="hidden" name = "setScreenCode" value="1"></td>
                                            </tr>
                                        </table>
                            </form>
                        </div>
                        <div class="modal-footer">
                        <input form="showcode_a_form" type="submit" class="btn btn-outline-success"></button>
                        
                        </div>
                        
                    </div>
                </div>
            </div>
        
        </div>

        <div class="container">

            <div class="modal fade" id="showtime_b">
                <div class="modal-dialog">
                    <div class="modal-content">
                    
                        <div class="modal-header">
                            <h4 class="modal-title">Select Showtime</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        
                        <div class="modal-body">
                            <form method="POST" action="index.php" id="showcode_b_form" >
                            <table>
                                            <tr>                          
                                                <td><input type="radio" name="radioShowCode" value="1"> &nbsp;&nbsp;&nbsp;- Morning Show : 10:00 AM - 1:00 PM</td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" name="radioShowCode" value="2"> &nbsp;&nbsp;&nbsp;- Noon Show : 1:00 PM - 4:00 PM</td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" name="radioShowCode" value="3"> &nbsp;&nbsp;&nbsp;- Evening Show : 4:00 PM - 7: 00 PM</td>
                                            </tr>
                                            <tr>
                                                <td><input type="hidden" name = "setScreenCode" value="2"></td>
                                            </tr>
                                        </table>
                            </form>
                        </div>
                        
                        <div class="modal-footer">
                        <input form="showcode_b_form" type="submit" class="btn btn-outline-success"></button>
                        
                        </div>
                        
                    </div>
                </div>
            </div>
        
        </div>
                                    


        <div class="container">

            <div class="modal fade" id="showtime_c">
                <div class="modal-dialog">
                    <div class="modal-content">
                    
                        <div class="modal-header">
                            <h4 class="modal-title">Select Showtime</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <div class="modal-body">
                            <form method="POST" action="index.php" id="showcode_c_form" >
                            <table>
                                            <tr>                          
                                                <td><input type="radio" name="radioShowCode" value="1"> &nbsp;&nbsp;&nbsp;- Morning Show : 10:00 AM - 1:00 PM</td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" name="radioShowCode" value="2"> &nbsp;&nbsp;&nbsp;- Noon Show : 1:00 PM - 4:00 PM</td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" name="radioShowCode" value="3"> &nbsp;&nbsp;&nbsp;- Evening Show : 4:00 PM - 7: 00 PM</td>
                                            </tr>
                                            <tr>
                                                <td><input type="hidden" name = "setScreenCode" value="3"></td>
                                            </tr>
                                        </table>
                            </form>
                        </div>
                        <div class="modal-footer">
                        <input form="showcode_c_form" type="submit" class="btn btn-outline-success"></button>
                        
                        </div>
                        
                    </div>
                </div>
            </div>
        
        </div>
        <?php include('get_feedback.php'); ?>

        <?php include('footer.php') ?>
    </body>

</html>
