<html>
    <?php include('header.php'); ?>
    <title>Change Movie</title>
    <body class="wel-change">

        
        
        

            <!-- select  -->
            <div class="container" style="padding-top: 50px;">
                <div class="col-6">

                    <div class="text-center ">
                        <h2 style="text-align: center; font-size: 50px; color: white;">Change Movie</h2>
                        <medium style="color: white;">Get The Best For Audience</medium>
                        
                    </div>
                    <hr>
                    <br>
                </div>
               
                <div class="col-6">
                    <div style="margin-left: 5%; margin-right:5%;">
                        <form method="POST" action="changeProcess.php">
                            <div class="row">
                                <div class="col-6">
                                <div class="form-group form-inline">
                                    <label for="screen_code"><span style="color: white; padding-right:20px;">Screen Code : </span></label>
                                    <select class="form-control " id="screen_code" name="screencode">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                            

                                </div>
                                </div>
                                <div class="col">
                                    <div class="form-group text-right">
                                    <input required type="text" class="form-control" id="movie_title" placeholder="Enter Movie Title" name="movie_title">

                                    </div>
                                </div>
                            </div>
                            

                            
                        
                            
                            

                            <div class="form-group">
                                
                                <input required type="url" class="form-control" id="movie_trailer" placeholder="Enter Trailer Link" name="movie_trailer">
                            </div>
                            <div class="form-group">
                                
                                <input required type="url" class="form-control" id="movie_des" placeholder="Enter Poster Link" name="movie_poster">
                            </div>
                            <div class="form-group">
                                
                                <textarea required maxlength="250" type="text" class="form-control" id="movie_des" placeholder="Enter Movie Description" name="movie_des"></textarea>
                            </div>

                            <div class="for-group">
                                <input type="submit" class="btn btn-primary" name="change_movie" value="Change">
                            </div>

                            

        
                        </form>
                    </div>
                    

                </div>
                
                
                
              </div>














         <!--Footer-->
         <?php include('footer.php'); ?>

    </body>
</html>