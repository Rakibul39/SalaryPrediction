<?php include('header.php'); ?>
<style>
.content-table11 {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 850px;
  height: auto;
  position: relative;
    left:0px;
  
}
table{
    position: relative;
    left:0px;
}
.col-div1-8{
  width: 100%;
  height: auto;
  position: relative;
  right: 600px;
  top: 70px;
  
  }
  .box-8{
	width: 1000px;
	background-color: #272c4a;
	height: auto;
	
}
</style>
<p>Users Info:</p>
<table class="content-table11">
                                            <tr>
                                                <th>User ID.</th>
                                                <th>Full Name</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Phone No.</th>
                                                <th>Gender</th>
                                            </tr>
                                            <?php
                                                $sql = " SELECT * FROM user_info ";

                                                $res = mysqli_query($con, $sql);
                                    
                                                $count = mysqli_num_rows($res);
                                    
                                                if($count>0){
                                                  //category available
                                                  while($rows = mysqli_fetch_assoc($res)){
                                                    $userid = $rows['Id'];
                                                    $fullname = $rows['fullname'];
                                                    $username = $rows['username'];
                                                    $email = $rows['email'];
                                                    $phoneNo = $rows['phone_no'];
                                                    $gender = $rows['gender'];
                                            
                                            ?>

                                            <tr>
                                                <td><?php echo $userid; ?></td>
                                                <td><?php echo $fullname; ?></td>
                                                <td><?php echo $username; ?></td>
                                                <td><?php echo $email; ?></td>
                                                <td><?php echo $phoneNo; ?></td>
                                                <td><?php echo $gender; ?></td>
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