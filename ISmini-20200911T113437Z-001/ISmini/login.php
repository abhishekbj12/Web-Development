<?php include 'connect.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
    <link rel="icon" href="./icon/site.ico" type="image/icon type">
    <!--Import Google Icon Font-->
    <link href="SignUp/l9.css" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="SignUp/l11.css">
    <link rel="stylesheet" href="SignUp/login.css">
    <!-- Compiled and minified JavaScript -->
    <script src="SignUp/l14.js" ></script>
    <script src="SignUp/l15.js"></script>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script>
    var check = function() {
if (document.getElementById('pass2').value ==
  document.getElementById('conpass').value && document.getElementById('conpass').value!="") {
  document.getElementById('mess').style.color = 'green';
  document.getElementById('mess').innerHTML = 'matching';
} else {
  document.getElementById('mess').style.color = 'red';
  document.getElementById('mess').innerHTML = 'not matching';
}
}
    </script>
</head>
<body>
    <div id="large-header" class="container">
        <div class="row">
            <div class="col s6 offset-s3">
                <div id="main">
                    <div class="tabs blue darken-1">
                            <ul class="tabs tabs-fixed-width tabs-transparent">
                                <li class="tab"><a class="active" href="#signInForm">SIGN IN</a></li>
                                <li class="tab"><a href="#signUpForm">SIGN UP</a></li>
                            </ul>
                    </div>
                    <form action="log_confirm.php" id="signInForm" class="blue lighten-3" method="post">
                        <div class="row">
                            <div class="input-field col s10 offset-s1 offset-s1">
                                <input id="uname" name="uname" required>
                                <label for="uname">Username</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s10 offset-s1">
                                <input id="pass" name="pass" type="password" required>
                                <label for="pass">Password</label>
                            </div>
                        </div>
                        <div id="button" class="center-align">
                          <input type="submit" class="waves-effect waves-light btn blue darken-1" value="LOGIN">
                        </div>
                    </form>
                    <form action="register.php" id="signUpForm" method="post" class="blue lighten-3">
                        <div class="row">
                            <div class="input-field col s10 offset-s1">
                                <input id="uname2" name="uname2" required>
                                <label for="uname2">Username</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s10 offset-s1">
                                <input id="email" type="email" name="email" required>
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s10 offset-s1">
                                <input id="pass2" type="password" name="pass2" required>
                                <label for="pass2">Password</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s10 offset-s1 ">
                                <input id="conpass"  type="password" name="conpass" required onkeyup="check();"><span id=mess></span>
                                <label for="conpass">Confirm Password</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s10 offset-s1">
                                <input id="phno" type="tel" name="phno" pattern="[0-9]{10}">
                                <label for="phno">Phone</label>
                            </div>
                        </div>
                        <div id="button2" class="center-align">
                            <input type="submit" class="waves-effect waves-light btn blue darken-1" value="RIGISTER">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
    $(document).ready(function(){
        $('ul.tabs').tabs();
      });
    $("input").focus(function(){
        $('label[for="' + $(this).attr('id') + '"]').addClass("active");
    });
    $("input").blur(function(){if($(this).val() == "")
        $('label[for="' + $(this).attr('id') + '"]').removeClass("active");
    });
    </script>
</body>
</html>
