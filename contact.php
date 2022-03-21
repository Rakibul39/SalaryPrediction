<?php include('database/db.php'); ?>
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
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="contact.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    >
  </script>
  </head>
  <body>
    <div class="main">
      <div class="navbar">
          <div class="icon">
              <h2 class="logo">Predicto</h2>
          </div>

          <div class="menu">
              <ul>
                  <li><a href="index.php">HOME</a></li>
                  <li><a href="#">SERVICE</a></li>
                  <li><a href="SalaryPrediction.php">DirectPredict</a></li>
                  <li><a href="job_offer.php">Job_Offer</a></li>
                  <li><a href="contact.php">CONTACT</a></li>
                  <li>
                    <?php  
                              
                              if(isset($_SESSION['email']))
                              {
                                  echo "<a class='btn' href='logout.php'>Log Out</a>";
                              }
                              else
                              {
                                  echo  "<a class='btn' href='login.php'>Log in</a>";
                              }
                          ?>
                    </li>                        
              </ul>
          </div>
    <div class="container">
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
            Please give some feedback about these website. Tell us where we can improve.
            Your comment is very precious to us. Stay connected.
          </p>

          <div class="info">
            <div class="information">
              <img src="img/location.png" class="icon" alt="" />
              <p>Shajahanpur, Bogura, Bangladesh</p>
            </div>
            <div class="information">
              <img src="img/email.png" class="icon" alt="" />
              <p>rakibulrony39@gmail.com</p>
            </div>
            <div class="information">
              <img src="img/phone.png" class="icon" alt="" />
              <p>+8801773071799</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a style="padding-top: 8px;" href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a style="padding-top: 8px;" href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a style="padding-top: 8px;" href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a style="padding-top: 8px;" href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>
            
          <form action="" autocomplete="on" method="POST">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="username" class="input" />
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <button name="submit" type="submit" class="btn" >Send</button>

          </form>
          <?php

if(isset($_POST['submit'])){
    //data from form
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone'];
    $message = $_POST['message'];

    $session_user=$_SESSION['email'];
    $select_user = "SELECT * FROM user_info WHERE email = '$session_user'";
    $run_cust = mysqli_query($con,$select_user);
    $row_user = mysqli_fetch_array($run_cust);
    $user_id = $row_user['Id'];

    $sql = "INSERT INTO feedback ( `id`,`user_id`,`username`, `email`, `phone_no`, `message`) 
    VALUES ( NULL,'$user_id','$username','$email','$phone_no','$message')";
    $res = mysqli_query($con, $sql);

      if($res==TRUE){

      echo "<script>Swal.fire('Message send successfully')</script>";
      //header("location:".SITEURL.'contact.php');

      //echo"<script> window.open('index.php','_self')</script>";
      }
      else
      {
      echo "<script>Swal.fire('failed to send message')</script>";
      //echo"<script> window.open('index.php','_self')</script>";
      }
}
    ?>
        </div>
      </div>
    </div>
  </div>
</div>
    <script src="app.js"></script>
  </body>

</html>
