<?php 
@session_start();

?>
<?php 

$welcomeName='';
if(isset($_SESSION['user']))
    {   
       
       $welcomeName = $_SESSION['user'];
    }
?>


<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <!-- title icon  -->
    <link rel="icon" href="images/icons/brandicon.svg" type="image/icon type">
    <!-- fonts  -->
    <link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">

    <!-- Fontawesome  -->
    <link rel="stylesheet" href="css/fontawesome.css">
    <!-- css  -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main copy.css">
    <link rel="stylesheet" type="text/css" href="css/maintwo.css">
    

    <!-- js  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </head>


<nav class="navbar navbar-expand-sm navbar-dark fixed-top"  style="background-color: #023E73;">
  <a class="navbar-brand text-center mr-auto" style="font-family: 'Jost', sans-serif;" href="#"><img width = "40" height="40" src="images/icons/logo.svg" alt="logo">AstroCinemas</a>
  
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <!-- profile -->
    <li class="nav-item">
      <?php 
        if(isset($_SESSION['user'])){
          
          echo '<a class="nav-link" href="userBookings.php">My Bookings</a>';
        }
      ?>
     <!-- log in/out   -->
    </li>
    <li class="nav-item">
      <a href="aboutus.php" class="nav-link">About Us</a>
    </li>
    
      <?php 
       
        if(isset($_SESSION['admin'])){
          
          echo '<a class="nav-link" href="change_movie.php">Change Movie</a>';
        }
      ?>
    
    
    <li class="nav-item">
      <?php 
        if(isset($_SESSION['user']) || isset($_SESSION['admin'])){
        

          echo '<a class="nav-link" href="logout.php">Log Out</a>';
        
        }else{
          
          echo '<a class="nav-link" href="login.php">Log In</a>';
        }
      
      ?>
      
    </li>
    
        
    <li class="nav-item">

      <?php 
          if(!isset($_SESSION['user']) && !isset($_SESSION['admin'])){
            echo '<a class="nav-link" href="signup.php">Sign Up</a>';
          }
        
      ?>
        
    </li>

  
  </ul>
  
  
</nav>


<div class="container-fluid" style="margin-top:60px">
</div>







<body>

</body>
</html>