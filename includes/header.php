<?php include('database/db.php'); ?>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Salary Prediction Medium</title>
    <link rel="stylesheet" href="style.css">
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
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">SERVICE</a>
                        <ul class="drop">
                            <li><a href="#">Salary Prediction</a></li>
                            <li><a href="#">Knowledge in Languages</a></li>
                        </ul>
                    </li>
                    <li><a href="SalaryPrediction.php">DESIGN</a></li>
                    <li><a href="#">CONTACT</a></li>
                    
                    <li>
                    <?php  
                              
                              if(isset($_SESSION['email']))
                              {
                                  echo "<a class='btn' href='logout.php'>LogOut</a>";
                              }
                              else
                              {
                                  echo  "<a class='btn' href='login.php'>Log in</a>";
                              }
                          ?>
                    </li>                    
                </ul>
            </div>