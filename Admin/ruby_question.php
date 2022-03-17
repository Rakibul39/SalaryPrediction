<?php include('header.php'); ?>
<p>Ruby-Questions</p>
                                        <table class="content-table1">
                                            <tr>
                                                <th>Question No.</th>
                                                <th>Question Body</th>
                                                <th>Option</th>
                                            </tr>
                                            <?php
                                                $sql = " SELECT * FROM ruby_q ";

                                                $res = mysqli_query($con, $sql);
                                    
                                                $count = mysqli_num_rows($res);
                                    
                                                if($count>0){
                                                  //category available
                                                  while($rows = mysqli_fetch_assoc($res)){
                                                    $id = $rows['Id'];
                                                    $questions = $rows['questions'];
                                            
                                            ?>

                                            <tr>
                                                <td><?php echo $id; ?></td>
                                                <td><?php echo $questions; ?></td>
                                                <td><a href="ruby_update.php?id=<?php echo $id?>">Update</a></td>
                                            </tr>
                                            <?php 
                                                }
                                            }
                                            else{
                                                echo "Not avilable";
                                            }
                                            ?>       
                                           
                                            
            
            
                                        </table>
<?php include('footer.php'); ?>