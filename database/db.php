
<?php 
    
    session_start();
    
    //Create Constants to Store Non Repeating Values
    define('SITEURL', 'http://localhost/SalaryPrediction/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'predicto_db');
    
    //database connection
    $con = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error()); 
    //selecting database
    $db_select = mysqli_select_db($con, DB_NAME) or die(mysqli_error());

?>