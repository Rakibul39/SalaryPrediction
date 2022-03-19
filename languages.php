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
<html>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<style>
.container00{
    width: 1150px;
    height: 80vh;
    background:linear-gradient(132deg, rgba(94, 226, 243, 0.6),rgba(121, 94, 243, 0.6));
    position: absolute;
    transform: translate(0%,-5%);
    border-radius: 10px;
    padding: 25px;
    left: 160px;
    top: 120px;
}

.container00 h1{
    font-family: sans-serif;
    font-weight: bold;
    text-align: left;
    color: #fff;
    font-size: 32px;
    /*background-color: rgba(100, 235, 217, 0.438);*/
    border-radius: 10px;
    margin: 2px;
    padding: 8px;
}

.container00 span{
    font-family: bold;
    color: #21c51c;
    font-weight: bold;
    font-size: 25px;
    border: 2px solid;
    border-radius: 8px;
}

.language_points11{
    width: 420px;
    height: 430px;
    background:#fff;
    position: absolute;
    left:680px;
    border-radius: 10px;
    padding: 25px;
    top: 96px;
}
.content-table{
    border-collapse: collapse;
    margin: 25px;
    font-size: 20px;
    min-width: 200px;
    border-radius: 8px 8px 0 0;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.content-table thead tr{
    background-color: #009879;
    color: #fff;
    text-align: left;
    font-weight: bold'
    
}
.content-table th,
.content-table tr{
    padding: 12px 15px;
}
.content-table tbody tr{
    border-bottom: 1px solid #dddd;
}
.content-table tbody tr:nth-of-type(even){
    background-color: #f3f3f3;
}
.content-table tbody tr:last-of-type{
    border-bottom: 2px solid #009879;
}
.content-table tbody tr td{
    padding-left: 10px;
}
.text-center11{
    position: relative;
    left:240px;
    bottom:400px;
}
.text-center11 h3{
    color: #000;
    font-size: 20px;
}
.btn2{
    position: relative;
    width: 140px;
    height: 40px;
    background: #00ccff;
    border: none;
    margin-top: 30px;
    font-size: 18px;
    border-radius: 10px;
    border:1px solid #000;
    cursor: pointer;
    color: #fff;
    transition: 0.4s ease;
    bottom: 150px;
    left: 250px;
}
.btn2:hover{
    background: linear-gradient(135deg, #71b7e6, #9b59b6);
    color: #00ccff;
}
.btn2 a{
    text-decoration: none;
    color: #000;
    font-weight: bold;
}
</style>
<head>
    <title>Languages</title>
    

    <link rel="stylesheet" href="languages.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $session_user=$_SESSION['email'];
        $select_user = "SELECT * FROM user_info WHERE email = '$session_user'";
        $run_cust = mysqli_query($con,$select_user);
        $row_user2 = mysqli_fetch_array($run_cust);
        $user_id = $row_user2['Id'];
        $user_name = $row_user2['username'];

    ?>

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
                        
                    </li>
                    <li><a href="#">DESIGN</a></li>
                    <li><a href="#">CONTACT</a></li>
                </ul>
            </div>

        </div> 

        <div class="container00">
            <h1>Select the Languages</h1>
                <div class="box">
                    <div class="box1">
                        <a href="questions-java.php" class="lname">JAVA</a>
                        <a href="question-python.php" class="lname">PYTHON</a>
                        <a href="question-c++.php" class="lname">C++</a>
                        <a href="question-javascript.php" class="lname">JAVASCRIPT</a>
                        <a href="question-css.php" class="lname">CSS</a>
                        <a href="question-swift.php" class="lname">SWIFT</a>
                        <a href="question-kotlin.php" class="lname">KOTLIN</a>
                    </div>

                    <div class="box2">
                        <a href="question-csharp.php" class="lname">C#</a>
                        <a href="question-c.php" class="lname">C</a>
                        <a href="question-html.php" class="lname">HTML</a>
                        <a href="question-ruby.php" class="lname">RUBY</a>
                        <a href="question-golang.php" class="lname">GOLANG</a>
                        <a href="question-php.php" class="lname">PHP</a>
                        <a href="question-dart.php" class="lname">DART</a>
                    </div>

                    <button class="btnn2" type="submit"><a href="#">Submit</a></button> 
                </div>

                <div class="language_points11">
                    <h2> Languages points for:<span> <?php echo $user_name; ?></span></h2>
                    <form action="" id="salaryPredictForm" method="POST">
                        <table class="content-table">
                            <thead>
                                <tr>
                                    <th>Languages</th>
                                    <th>Points</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                    /*$session_user=$_SESSION['email'];
                                    $select_user = "SELECT * FROM user_info WHERE email = '$session_user'";
                                    $run_cust = mysqli_query($con,$select_user);
                                    $row_user2 = mysqli_fetch_array($run_cust);
                                    $user_id = $row_user2['Id'];*/

                                    $select_ans = "SELECT * FROM language_point WHERE user_id = '$user_id'";
                                    $run_cust2 = mysqli_query($con,$select_ans);
                                    $row_user = mysqli_fetch_array($run_cust2);
                                    $ans_id = $row_user['ans_id'];
                                    

                                    $java = $row_user['java'];
                                    $python = $row_user['python'];
                                    $c_sharp = $row_user['c_hash'];
                                    $c = $row_user['c'];
                                    $c_plus = $row_user['c_plus'];
                                    $html = $row_user['html'];
                                    $js = $row_user['javaScript'];
                                    $css = $row_user['css'];
                                    $go = $row_user['golang'];
                                    $swift = $row_user['swift'];
                                    $kotlin = $row_user['kotlin'];
                                    $php = $row_user['php'];
                                    $dart = $row_user['dart'];
                                    $ruby = $row_user['ruby'];




                                    
                                echo'<tr>
                                    <td>Java</td>
                                    <td>'.$java.'</td>
                                </tr>
                                <tr>
                                    <td>Python</td>
                                    <td>'.$python.'</td>
                                </tr>
                                <tr>
                                    <td>C++</td>
                                    <td>'.$c_plus.'</td>
                                </tr>
                                <tr>
                                    <td>JavaScript</td>
                                    <td>'.$js.'</td>
                                </tr>
                                <tr>
                                    <td>CSS</td>
                                    <td>'.$css.'</td>
                                </tr>
                                <tr>
                                    <td>Swift</td>
                                    <td>'.$swift.'</td>
                                </tr>
                                <tr>
                                    <td>Kotlin</td>
                                    <td>'.$kotlin.'</td>
                                </tr>
                                <tr>
                                    <td>C#</td>
                                    <td>'.$c_sharp.'</td>
                                </tr>
                                <tr>
                                    <td>C</td>
                                    <td>'.$c.'</td>
                                </tr>
                                <tr>
                                    <td>Html</td>
                                    <td>'.$html.'</td>
                                </tr>
                                <tr>
                                    <td>Ruby</td>
                                    <td>'.$ruby.'</td>
                                </tr>
                                <tr>
                                    <td>GoLang</td>
                                    <td>'.$go.'</td>
                                </tr>
                                <tr>
                                    <td>PHP</td>
                                    <td>'.$php.'</td>
                                </tr>
                                <tr>
                                    <td>Dart</td>
                                    <td>'.$dart.'</td>
                                </tr>'
                                
                                ?>
                            <tbody>
                        </table>
                        <div class="text-center11">
                <h3>
                    Predicted Salary: <br><span id="predictedSalary">Null</span>
                </h3>
            </div>
                <button id="predictBtn" type="submit" class="btn2"><a>Predict</a></button>
                    </form>

                    
                </div>
        </div>
    </div>
    
</body>
<script>
        /*var data = '';
        var res = $('#predictedSalary');
        res.text(data);*/

        $(document).ready(function () {
        $("#salaryPredictForm").on("submit", function (event) {
            event.preventDefault();
            var java = '<?=$java?>';
            var c_sharp = '<?=$c_sharp?>';
            var python = '<?=$python?>';
            var c = '<?=$c?>';

            var c_plus = '<?=$c_plus?>';
            var html = '<?=$html?>';
            var js = '<?=$js?>';
            var rubby = '<?=$ruby?>';
            var go = '<?=$go?>';
            var css = '<?=$css?>';
            var swift = '<?=$swift?>';
            var php = '<?=$php?>';
            var kotlin = '<?=$kotlin?>';
            var dart = '<?=$dart?>';

            var body = {
                "java": java,
                "c#": c_sharp,
                "python": python,
                "c": c,
                "c++": c_plus,
                "html": html,
                "javascript": js,
                "rubby": rubby,
                "css": css,
                "go": go,
                "swift": swift,
                "php": php,
                "kotlin": kotlin,
                "dart": dart
            };
            console.log(body);

            /*var url = 'http://127.0.0.1:8000/api/predict/';*/
            var url = 'https://intense-wave-80368.herokuapp.com/api/predict/';

            $.ajax({
                type: "POST",
                url: url,
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                data: JSON.stringify(body),
                success: function (data) {
                    console.log(data);
                    if (data.error === null) {
                        var res = $('#predictedSalary');
                        res.text(data.result);
                        Swal.fire(
                            'Predicted Salary',
                            data.result.toString(),
                            'success'
                        );
                    } else {
                        alert("ajax failed");
                    }
                },
                error: function (data) {
                    console.log(data);
                    alert("ajax failed");
                }
            });

        });
    });
    </script>
</html>