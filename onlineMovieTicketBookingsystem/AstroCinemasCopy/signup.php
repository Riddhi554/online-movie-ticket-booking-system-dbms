




<?php 
$errors = array('email' => '', 'password' => '','firstName'=>'','lastName'=>'');
if(isset($_POST['submit'])){

  if(empty($_POST['first_name'])){
    $errors['firstName'] = "Enter your First Name.";
  }elseif(empty($_POST['last_name'])){
    $errors['lastName'] = "Enter your Last Name.";

  }elseif(empty($_POST['email'])){
    $errors['email'] = "Enter your mail id." ;

  }elseif(empty($_POST['pwd'])){
    $errors['password'] =  "Enter your password.";
  }else{


  $firstnameSign =$_POST['first_name'];
  $lastnameSign = $_POST['last_name'];
  $emailSign = $_POST['email'];
  $passwordSign =$_POST['pwd'];

      

  include('connection.php');


  $sql = "INSERT INTO userinfo (firstName, lastName, email, password,credits)
  VALUES ('$firstnameSign', '$lastnameSign', '$emailSign','$passwordSign','10000')";

  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();

    
    header('Location:login.php');
  }
}
?>
    


<!DOCTYPE html>
<html>
   
  <?php include('header.php')?>
  <title>Sign Up</title>
    <body class="wel-signup">
       

        <!-- Sign Up form -->
        <div class="container">
            <div class="row">

                

                <div class="col-md-6 login" >
                  <div style="margin-left: 10%; margin-right:10%;">
                              <!-- title of page -->
                  <div class="text-center ">
                          <h2 style="text-align: center; font-size: 40px; color: white;">Sign Up</h2><hr>
                          <medium style="color: white;">On Sign Up You Will Get 10,000 Credits</medium>
                          
                  </div>
                  
                    <form style="margin-top: 30px; margin-bottom:30px;" action="signup.php" method="POST">
                      <div class="row">
                        <div class="col-6">
                          <div class="form-group">
                            
                            <input type="text" class="form-control" id="first_name" placeholder="Enter First Name" name="first_name">
                            <div class="text-danger"><?php echo $errors['firstName']; ?></div>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="form-group">
                           
                            <input type="text" class="form-control" id="last_name" placeholder="Enter Last Name" name="last_name">
                            <div class="text-danger"><?php echo $errors['lastName']; ?></div>
                          </div>
                        </div>
                      </div>
                        
                        
                        <div class="form-group">
                            
                            <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
                            <div class="text-danger"><?php echo $errors['email']; ?></div>
                        </div>

                        <div class="row">
                        <div class="col-9">
                          <div class="form-group">
                            
                              
                                  <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="pwd">

                        
                              <div class="text-danger"><?php echo $errors['password']; ?></div>
                          </div>  
                        </div>
                        <div class="col-3">
                          <button style="float: right;" type="submit" class="btn btn-primary" name="submit">Sign Up</button>
                        </div>
                      </div>
                      <p style="font-size:15px; text-align:center;">Already have an account?<a href="login.php"> Log In</a>.</p>

          
    
                    </form>
                  </div>
                  
                        

                </div>

                <div class="col-md-6">
                   

                </div>



            </div>
            
          </div>





       <?php include('footer.php')?>
    </body>
</html>