
<html>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<style>    
    .login-form {
        margin: 20px auto;
        font-size: 15px;
    }

        .login-form form {
            margin-bottom: 15px;
            background: #f7f7f7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }

        .login-form h2 {
            margin: 0 0 15px;
        }

    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }

    .btn {
        font-size: 15px;
        font-weight: bold;
	border-radius:10px;
    }

    .vertical_align {
        line-height: 38px
    }

    .icon {
        margin: 0;
        padding: 0;
        height: 30px;
        width: 30px
    }

    .w-75 {
        width: 60% !important;
    }

    .w-25 {
        width: 40% !important;
    }
    .icon2{
    width: 200px;
    float: left;
    height: 80px;
}

.logo2{
    color: #00ccff;
    font-size: 35px;
    font-family: Arial;
    font-weigth:20px;
    padding-left: 20px;
    float: left;
    padding-top: 0px;
    margin-top: 5px
}

ul{
    margin-left: 15px;
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0px;
}

ul li{
    list-style: none;
    margin-left: 50px;
    margin-top: 27px;
    font-size: 14px;
    position: relative;
}

ul li a{
    text-decoration: none;
    color: #fff;
    font-family: Arial;
    font-weight: bold;
    font-size: 16px;
    font-weight: 600;
    letter-spacing: 0.4px;
    transition: 0.4s ease-in-out;
    border:none;
}

ul li a:hover{
    text-decoration: none;
    color: #00ccff;
}

ul li ul{
    display: block;
    position: absolute;
    /*background-color: #a2e969d8;
    background: linear-gradient(to top, rgba(85, 32, 230, 0.932)50%,rgba(255,255,255,0.6)50%);*/
}

ul li ul li{
    display: none;
}

/*ul li ul li a{
    justify-content: left;
    align-items: left;
    padding: 0px;

}*/

ul li:hover ul li{
    display: block;
}
.navbar{
width: 100%;
height: 70px;
background: linear-gradient(to top, rgba(64, 68, 64, 0.8),rgba(64, 68, 64, 0.6));


}
.main{
    width: 100%;
    background: linear-gradient(to top, rgba(0, 0, 0, 0.6),rgba(0, 0, 0, 0.546), url(1.png));
    background-position: center;
    background-size: cover;
 
}
.menu{
width: 1200px;
float: left;
height: 70px;
position: relative;
top:-15px;
}

.btn4 {
  padding: 0.6rem 1.3rem;
  background-color: #fff;
  border: 2px solid #fafafa;
  font-size: 0.95rem;
  color: #1abc9c;
  line-height: 1;
  border-radius: 25px;
  outline: none;
  cursor: pointer;
  transition: 0.3s;
  margin-left: 380px;;
}

.btn4:hover {
  background-color: transparent;
  color: #fff;
}
</style>
<body>
<div class="main">
      <div class="navbar">
          <div class="icon2">
              <h2 class="logo2">Predicto</h2>
          </div>

          <div class="menu">
              <ul>
                  <li><a href="index.php">HOME</a></li>
                  <li><a href="#">SERVICE</a></li>
                  <li><a href="SalaryPrediction.php">Direct Predict</a></li>
                  <li><a href="job_offer.php">Job Offer</a></li>
                  <li><a href="contact.php">CONTACT</a></li>
                  <li>
                    <?php  
                              
                              if(isset($_SESSION['email']))
                              {
                                  echo "<a class='btn4' href='logout.php'>LogOut</a>";
                              }
                              else
                              {
                                  echo  "<a class='btn4' href='login.php'>Log in</a>";
                              }
                          ?>
                    </li>                        
              </ul>
          </div>

<div class="login-form col-md-9 col-sm-12">
    <div class="">
        <form id="salaryPredictForm">
            <h2 class="text-center mb-4">
                Salary Prediction
            </h2>
            <div class="row">
                <div class="form-group d-flex col-md-6">
                    <label class="w-25 vertical_align">
                        <img class="icon" src="svg-icons/java.svg">
                        Java
                    </label>
                    <select class="form-control w-75" id="javaSelect">
                        <option value="0"> 0 </option>
                        <option value="1"> 1 </option>
                        <option value="2"> 2 </option>
                        <option value="3"> 3 </option>
                        <option value="4"> 4 </option>
                        <option value="5"> 5 </option>
                        <option value="6"> 6 </option>
                        <option value="7"> 7 </option>
                        <option value="8"> 8 </option>
                        <option value="9"> 9 </option>
                        <option value="10"> 10 </option>
                    </select>
                </div>

                <div class="form-group d-flex col-md-6">
                    <label class="w-25 vertical_align">
                        <img class="icon" src="svg-icons/c-sharp.svg">
                        C#
                    </label>
                    <select class="form-control w-75" id="csharpSelect">
                        <option value="0"> 0 </option>
                        <option value="1"> 1 </option>
                        <option value="2"> 2 </option>
                        <option value="3"> 3 </option>
                        <option value="4"> 4 </option>
                        <option value="5"> 5 </option>
                        <option value="6"> 6 </option>
                        <option value="7"> 7 </option>
                        <option value="8"> 8 </option>
                        <option value="9"> 9 </option>
                        <option value="10"> 10 </option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group d-flex col-md-6">
                    <label class="w-25 vertical_align">
                        <img class="icon" src="svg-icons/python.svg">
                        Python
                    </label>
                    <select class="form-control w-75" id="pythonSelect">
                        <option value="0"> 0 </option>
                        <option value="1"> 1 </option>
                        <option value="2"> 2 </option>
                        <option value="3"> 3 </option>
                        <option value="4"> 4 </option>
                        <option value="5"> 5 </option>
                        <option value="6"> 6 </option>
                        <option value="7"> 7 </option>
                        <option value="8"> 8 </option>
                        <option value="9"> 9 </option>
                        <option value="10"> 10 </option>
                    </select>
                </div>

                <div class="form-group d-flex col-md-6">
                    <label class="w-25 vertical_align">
                        <img class="icon" src="svg-icons/c.svg">
                        C
                    </label>
                    <select class="form-control w-75" id="cSelect">
                        <option value="0"> 0 </option>
                        <option value="1"> 1 </option>
                        <option value="2"> 2 </option>
                        <option value="3"> 3 </option>
                        <option value="4"> 4 </option>
                        <option value="5"> 5 </option>
                        <option value="6"> 6 </option>
                        <option value="7"> 7 </option>
                        <option value="8"> 8 </option>
                        <option value="9"> 9 </option>
                        <option value="10"> 10 </option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group d-flex col-md-6">
                    <label class="w-25 vertical_align">
                        <img class="icon" src="svg-icons/c-plus-plus.svg">
                        C++
                    </label>
                    <select class="form-control w-75" id="cplusplusSelect">
                        <option value="0"> 0 </option>
                        <option value="1"> 1 </option>
                        <option value="2"> 2 </option>
                        <option value="3"> 3 </option>
                        <option value="4"> 4 </option>
                        <option value="5"> 5 </option>
                        <option value="6"> 6 </option>
                        <option value="7"> 7 </option>
                        <option value="8"> 8 </option>
                        <option value="9"> 9 </option>
                        <option value="10"> 10 </option>
                    </select>
                </div>

                <div class="form-group d-flex col-md-6">
                    <label class="w-25 vertical_align">
                        <img class="icon" src="svg-icons/html.svg">
                        HTML
                    </label>
                    <select class="form-control w-75" id="htmlSelect">
                        <option value="0"> 0 </option>
                        <option value="1"> 1 </option>
                        <option value="2"> 2 </option>
                        <option value="3"> 3 </option>
                        <option value="4"> 4 </option>
                        <option value="5"> 5 </option>
                        <option value="6"> 6 </option>
                        <option value="7"> 7 </option>
                        <option value="8"> 8 </option>
                        <option value="9"> 9 </option>
                        <option value="10"> 10 </option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group d-flex col-md-6">
                    <label class="w-25 vertical_align">
                        <img class="icon" src="svg-icons/javascript.svg">
                        Javascript
                    </label>
                    <select class="form-control w-75" id="javascriptSelect">
                        <option value="0"> 0 </option>
                        <option value="1"> 1 </option>
                        <option value="2"> 2 </option>
                        <option value="3"> 3 </option>
                        <option value="4"> 4 </option>
                        <option value="5"> 5 </option>
                        <option value="6"> 6 </option>
                        <option value="7"> 7 </option>
                        <option value="8"> 8 </option>
                        <option value="9"> 9 </option>
                        <option value="10"> 10 </option>
                    </select>
                </div>

                <div class="form-group d-flex col-md-6">
                    <label class="w-25 vertical_align">
                        <img class="icon" src="svg-icons/ruby.svg">
                        Rubby
                    </label>
                    <select class="form-control w-75" id="rubbySelect">
                        <option value="0"> 0 </option>
                        <option value="1"> 1 </option>
                        <option value="2"> 2 </option>
                        <option value="3"> 3 </option>
                        <option value="4"> 4 </option>
                        <option value="5"> 5 </option>
                        <option value="6"> 6 </option>
                        <option value="7"> 7 </option>
                        <option value="8"> 8 </option>
                        <option value="9"> 9 </option>
                        <option value="10"> 10 </option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group d-flex col-md-6">
                    <label class="w-25 vertical_align">
                        <img class="icon" src="svg-icons/css.svg">
                        CSS
                    </label>
                    <select class="form-control w-75" id="cssSelect">
                        <option value="0"> 0 </option>
                        <option value="1"> 1 </option>
                        <option value="2"> 2 </option>
                        <option value="3"> 3 </option>
                        <option value="4"> 4 </option>
                        <option value="5"> 5 </option>
                        <option value="6"> 6 </option>
                        <option value="7"> 7 </option>
                        <option value="8"> 8 </option>
                        <option value="9"> 9 </option>
                        <option value="10"> 10 </option>
                    </select>
                </div>

                <div class="form-group d-flex col-md-6">
                    <label class="w-25 vertical_align">
                        <img class="icon" src="svg-icons/golang.svg">
                        GoLang
                    </label>
                    <select class="form-control w-75" id="goSelect">
                        <option value="0"> 0 </option>
                        <option value="1"> 1 </option>
                        <option value="2"> 2 </option>
                        <option value="3"> 3 </option>
                        <option value="4"> 4 </option>
                        <option value="5"> 5 </option>
                        <option value="6"> 6 </option>
                        <option value="7"> 7 </option>
                        <option value="8"> 8 </option>
                        <option value="9"> 9 </option>
                        <option value="10"> 10 </option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group d-flex col-md-6">
                    <label class="w-25 vertical_align">
                        <img class="icon" src="svg-icons/swift.svg">
                        Swift
                    </label>
                    <select class="form-control w-75" id="swiftSelect">
                        <option value="0"> 0 </option>
                        <option value="1"> 1 </option>
                        <option value="2"> 2 </option>
                        <option value="3"> 3 </option>
                        <option value="4"> 4 </option>
                        <option value="5"> 5 </option>
                        <option value="6"> 6 </option>
                        <option value="7"> 7 </option>
                        <option value="8"> 8 </option>
                        <option value="9"> 9 </option>
                        <option value="10"> 10 </option>
                    </select>
                </div>


                <div class="form-group d-flex col-md-6">
                    <label class="w-25 vertical_align">
                        <img class="icon" src="svg-icons/php.svg">
                        Php
                    </label>
                    <select class="form-control w-75" id="phpSelect">
                        <option value="0"> 0 </option>
                        <option value="1"> 1 </option>
                        <option value="2"> 2 </option>
                        <option value="3"> 3 </option>
                        <option value="4"> 4 </option>
                        <option value="5"> 5 </option>
                        <option value="6"> 6 </option>
                        <option value="7"> 7 </option>
                        <option value="8"> 8 </option>
                        <option value="9"> 9 </option>
                        <option value="10"> 10 </option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group d-flex col-md-6">
                    <label class="w-25 vertical_align">
                        <img class="icon" src="svg-icons/kotlin.svg">
                        Kotlin
                    </label>
                    <select class="form-control w-75" id="kotlinSelect">
                        <option value="0"> 0 </option>
                        <option value="1"> 1 </option>
                        <option value="2"> 2 </option>
                        <option value="3"> 3 </option>
                        <option value="4"> 4 </option>
                        <option value="5"> 5 </option>
                        <option value="6"> 6 </option>
                        <option value="7"> 7 </option>
                        <option value="8"> 8 </option>
                        <option value="9"> 9 </option>
                        <option value="10"> 10 </option>
                    </select>
                </div>

                <div class="form-group d-flex col-md-6">
                    <label class="w-25 vertical_align">
                        <img class="icon" src="svg-icons/dartlang.svg">
                        Dart
                    </label>
                    <select class="form-control w-75" id="dartSelect">
                        <option value="0"> 0 </option>
                        <option value="1"> 1 </option>
                        <option value="2"> 2 </option>
                        <option value="3"> 3 </option>
                        <option value="4"> 4 </option>
                        <option value="5"> 5 </option>
                        <option value="6"> 6 </option>
                        <option value="7"> 7 </option>
                        <option value="8"> 8 </option>
                        <option value="9"> 9 </option>
                        <option value="10"> 10 </option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <button id="predictBtn" type="submit" class="btn btn-primary btn-block">Predict</button>
            </div>

            <div class="text-center">
                <h3>
                    Predicted Salary: <span id="predictedSalary">Null</span>
                </h3>
            </div>

        </form>

    </div>
</div>

<script>

    $(document).ready(function () {
        $("#salaryPredictForm").on("submit", function (event) {
            event.preventDefault();
            var java = $('#javaSelect').val();
            var c_sharp = $('#csharpSelect').val();
            var python = $('#pythonSelect').val();
            var c = $('#cSelect').val();

            var c_plus = $('#cplusplusSelect').val();
            var html = $('#htmlSelect').val();
            var js = $('#javascriptSelect').val();
            var rubby = $('#rubbySelect').val();
            var go = $('#goSelect').val();
            var css = $('#cssSelect').val();
            var swift = $('#swiftSelect').val();
            var php = $('#phpSelect').val();
            var kotlin = $('#kotlinSelect').val();
            var dart = $('#dartSelect').val();

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
</div>
</div>
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html> 