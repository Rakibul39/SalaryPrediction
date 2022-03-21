<?php include('includes/header.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<?php 
    //AUthorization - Access COntrol
    //CHeck whether the user is logged in or not
    if(!isset($_SESSION['email'])) //IF user session is not set
    {
        //User is not logged in
        //Redirect to login page with message
        $_SESSION['no-login-message'] = "<div class='error text-center'>Please login to Use the service.</div>";
        //Redirect to Login Page
        header('location:'.SITEURL.'login.php');
    }
?>
<style>
         .navbar{
    width: 100%;
    margin: auto;
    height: 75px;
    background: linear-gradient(to top, rgba(64, 68, 64, 0.8),rgba(126, 122, 126, 0.6));
    
    
}
.btn{
    padding: 0.6rem 1.3rem;
  background-color: #fff;
  border: 2px solid #fafafa;
  font-size: 0.95rem;
  color: #1abc9c;
  line-height: 1;
  border-radius: 25px;
  outline: none;
  cursor: pointer;
  transition: 0.3s;
  margin-left: 380px;;
}
.main{
    width: 100%;
    background: linear-gradient(to top, rgba(0, 0, 0, 0.6),rgba(0, 0, 0, 0.546));
    background-position: center;
    background-size: cover;
    height: 500vh;
}
h2{
    color:white;
}

.menu{
    width: 1000px;
    float: left;
    height: 70px;
    margin-left:100px;
}
.job_form{
    width: 1150px;
    height: auto;
    background:linear-gradient(132deg, rgba(94, 226, 243, 0.6),rgba(121, 94, 243, 0.6));
    position: absolute;
    transform: translate(0%,-5%);
    border-radius: 10px;
    padding: 25px;
    left: 160px;
    top: 140px;
    margin-top:40px;
}
.input_field{
    background: transparent;
    border: 1px solid #646460;
    padding-left: 10px;
    border-radius: 5px;
    color: rgb(255, 255, 255);
    font-size: 15px;
    letter-spacing: 1px;
    margin-top:10px;
    
}

.box-8{
    margin-left: 200px;
	width: 750px;
	background-color: #272c4a;
	height: auto;
    margin-bottom: 10px;
	
}
.content-box{
	padding: 20px;
}
.content-box p{
	margin: 0px;
    font-size: 28px;
    color: #f7403b;
}
.content-box p span{
	float: right;
    background-color: #ddd;
    padding: 3px 10px;
    font-size: 15px;
}
.btn4 {
  padding: 0.6rem 1.3rem;
  background-color: #00ccff;
  border: 2px solid #fafafa;
  font-size: 0.95rem;
  color: #000;
  line-height: 1;
  border-radius: 10px;
  outline: none;
  cursor: pointer;
  transition: 0.3s;
  margin-top:25px;
  margin-left: 320px;;
}

.btn4:hover {
  background-color: transparent;
  color: #fff;
}
    </style>  
     <div class= "job_form" >
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

                                                    if(isset($_POST['submit'])){
                                                        $session_user=$_SESSION['email'];
                                                        $select_user = "SELECT * FROM user_info WHERE email = '$session_user'";
                                                        $run_cust = mysqli_query($con,$select_user);
                                                        $row_user = mysqli_fetch_array($run_cust);
                                                        $username = $row_user['username'];
                                                        
                                                        $email = $row_user['email'];
                                                        
                                                        $phone_no = $row_user['phone_no'];
                                                
                                                        //$job_no = $id;
                                                        //$result = mysqli_query($con,$job_id);
                                                        //$job_no = $result('id');
                                                
                                                        $errors = array();
                                                
                                                        $u = "SELECT username FROM job_apply WHERE username = '$username' AND job_no = '$id' ";
                                                        //echo "$username";
                                                        $uu = mysqli_query($con, $u);
                                                        
                                                        if(empty($username)){
                                                            $errors['u']= "apply for job";
                                                        }else if(mysqli_num_rows($uu)>0){
                                                            $errors['u']= "already applied";
                                                        }
                                                
                                                        
                                                        //sql quary
                                                        if(count($errors)==0){
                                                          
                                                
                                                            $sql2 = "INSERT INTO job_apply ( `id`, `job_no`, `username`, `email`, `phone-no`) 
                                                            VALUES (NULL, '$id','$username','$email','$phone_no')";
                                                            $res = mysqli_query($con, $sql2);
                                                
                                                            //$res = mysqli_query($con, $sql2) or die(mysqli_error());
                                                            echo "Apply successful";
                                                            //echo"<script>alert('Apply successfull')</script>";
                                                            echo "<script>Swal.fire('Apply successfull')</script>";

                                                            echo"<script> window.open('job_offer.php','_self')</script>";

                                                
                                                            //Check whether data is inserted or not
                                                        }
                                                            else
                                                            {
                                                                //FAiled to Insert DAta
                                                                //echo "You are already applied for this job";
                                                                echo "<script>Swal.fire('You are already applied for this job')</script>";
                                                                
                                                            }
                                                        
                                                    }
                                                
                                                ?>
                        
                                            

        <form action="" method="POST">

            <div class="box-8">
                <div class="content-box">
                    <p>Job Offer:  <span><?php echo $id; ?> </span></p>
                    <h2>Job Type: <span><?php echo $title; ?> </span></h2>
                    <input class = "input_field" style = "width:400px;height:200px" name="questions" value="<?php echo $body; ?>"></input>
                    <button  class = "btn4" name="submit" type="submit">Apply</button>
                </div>
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


     </div>   

<?php include('includes/footer.php'); ?>