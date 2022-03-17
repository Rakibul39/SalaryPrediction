<?php include('header.php'); ?>
<p>JavaScript-Questions</p>
                                    <?php 
                                            //CHeck whether id is set or not 
                                            if(isset($_GET['id']))
                                            {
                                                //Get all the details
                                                $id = $_GET['id'];

                                                $sql2 = "SELECT * FROM js_q WHERE Id=$id";
                                                //execute the Query
                                                $res2 = mysqli_query($con, $sql2);

                                                //Get the value based on query executed
                                                $row2 = mysqli_fetch_assoc($res2);

                                                //Get the Individual Values of Selected 
                                                $questions = $row2['questions'];
                                                

                                            }
                                            else
                                            {
                                                //Redirect to 
                                                header('location:'.SITEURL.'admin/js_question.php');
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
                                                $sql3 = "UPDATE js_q SET 
                                                    questions = '$questions'
                                                    
                                                    WHERE Id=$id
                                                ";

                                                //Execute the SQL Query
                                                $res3 = mysqli_query($con, $sql3);

                                                //CHeck whether the query is executed or not 
                                                if($res3==true)
                                                {
                                                    //Query Exectued and Food Updated
                                                    $_SESSION['update'] = "<div class='success'>Updated Successfully.</div>";
                                                    ?>
                                                    <!--header('location:'.SITEURL.'admin/control-food.php');-->
                                                    echo "<script>window.open('js_question.php','_self')</script>";
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