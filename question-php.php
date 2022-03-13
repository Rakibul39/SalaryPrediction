<?php include('database/db.php'); ?>
<?php 
    //AUthorization - Access COntrol
    //CHeck whether the user is logged in or not
    if(!isset($_SESSION['email'])) //IF user session is not set
    {
        //User is not logged in
        //Redirect to login page with message
        $_SESSION['no-login-message'] = "<div class='error text-center'>Please login to access Admin Panel.</div>";
        //Redirect to Login Page
        header('location:'.SITEURL.'login.php');
    }
?>
<html lang="en">
<head>
    <title>questions php</title>

    <link rel="stylesheet" href="languages.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="questions.css">
</head>
<body>
<?php
        $session_user=$_SESSION['email'];
        $select_user = "SELECT * FROM user_info WHERE email = '$session_user'";
        $run_cust = mysqli_query($con,$select_user);
        $row_user = mysqli_fetch_array($run_cust);
        $user_id = $row_user['Id'];
    ?>

    <div class="main2">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Predicto</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="languages.php">SERVICE</a></li>
                    <li><a href="#">DESIGN</a></li>
                    <li><a href="#">CONTACT</a></li>
                </ul>
            </div>

        </div> 

        <form class="container" action="" method="POST">
            <h3>PHP</h3>
                <div class="question1">
                    <p>Is php open source language?</p>
                    <input type="radio"  name="q1" id="dot-1" value="1" >Yes
                    <input type="radio" name="q1" id="dot-2" value="0">No
                </div>

                <div class="question1">
                    <p>The data_sunset() function returns the sunset time, is it true?</p>
                    <input type="radio" name="q2" id="dot-1" value="1">Yes
                    <input type="radio" name="q2" id="dot-2" value="0">No
                </div>

                <div class="question1">
                    <p>Which function is used to get ASCII value of a chracter in php?</p>
                    <input type="radio" name="q3" id="dot-1" value="0">val()
                    <input type="radio" name="q3" id="dot-2" value="1">char()
                </div>

                <div class="question1">
                    <p>How many errors levels are available in php?</p>
                    <input type="radio" name="q4" id="dot-1" value="0">15
                    <input type="radio" name="q4" id="dot-2" value="1">16 
                </div>

                <div class="question1">
                    <p>Who is the father of php?</p>
                    <input type="radio" name="q5" id="dot-1" value="1">Drek kolkevi
                    <input type="radio" name="q5" id="dot-2" value="0">Rasmus Lerdoff
                </div>

                <div class="coloum2">
                    <div class="question1">
                        <p>Is error handeling is possible in php?</p>
                        <input type="radio" name="q6" id="dot-1" value="1">Yes
                        <input type="radio" name="q6" id="dot-2" value="0">No
                    </div>

                    <div class="question1">
                        <p>Is php a popular choice for coding blank program?</p>
                        <input type="radio" name="q7" id="dot-1" value="0">Yes
                        <input type="radio" name="q7" id="dot-2" value="1">No 
                    </div>

                    <div class="question1">
                        <p>Do you know about SPL in php?</p>
                        <input type="radio" name="q8" id="dot-1" value="1">Yes
                        <input type="radio" name="q8" id="dot-2" value="0">No 
                    </div>

                    <div class="question1">
                        <p>How many types of filtering are available in php?</p>
                        <input type="radio" name="q9" id="dot-1" value="1">2
                        <input type="radio" name="q9" id="dot-2" value="0">3 
                    </div>

                    <div class="question1">
                        <p>Do you develop any project using php?</p>
                        <input type="radio" name="q10" id="dot-1" value="1">Yes
                        <input type="radio" name="q10" id="dot-2" value="0">No 
                    </div>
                    
                </div>
            <a href="languages.php"><button class="button3" name= "submit" >Submit</button></a>
        </form>
        <?php

    //CHeck whether the button is clicked or not
        if(isset($_POST['submit']))
        {
            if(isset($_POST['q1']))
            {
                $q1 = $_POST['q1'];
            }
            else
            {
                $q1 = "No"; //SEtting the Default Value
            }
            if(isset($_POST['q2']))
            {
                $q2 = $_POST['q2'];
            }
            else
            {
                $q2 = "No"; //SEtting the Default Value
            }
            if(isset($_POST['q3']))
            {
                $q3 = $_POST['q3'];
            }
            else
            {
                $q3 = "No"; //SEtting the Default Value
            }
            if(isset($_POST['q4']))
            {
                $q4 = $_POST['q4'];
            }
            else
            {
                $q4 = "No"; //SEtting the Default Value
            }
            if(isset($_POST['q5']))
            {
                $q5 = $_POST['q5'];
            }
            else
            {
                $q5 = "No"; //SEtting the Default Value
            }
            if(isset($_POST['q6']))
            {
                $q6 = $_POST['q6'];
            }
            else
            {
                $q6 = "No"; //SEtting the Default Value
            }
            if(isset($_POST['q7']))
            {
                $q7 = $_POST['q7'];
            }
            else
            {
                $q7 = "No"; //SEtting the Default Value
            }
            if(isset($_POST['q8']))
            {
                $q8 = $_POST['q8'];
            }
            else
            {
                $q8 = "No"; //SEtting the Default Value
            }
            if(isset($_POST['q9']))
            {
                $q9 = $_POST['q9'];
            }
            else
            {
                $q9 = "No"; //SEtting the Default Value
            }
            if(isset($_POST['q10']))
            {
                $q10 = $_POST['q10'];
            }
            else
            {
                $q10 = "No"; //SEtting the Default Value
            }
            $qx=$q1+$q2+$q3+$q4+$q5+$q6+$q7+$q8+$q9+$q10;
            
            $sql2 = "SELECT user_id FROM language_point WHERE user_id = '$user_id' ";
               $res2 = mysqli_query($con, $sql2);
               $count2 = mysqli_num_rows($res2);
               if($count2>0){
                   echo "already added";
                   $sql3="UPDATE language_point SET php='$qx' WHERE user_id='$user_id' ";
                   $res3 = mysqli_query($con, $sql3);
                   echo"<script> window.open('languages.php','_self')</script>";
                 }
               else{
                   $sql4="INSERT INTO `language_point`(`user_id`, `php`) VALUES('$user_id','$qx')";
                   $res4 = mysqli_query($con, $sql4);
                   echo"<script> window.open('languages.php','_self')</script>";
               }

        }
        
            ?>

    </div>
    
</body>
</html>