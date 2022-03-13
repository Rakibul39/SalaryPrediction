<?php include('database/db.php') ?>
        
  <?php
    if(isset($_POST['submit'])){
        //data from form
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        //$image_name = $_POST['image_name'];
        $phone_no = $_POST['phone_no'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];

        

        $errors = array();

        $u = "SELECT username FROM user_info WHERE username = '$username' ";
        echo "$username";
        $uu = mysqli_query($con, $u);

        $e = "SELECT email FROM user_info WHERE email = '$email' ";
        echo "$email";
        $ee = mysqli_query($con, $e);
        
        if(empty($username)){
            $errors['u']= "username required";
        }else if(mysqli_num_rows($uu)>0){
            $errors['u']= "username exits";
        }

        if(empty($email)){
            $errors['e']= "email required";
        }else if(mysqli_num_rows($ee)>0){
            $errors['e']= "email exits";
        }
        if(empty($password)){
            $errors['p']= "password required";
        }

        
        //sql quary
        if(count($errors)==0){
          

            $sql = "INSERT INTO user_info ( `fullname`, `username`, `email`, `phone_no`, `password`, `gender`) 
            VALUES ('$fullname','$username','$email','$phone_no','$password','$gender')";
            

            $res = mysqli_query($con, $sql) or die(mysqli_error());

            //Check whether data is inserted or not
            if($res==TRUE){
                    //Data Inserted
                    //echo "Data Inserted";
                    //Create a Session Variable to Display Message
                    $_SESSION['add'] = "<div class='success'>User Added Successfully.</div>";
                    //Redirect Page to Manage Admin
                    //header("location:".SITEURL.'index.php');
                    echo"<script> window.open('index.php','_self')</script>";
            }
            else
            {
                //FAiled to Insert DAta
                //echo "Faile to Insert Data";
                //Create a Session Variable to Display Message
                $_SESSION['add'] = "<div class='error'>Failed to Add .</div>";
                //Redirect Page to Add Admin
                echo"<script> window.open('signUp.php','_self')</script>";
            }
        }
    }

?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form </title>--->
    <link rel="stylesheet" href="style2.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="" method="POST">
      
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="fullname" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="username" placeholder="Enter your username" require>
            <p><?php if(isset($errors['u'])) echo $errors['u']; ?></p>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" placeholder="Enter your email"require>
            <p><?php if(isset($errors['e'])) echo $errors['e']; ?></p>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="phone_no" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" name="confirm_pass" placeholder="Confirm your password" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1" value="male">
          <input type="radio" name="gender" id="dot-2" value="female">
          <input type="radio" name="gender" id="dot-3" value="other">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit"  name="submit"value="Register">
        </div>
        <p class="link">Already have an account<br>
            <a href="login.php">Sign in </a> now</a></p>
      </form>

      
    </div>
  </div>

</body>
</html>
