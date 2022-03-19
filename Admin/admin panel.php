<!Doctype HTML>
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
	  <a href="#"class="icon-a"><i class="fa fa-users icons"></i>   Users</a>

	  <div class="dropdown">
	  	<a href="#"class="icon-a"><i class="fa fa-user icons"></i>   Job Offer</a>
	  	<div class="dropdown-content">
			<a href="post_job.php">Post Job</a>
			<a href="#">Job Edit</a>
			<a href="#">Job Delete</a>
		</div>
	  </div>

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
			<div class="box">
				<p>67<br/><span>Customers</span></p>
				<i class="fa fa-users box-icon"></i>
			</div>
		</div>
		<div class="col-div-3">
			<div class="box">
				<p>88<br/><span>Projects</span></p>
				<i class="fa fa-list box-icon"></i>
			</div>
		</div>
		<div class="col-div-3">
			<div class="box">
				<p>99<br/><span>Orders</span></p>
				<i class="fa fa-shopping-bag box-icon"></i>
			</div>
		</div>
		<div class="col-div-3">
			<div class="box">
				<p>78<br/><span>Tasks</span></p>
				<i class="fa fa-tasks box-icon"></i>
			</div>
		</div>
		<div class="clearfix"></div>
		<br/><br/>
		<div class="col-div-8">
			<div class="box-8">
			<div class="content-box">
				<p>Top Users <span>Sell All</span></p>
				<br/>
				<table>
					<tr>
						<th>Name</th>
						<th>Phone No.</th>
						<th>Salary</th>
					</tr>
					<tr>
						<td>Alfreds Futterkiste</td>
						<td>Maria Anders</td>
						<td>Germany</td>
					</tr>
					<tr>
						<td>Centro comercial Moctezuma</td>
						<td>Francisco Chang</td>
						<td>Mexico</td>
					</tr>
					<tr>
						<td>Ernst Handel</td>
						<td>Roland Mendel</td>
						<td>Austria</td>
					</tr>
					<tr>
						<td>Island Trading</td>
						<td>Helen Bennett</td>
						<td>UK</td>
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