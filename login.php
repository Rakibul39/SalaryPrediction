<?php include('database/db.php') ?>

<html lang="en">
<style>
body {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 10px;
    /*background: linear-gradient(135deg, #71d8de, #8b70ee);*/
    background: linear-gradient(to top, rgba(0, 0, 0, 0.6)50%, rgba(0, 0, 0, 0.6)50%), url(2.png);
}

.content h2 {
    font-family: 'Times New Roman';
    font-size: 65px;
    color: #00ccff;
    padding-left: 20px;
    margin-top: 9%;
    letter-spacing: 2px;
}

.content h3 {
    color: #fff;
    font-size: 36px;
    padding-left: 200px;
}
</style>

<head>
    <title>login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
                            if(isset($_SESSION['login'])){

                                echo $_SESSION['login'];
                                unset($_SESSION['login']);
                            }
                        ?>

    <div class="main">
        <div class="content">
            <h2>Welcome to Predicto</h2>
            <h3>a salary prediction medium</h3>
            <h1>Salary Prediction & <br><span>Programming languages</span> <br>Knowledge Test</h1>
            <p class="par">Using These website you can easily predict your salary based on programming languages <br>
                that you know.
                You can also know how much knowledge you have in each programming languages<br> for these services you
                just need to login first</p>

            <form class="form" method="POST">
                <h2>Login Here</h2>
                <input type="email" name="email" placeholder="Enter Email Here" required>
                <input type="password" name="password" placeholder="Enter Password Here" required>
                <button class="btnn" type="submit" name="login_user">Login</button>

                <p class="link">Don't have an account<br>
                    <a href="signUp.php">Sign up </a> here</a>
                </p>
                <p class="liw">Log in with</p>

                <div class="icons">
                    <a href="#">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-google"></ion-icon>
                    </a>
                    <a href="#">
                        <ion-icon name="logo-skype"></ion-icon>
                    </a>
                </div>

                        </form>
            <?php 

    //CHeck whether the Submit Button is Clicked or NOt
    if(isset($_POST['login_user']))
    {
        //Process for Login
        //1. Get the Data from Login form
        $email = $_POST['email'];
        $password = $_POST['password'];
        //$username = mysqli_real_escape_string($conn, $_POST['username']);
        
        //$raw_password = ($_POST['password']);
        //$password = mysqli_real_escape_string($conn, $raw_password);

        //2. SQL to check whether the user with username and password exists or not
        $sql = "SELECT * FROM user_info WHERE email='$email' AND password='$password'";

        //3. Execute the Query
        $res = mysqli_query($con, $sql);
        
        //4. Count rows to check whether the user exists or not
        $count = mysqli_num_rows($res);

        if($count==1)
        {
            //User Available and Login Success
            $_SESSION['login'] = "<div class='success'>Login Successful.</div>";
            $_SESSION['email'] = $email; //TO check whether the user is logged in or not and logout will unset it

            //Redirect to HOme Page/Dashboard
            //echo"<script>alert('login successfull')</script>";
            
            echo"<script> window.open('index.php','_self')</script>";
        }
        else
        {
            //User not Available and Login FAil
            $_SESSION['login'] = "<div class='error text-center'>Username or Password did not match.</div>";
            //Redirect to HOme Page/Dashboard
            
            echo"<script> window.open('login.php','_self')</script>";
        }


    }

?>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>

</html>