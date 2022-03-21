<?php include('header.php'); ?>
<?php
                                                $sql = " SELECT * FROM job_offer ";

                                                $res = mysqli_query($con, $sql);
                                    
                                                $count = mysqli_num_rows($res);
                                    
                                                if($count>0){
                                                  //category available
                                                  while($rows = mysqli_fetch_assoc($res)){
                                                    $id = $rows['id'];
                                                    $title = $rows['title'];
                                                    $body = $rows['details'];
                                                    ?>
<form action="" method="POST" >

            
                <div class="content-box"style="margin-bottom:10px;border:1px solid #000">
                    <p>Job Offer:  <span><?php echo $id; ?> </span></p>
                    <h2>Job Type: <span><?php echo $title; ?> </span></h2>
                    <input class = "input_field" style = "width:400px;height:200px" name="questions" value="<?php echo $body; ?>"></input>
                    <button  class = "btn" name="submit" type="submit"><a href="edit.php?id=<?php echo $id?>">EDIT</a></button>

                </div>
            
        </form>
        <?php 
                                                }
                                            }
                                            else{
                                                echo "You are already applied for this job";

                                                echo "Not avilable";
                                            }
        ?>  
        
        
<?php include('footer.php'); ?>