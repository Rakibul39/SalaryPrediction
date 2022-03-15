<?php include('../database/db.php'); ?>
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
	        <a href="#" class="icon-a"><i class="fa fa-dashboard icons"></i>   Dashboard</a>

	        <div class="dropdown">
                <a href="#"class="icon_a"><i class="fa fa-list icons"></i>   Questions</a>
                    <div class="dropdown-content">
                        <a href="#">Java</a>
                        <a href="#">Python</a>
                        <a href="#">C</a>
                        <a href="#">C++</a>
                        <a href="#">C#</a>
                        <a href="#">PHP</a>
                        <a href="#">HTML</a>
                        <a href="#">CSS</a>
                        <a href="#">JavaScript</a>
                        <a href="#">Swift</a>
                        <a href="#">Kotlin</a>
                        <a href="#">Ruby</a>
                        <a href="#">GoLang</a>
                        <a href="#">Dart</a>
                    </div>
	        </div>
	            <a href="#"class="icon-a"><i class="fa fa-users icons"></i>   Users</a>
	            <a href="#"class="icon-a"><i class="fa fa-user icons"></i>   Acount</a>

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

		
		
                        <div class="col-div1-8">
                            <div class="box-8">
                                <div class="content-box">
                                    <p>Java-Questions</p>
                                    <?php 
                                            //CHeck whether id is set or not 
                                            if(isset($_GET['id']))
                                            {
                                                //Get all the details
                                                $id = $_GET['id'];

                                                //SQL Query to Get the Selected Food
                                                $sql2 = "SELECT * FROM java_q WHERE Id=$id";
                                                //execute the Query
                                                $res2 = mysqli_query($con, $sql2);

                                                //Get the value based on query executed
                                                $row2 = mysqli_fetch_assoc($res2);

                                                //Get the Individual Values of Selected Food
                                                $questions = $row2['questions'];
                                                

                                            }
                                            else
                                            {
                                                //Redirect to Manage Food
                                                header('location:'.SITEURL.'admin/question-java.php');
                                            }
                                     ?>

                                            <form action="" method="POST">
                                                <table>
                                                        <tr>
                                                            <td>ID: </td>
                                                            <td>
                                                                <?php echo $id; ?>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>Question: </td>
                                                            <td>
                                                                <input class = "input_field" style = "width:400px;height:50px" name="questions" value="<?php echo $questions; ?>"></input>
                                                            </td>
                                                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                                            <td>
                                                                <button  class = "btn_update" name="submit" type="submit">update</button>
                                                            </td>
                                                        </tr>
                                                </table>
                                            </form>
                                        <?php 
                                        
                                            if(isset($_POST['submit']))
                                            {
                                                //echo "Button Clicked";

                                                //1. Get all the details from the form
                                                $id = $_POST['id'];
                                                $questions = $_POST['questions'];

                                                //2. Upload the image if selected

                                                //CHeck whether upload button is clicked or not                

                                                //4. Update the Food in Database
                                                $sql3 = "UPDATE java_q SET 
                                                    questions = '$questions'
                                                    
                                                    WHERE Id=$id
                                                ";

                                                //Execute the SQL Query
                                                $res3 = mysqli_query($con, $sql3);

                                                //CHeck whether the query is executed or not 
                                                if($res3==true)
                                                {
                                                    //Query Exectued and Food Updated
                                                    $_SESSION['update'] = "<div class='success'>Food Updated Successfully.</div>";
                                                    ?>
                                                    <!--header('location:'.SITEURL.'admin/control-food.php');-->
                                                    <!--<script>window.location.href='http://localhost/Smart-Restaurant-and-Delivery/admin/control-food.php';</script>-->
                                                    echo "<script>window.open('question-java.php','_self')</script>";
                                                    <?php
                                                }
                                                else
                                                {
                                                    //Failed to Update Food
                                                    $_SESSION['update'] = "<div class='error'>Failed to Update Food.</div>";
                                                    header('location:'.SITEURL.'update.php');
                                                }

                                                
                                            }
                                        
                                        ?>
                                </div>
                            </div>
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

