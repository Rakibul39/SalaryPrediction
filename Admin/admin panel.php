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
	<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="style.css" type="text/css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>


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
				<p>Home</p>
			</div>
		<div class="profile">
			<p>Admin <span>UI / UX DESIGNER</span></p>
		</div>
	</div>
		<div class="clearfix"></div>
	</div>

		<div class="clearfix"></div>
		<br/>
		
		<div class="col-div-3">
			<?php 
			$sql11 = " SELECT * FROM user_info ";

			$res11 = mysqli_query($con, $sql11);

			$count11 = mysqli_num_rows($res11); 
			?>
			<div class="box">
				<p><?php  echo $count11?><br/><span>Customers</span></p>
				<i class="fa fa-users box-icon"></i>
			</div>
		</div>
		<div class="col-div-3">
			<div class="box">
				<p>48<br/><span>Tasks</span></p>
				<i class="fa fa-tasks box-icon"></i>
			</div>
		</div>
		<div class="clearfix"></div>
		<br/><br/>
		<div class="col-div-8">
			<div class="box-8">
			<div class="content-box">
				<p>Top Users </p>
				<br/>
				<table>
					<tr>
						<th>Name</th>
						<th>Phone No.</th>
						<th>User Name</th>
					</tr>
					<tr>
					<?php
                    $sql = "SELECT * FROM user_info WHERE Id=1";
                    $res = mysqli_query($con,$sql);
                    $qu = mysqli_fetch_array($res);
                    $qu1 = $qu['fullname'];
					$qu2 = $qu['phone_no'];
					$qu3 = $qu['username'];

                ?>
						<td><?php echo $qu1; ?></td>
						<td><?php echo $qu2; ?></td>
						<td><?php echo $qu3; ?></td>
					</tr>
					<tr>
					<?php
                    $sql2 = "SELECT * FROM user_info WHERE Id=26";
                    $res3 = mysqli_query($con,$sql2);
                    $cu = mysqli_fetch_array($res3);
                    $cu1 = $cu['fullname'];
					$cu2 = $cu['phone_no'];
					$cu3 = $cu['username'];

                ?>
						<td><?php echo $cu1; ?></td>
						<td><?php echo $cu2; ?></td>
						<td><?php echo $cu3; ?></td>
					</tr>
					<tr>
					<?php
                    $sql3 = "SELECT * FROM user_info WHERE Id=27";
                    $res1 = mysqli_query($con,$sql3);
                    $au = mysqli_fetch_array($res1);
                    $au1 = $au['fullname'];
					$au2 = $au['phone_no'];
					$au3 = $au['username'];

                ?>
						<td><?php echo $au1; ?></td>
						<td><?php echo $au2; ?></td>
						<td><?php echo $au3; ?></td>
					</tr>
					<tr>
					<?php
                    $sql4 = "SELECT * FROM user_info WHERE Id=28";
                    $res2 = mysqli_query($con,$sql4);
                    $bu = mysqli_fetch_array($res2);
                    $bu1 = $bu['fullname'];
					$bu2 = $bu['phone_no'];
					$bu3 = $bu['username'];

                ?>
						<td><?php echo $bu1; ?></td>
						<td><?php echo $bu2; ?></td>
						<td><?php echo $bu3; ?></td>
					</tr>
	  
	  
				</table>
			</div>
		</div>
		</div>	

	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>

	  $(".nav").click(function(){
	    $("#mySidenav").css('width','70px');
	    $("#main").css('margin-left','70px');
	    $(".logo").css('visibility', 'hidden');
	    $(".logo span").css('visibility', 'visible');
	     $(".logo span").css('margin-left', '-10px');
	     $(".icon-a").css('visibility', 'hidden');
	     $(".icons").css('visibility', 'visible');
	     $(".icons").css('margin-left', '-8px');
	      $(".nav").css('display','none');
	      $(".nav2").css('display','block');
	  });

	$(".nav2").click(function(){
	    $("#mySidenav").css('width','300px');
	    $("#main").css('margin-left','300px');
	    $(".logo").css('visibility', 'visible');
	     $(".icon-a").css('visibility', 'visible');
	     $(".icons").css('visibility', 'visible');
	     $(".nav").css('display','block');
	      $(".nav2").css('display','none');
	 });

	</script>

	</body>


	</html>