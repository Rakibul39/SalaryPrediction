<?php include('header.php'); ?>
<p>Feedback Messages</p>
<table class="content-table1">
                                            <tr>
                                                <th>ID</th>
                                                <th>User ID</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Message</th>
                                            </tr>
                                            <?php
                                                $sql = " SELECT * FROM feedback ";

                                                $res = mysqli_query($con, $sql);
                                    
                                                $count = mysqli_num_rows($res);
                                    
                                                if($count>0){
                                                  //category available
                                                  while($rows = mysqli_fetch_assoc($res)){
                                                    $id = $rows['id'];
                                                    $userid = $rows['user_id'];
                                                    $username = $rows['username'];
                                                    $email = $rows['email'];
                                                    $message = $rows['message'];
                                            
                                            ?>

                                            <tr>
                                                <td><?php echo $id; ?></td>
                                                <td><?php echo $userid; ?></td>
                                                <td><?php echo $username; ?></td>
                                                <td><?php echo $email; ?></td>
                                                <td><?php echo $message; ?></td>
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