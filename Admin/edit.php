<?php include('header.php'); ?>
<?php 
$id = $_GET['id'];
                                          $sql = " SELECT * FROM job_offer where id = '$id' ";

                                          $res = mysqli_query($con, $sql);
                              
                                          $count = mysqli_num_rows($res);
                                          if($count>0){
                                            //category available
                                            while($rows = mysqli_fetch_assoc($res)){
                                              $id = $rows['id'];
                                              $title = $rows['title'];
                                              $body = $rows['details'];
                                            }
                                        }
                                        else{
                                            echo "You are already applied for this job";

                                            echo "Not avilable";
                                        }
                                     ?>

                                            <form action="" method="POST">
                                                <table>
                                                        <tr>
                                                            <td>Job Title: </td>
                                                            <td>
                                                            <input class = "input_field" style = "width:400px;height:50px" name="title" value="<?php echo $title; ?>" ></input>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>Job Details: </td>
                                                            <td>
                                                                <input class = "input_field" style = "width:400px;height:200px" name="body" value="<?php echo $body; ?>"></input>
                                                            </td>
                                                            
                                                        </tr>
                                                        <tr>
                                                        <td></td>
                                                        <td>
                                                            <button  class = "btn_update" name="submit" type="submit">Update</button>
                                                            <button  class = "btn_update" name="delete" type="submit">Delete</button>
                                                        </td>

                                                        </tr>
                                                </table>
                                            </form>
                                            <?php 
                                        
                                        if(isset($_POST['submit']))
                                        {
                                            //echo "Button Clicked";

                                            //1. Get all the details from the form
                                            $title = $_POST['title'];
                                            $details = $_POST['body'];

                                            //2. Upload the image if selected

                                            //CHeck whether upload button is clicked or not                

                                            //4. Update the Food in Database
                                            $sql3 = "UPDATE job_offer SET 
                                                title = '$title', details = '$details'
                                                
                                                WHERE id=$id
                                            ";

                                            //Execute the SQL Query
                                            $res3 = mysqli_query($con, $sql3);

                                            //CHeck whether the query is executed or not 
                                            if($res3==true)
                                            {
                                                //Query Exectued and Food Updated
                                                $_SESSION['update'] = "<div class='success'>Successfully Updated.</div>";
                                                ?>
                                                <!--header('location:'.SITEURL.'admin/control-food.php');-->
                                                <!--<script>window.location.href='http://localhost/Smart-Restaurant-and-Delivery/admin/control-food.php';</script>-->
                                                echo "<script>window.open('job_edit.php','_self')</script>";
                                                <?php
                                            }
                                            else
                                            {
                                                //Failed to Update Food
                                                $_SESSION['update'] = "<div class='error'>Failed to Update.</div>";
                                                header('location:'.SITEURL.'edit.php');
                                            }

                                            
                                        }
                                    
                                    ?>
                                    <?php
        if(isset($_POST['delete']))
        {
            $sql3 = "DELETE FROM job_offer WHERE `id` = '$id'";

                                            //Execute the SQL Query
                                            $res3 = mysqli_query($con, $sql3);

                                            //CHeck whether the query is executed or not 
                                            if($res3==true)
                                            {
                                                //Query Exectued and Food Updated
                                                $_SESSION['update'] = "<div class='success'>Successfully deleted.</div>";
                                                ?>
                                                echo "<script>window.open('job_edit.php','_self')</script>";
                                                <?php
                                            }
                                            else
                                            {
                                                //Failed to Update Food
                                                $_SESSION['update'] = "<div class='error'>Failed to delete.</div>";
                                                header('location:'.SITEURL.'edit.php');
                                            }

        }
        ?>
<?php include('footer.php'); ?>