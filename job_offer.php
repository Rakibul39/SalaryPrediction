<?php include('includes/header.php'); ?>
<style>
         .navbar{
    width: 100%;
    margin: auto;
    height: 75px;
    background: linear-gradient(to top, rgba(64, 68, 64, 0.8),rgba(126, 122, 126, 0.6));
    
    
}
.btn{
    width: 100px;
    height: 40px;
    background: #00ccff;
    border: 2px solid #00ccff;
    margin-top: 13px;
    margin-left: 300px;
    color: #fff;
    font-size: 18px;
    border-bottom-right-radius: 5px;
    border-bottom-right-radius: 5px;
    transition: 0.2s ease;
    cursor: pointer;
}
.main{
    width: 100%;
    background: linear-gradient(to top, rgba(0, 0, 0, 0.6),rgba(0, 0, 0, 0.546));
    background-position: center;
    background-size: cover;
    height: 200vh;
}
h2{
    color:white;
}

.menu{
    width: 1000px;
    float: left;
    height: 70px;
    margin-left:100px;
}
.job_form{
    width: 1150px;
    height: auto;
    background:linear-gradient(132deg, rgba(94, 226, 243, 0.6),rgba(121, 94, 243, 0.6));
    position: absolute;
    transform: translate(0%,-5%);
    border-radius: 10px;
    padding: 25px;
    left: 160px;
    top: 140px;
}
.input_field{
    background: transparent;
    border: 1px solid #646460;
    padding-left: 10px;
    border-radius: 5px;
    color: rgb(255, 255, 255);
    font-size: 15px;
    letter-spacing: 1px;
    margin-top:10px;
    
}

.box-8{
    margin-left: 200px;
	width: 750px;
	background-color: #272c4a;
	height: auto;
    margin-bottom: 10px;
	
}
.content-box{
	padding: 20px;
}
.content-box p{
	margin: 0px;
    font-size: 28px;
    color: #f7403b;
}
.content-box p span{
	float: right;
    background-color: #ddd;
    padding: 3px 10px;
    font-size: 15px;
}
    </style>  
     <div class= "job_form" >
     <?php
                                                $sql = " SELECT * FROM job_offer ";

                                                $res = mysqli_query($con, $sql);
                                    
                                                $count = mysqli_num_rows($res);
                                    
                                                if($count>0){
                                                  //category available
                                                  while($rows = mysqli_fetch_assoc($res)){
                                                    $id = $rows['id'];
                                                    $title = $rows['title'];
                                                    $body = $rows['details'];

                                            
                                            ?>
        <form action="" method="POST">

            <div class="box-8">
                <div class="content-box">
                    <p>Job Offer:  <span><?php echo $id; ?> </span></p>
                    <h2>Job Type: <span><?php echo $title; ?> </span></h2>
                    <input class = "input_field" style = "width:400px;height:200px" name="questions" value="<?php echo $body; ?>"></input>
                    <button  class = "btn" name="submit" type="submit">Apply</button>
                </div>
            </div>
        </form>
        <?php 
                                                }
                                            }
                                            else{
                                                echo "Not avilable";
                                            }
                                            ?>   

     </div>   

<?php include('includes/footer.php'); ?>