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
.form2{
    width: 250px;
    height: 280px;
    background:linear-gradient(135deg, #000 , #000 );
    position: absolute;
    top: 200px;
    left: 500px;
    transform: translate(0%,-5%);
    border-radius: 10px;
    padding: 25px;
}

.form2 h2{
    width: 220px;
    font-family: sans-serif;
    text-align: center;
    color: #fff;
    font-size: 22px;
    /*background-color: rgba(100, 235, 217, 0.438);*/
    border-radius: 10px;
    margin: 2px;
    padding: 8px;
}

.form2 input{
    width: 240px;
    height: 35px;
    background: transparent;
    border-bottom: 1px solid #00ccff;
    border-top: none;
    border-right: none;
    border-left: none;
    color: #fff;
    font-size: 15px;
    letter-spacing: 1px;
    margin-top: 30px;
    font-family: sans-serif;
}

.form2 input:focus{
    outline: none;
}

::placeholder{
    color: #fff;
    font-family: Arial;
}
</style>
<head>
    <title>login</title>
    <link rel="stylesheet" href="../style.css">
    <?php include('../database/db.php'); ?>
</head>

<body>
<div class="main">
        <div class="content">
            <h2>Welcome to Predicto</h2>
            <h3>a salary prediction medium</h3>
                <form class="form2" method="POST">
                    <h2>Admin Login</h2>
                    <input type="text" name="username" placeholder="Enter Username Here" required>
                    <input type="password" name="password" placeholder="Enter Password Here" required>
                    <button class="btnn" type="submit" name="login_admin">Login</button>

                </form>
                <?php 

//CHeck whether the Submit Button is Clicked or NOt
if(isset($_POST['login_admin']))
{
    //Process for Login
    //1. Get the Data from Login form
    $username = $_POST['username'];
    $password = $_POST['password'];
    //$username = mysqli_real_escape_string($conn, $_POST['username']);
    
    //$raw_password = ($_POST['password']);
    //$password = mysqli_real_escape_string($conn, $raw_password);

    //2. SQL to check whether the user with username and password exists or not
    $sql = "SELECT * FROM adminlogin WHERE username='$username' AND password='$password'";

    //3. Execute the Query
    $res = mysqli_query($con, $sql);
    
    //4. Count rows to check whether the user exists or not
    $count = mysqli_num_rows($res);

    if($count==1)
    {
        //User Available and Login Success
        $_SESSION['login'] = "<div class='success'>Login Successful.</div>";
        $_SESSION['username'] = $username; //TO check whether the user is logged in or not and logout will unset it

        //Redirect to HOme Page/Dashboard
        //echo"<script>alert('login successfull')</script>";
        
        echo"<script> window.open('admin panel.php','_self')</script>";
    }
    else
    {
        //User not Available and Login FAil
        $_SESSION['login'] = "<div class='error text-center'>Username or Password did not match.</div>";
        //Redirect to HOme Page/Dashboard
        
        echo"<script> window.open('admin_login.php','_self')</script>";
    }


}

?>
            </div>
    </div>
                        <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>

</html>