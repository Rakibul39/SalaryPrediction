<?php include('header.php'); ?>
<p>C-Question</p>
                                    <?php 
                                            //CHeck whether id is set or not 
                                            if(isset($_GET['id']))
                                            {
                                                //Get all the details
                                                $id = $_GET['id'];

                                                //SQL Query to Get the Selected Food
                                                $sql2 = "SELECT * FROM c_q WHERE Id=$id";
                                                //execute the Query
                                                $res2 = mysqli_query($con, $sql2);

                                                //Get the value based on query executed
                                                $row2 = mysqli_fetch_assoc($res2);

                                                //Get the Individual Values of Selected Food
                                                $questions = $row2['question'];
                                                

                                            }
                                            else
                                            {
                                                //Redirect to Manage Food
                                                header('location:'.SITEURL.'admin/c_question.php');
                                            }
                                     ?>

                                            <form action="" method="POST">
                                                <table>
                                                        <tr>
                                                            <td>ID: </td>
                                                            <td>
                                                                <?php echo $id; ?>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>Question: </td>
                                                            <td>
                                                                <input class = "input_field" style = "width:400px;height:50px" name="questions" value="<?php echo $questions; ?>"></input>
                                                            </td>
                                                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                                            <td>
                                                                <button  class = "btn_update" name="submit" type="submit">update</button>
                                                            </td>
                                                        </tr>
                                                </table>
                                            </form>
                                        <?php 
                                        
                                            if(isset($_POST['submit']))
                                            {
                                                //echo "Button Clicked";

                                                //1. Get all the details from the form
                                                $id = $_POST['id'];
                                                $questions = $_POST['questions'];

                                                //2. Upload the image if selected

                                                //CHeck whether upload button is clicked or not                

                                                //4. Update the Food in Database
                                                $sql3 = "UPDATE c_q SET 
                                                    question = '$questions'
                                                    
                                                    WHERE Id=$id
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
                                                    echo "<script>window.open('c_question.php','_self')</script>";
                                                    <?php
                                                }
                                                else
                                                {
                                                    //Failed to Update Food
                                                    $_SESSION['update'] = "<div class='error'>Failed to Update.</div>";
                                                    header('location:'.SITEURL.'update.php');
                                                }

                                                
                                            }
                                        
                                        ?>
<?php include('footer.php'); ?>