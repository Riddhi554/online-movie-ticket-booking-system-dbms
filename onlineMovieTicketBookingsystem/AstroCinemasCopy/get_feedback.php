<?php 

include('connection.php');

$sql = "SELECT feedback,username FROM feedbackform WHERE rating = 5";
$result = mysqli_query($conn,$sql);
$car = mysqli_fetch_all($result,MYSQLI_ASSOC);
// print_r($car);
// echo "<br>";
// echo $car[0]['feedback'];
// echo "<br>";
// echo $car[0]['username'];
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">

<body>
<img src="images/feed.jpg" height="50%" width="100%">
<div class="container" style="margin-top: 30px;">
    
<div class="row">
<?php for($i=0;$i<count($car);$i++){ ?>
    <div class="col-4">
        

        <div class="card" style="margin: 20px;box-shadow: 0 4px 8px 0 rgba(255,98,90, 0.2);">
        <div class="card-body">
        <P><b><?php echo $car[$i]['username']; ?></b> says "<i><?php echo $car[$i]['feedback']; ?></i>" </P>
        </div>
        </div>

        
    </div>
    <?php }?>
    <div class="col">

    </div>
</div>
</div>


    
</body>
</html>