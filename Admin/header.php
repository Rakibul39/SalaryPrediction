<?php include('../database/db.php'); ?>
<?php 
    //AUthorization - Access COntrol
    //CHeck whether the user is logged in or not
    if(!isset($_SESSION['username'])) //IF user session is not set
    {
        //User is not logged in
        //Redirect to login page with message
        $_SESSION['no-login-message'] = "<div class='error text-center'>Please login to Use the service.</div>";
        //Redirect to Login Page
		echo"<script> window.open('admin_login.php','_self')</script>";
        //header('location:'.SITEURL.'admin_login.php');
    }
?>

<!Doctype HTML>
	<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="style.css" type="text/css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
    <style>
    
       
    </style>


	<body>
		
		<div id="mySidenav" class="sidenav">
		    <p class="logo"><span>S</span>-Predicto</p>
	        <a href="admin panel.php" class="icon-a"><i class="fa fa-dashboard icons"></i>   Dashboard</a>

	        <div class="dropdown">
                <a href="#"class="icon_a"><i class="fa fa-list icons"></i>   Questions</a>
                    <div class="dropdown-content">
                        <a href="question-java.php">Java</a>
                        <a href="python_question.php">Python</a>
                        <a href="c_question.php">C</a>
                        <a href="cplus_question.php">C++</a>
                        <a href="csharp_question.php">C#</a>
                        <a href="php_question.php">PHP</a>
                        <a href="html_question.php">HTML</a>
                        <a href="css_question.php">CSS</a>
                        <a href="js_question.php">JavaScript</a>
                        <a href="swift_question.php">Swift</a>
                        <a href="kotlin_question.php">Kotlin</a>
                        <a href="ruby_question.php">Ruby</a>
                        <a href="go_question.php">GoLang</a>
                        <a href="dart_question.php">Dart</a>
                    </div>
	        </div>
	            <a href="user_info.php"class="icon-a"><i class="fa fa-users icons"></i>   Users</a>

				<div class="dropdown">
					<a href="#"class="icon-a"><i class="fa fa-user icons"></i>   Job Offer</a>
					<div class="dropdown-content">
						<a href="post_job.php">Post Job</a>
						<a href="job_edit.php">Job Edit</a>
					</div>
				</div>
				<a href="feedback.php"class="icon-a"><i class="fa fa-envelope"></i>   Feedback</a>
	    </div>
	        <div id="main">

		        <div class="head">
			        <div class="col-div-6">
	                    <span style="font-size:30px;cursor:pointer; color: white;" class="nav"  >☰ Dashboard</span>
	                    <span style="font-size:30px;cursor:pointer; color: white;" class="nav2"  >☰ Dashboard</span>
	                </div>
	
		        <div class="col-div-6">
		            <div class="profile">
			            <p>Admin <span>UI / UX DESIGNER</span></p>
		            </div>

		
		
                        <div class="col-div1-8">
                            <div class="box-8">
                                <div class="content-box">