<?php 
$errors = array('email' => '', 'password' => '','loginFlag'=>'');
if(isset($_POST['submit'])){
  if(empty($_POST['email'])){
    $errors['email'] = "Enter your mail id." ;

  }elseif(empty($_POST['pwd'])){
    $errors['password'] =  "Enter your password.";
  }else{
    include('loginCheck.php');

        if($loginFlag=="false"){
          $errors['loginFlag'] = "Either email is wrong or password, Try Again!.";
        }
    // if($loginFlag){
    //   header('Location:index.php');
    // }else{
    //   $errors['loginFlag'] = "Either email is wrong or password, Try Again!.";
    // }
    
  }
}
?>

 <!-- Admin Login  -->

<?php 
  $admin_error="";
  if(isset($_POST['admin_key_submit'])){
    include('admin_login_process.php');
    if($admin_flag==false){
    $admin_error = "Enter Correct Admin Key";
  }
}


?>


<!DOCTYPE html>
<html>
    <?php include('header.php')  ?>
    <title>Log In</title>

    <body class=" wel-login">

      
        <!-- title of page -->
        
        

        <!-- Log In form -->
        <div class="container" style="margin-top:100px; margin-bottom:70px;">
            <div class="row">

                <div class="col-md-6">
                <div class="text-center ">
                <h2 style="text-align: center; font-size: 40px; color: white;"><?php 
              if(@$_GET['alert']){
                echo "Log In to Book Tickets";
              }else{
                echo "Log In";
              }
            
            
            ?></h2>
                <medium style="color: white;">Best Online Ticketing System In Town</medium>
                
    </div>

                </div>

                <div class="col-md-6 login">
                    <div style="margin-left: 10%; margin-right:10%;">
                        
                    <form action="login.php" method="POST">
                        <div class="form-group">
                          <label for="email"><span style="color: Black;">Email :</span></label>
                          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                          <div class="text-danger"><?php echo $errors['email']; ?></div>
                        </div>
                        <div class="form-group">
                          <label for="pwd"><span style="color: black;">Password :</span></label>
                          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                          <div class="text-danger"><?php echo $errors['password']; ?></div>
                        </div>
                       

                        <div class="row">
                          <div class="col-8 text-left">
                          <a href="signup.php"><span style="color: black;">Create New Account</span></a>
                          <a style="padding-left: 20px;" href="#" data-toggle="collapse" data-target="#admin_login">Admin?</a>

                        </div>
                          <div class="col-4 text-right">
                            <button type="submit" name = "submit" class="btn btn-primary btn-sm ">Log In</button>
                          </div>
                        </div>

                        

                        <div class="text-danger" style="margin-bottom: 60px;"><?php echo $errors['loginFlag']; ?></div>
                        <div class="text-danger"><?php echo $admin_error; ?></div>

                        <!-- <div class="text-center">
                       
                       
                        <br><br>
                        <a href="signup.php">Create new account</a>
                       
                        </div> -->

                       
                        
                        
                      </form>

                      <div>
                        
                          <div id="admin_login" class="collapse">
                            <form method="POST" action="login.php">
                              <div class="conatiner">
                                <div class="row">
                                <div class="col-9">
                                  <input required class="form-control" type="password" placeholder="Enter Admin Key" name="admin_key">
                                  </div>
                                  <div class="col-3">
                                  <input class="btn btn-primary" style="float: right;" type="submit" name="admin_key_submit">
                                  </div>

                                </div>
                              </div>
                              

                            </form>
                          </div>
                        </div>
                    </div>
                        

                </div>

           

                </div>



            </div>
            
          </div>





        
    </body>
    <!--Footer-->
    <?php include('footer.php') ?>
</html>