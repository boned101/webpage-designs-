<?php 
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"quiz");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" href="../dashboard/img/icon.svg"/>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="../dashboard/css/login.css" />
    <title>InfoSec Labs</title>
  </head>
  <body>
    <header>
      <div class="main">
          <div class="title">
              <h1>INFOSEC LABS</h1>
          </div>
          <ul class="tab">
            <li><a href="../dashboard/default.html">Home</a></li>
            <li><a href="../dashboard/courses.html">Courses</a></li>
            <li><a href="../dashboard/article2.html">Articles</a></li>
            <li><a href="../dashboard/attacks2.html">Attacks</a></li>
            <li><a href="../dashboard/contactmain.html">Contact</a></li>
        </ul>

      </div>
  </header>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Registration Number" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>
            <input type="submit" value="Login" class="btn solid" name="login"/>
          </form>
          <form action="#" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="username" />
            </div>
            <div class="input-field">
              <i class="fas fa-id-badge"></i>
              <input type="text" placeholder="Registration Number" name="reg_no"/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password"/>
            </div>
            <input type="submit" class="btn" value="Sign up"  name="submit1"/>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Sign Up and join us.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Login with Registration Number and password.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="alert alert-success"  id="success" style="margin-top: 10px; display: none;">
      <strong>Success!</strong> Account Registered Successfully.
      </div>
      <div class="alert alert-danger"  id="failure" style="margin-top: 10px; display: none;">
      <strong>Error!</strong> Username Already Exist.
      </div>
    <footer>
      <div class="footer_main">
          <h3>INFOSEC LABS</h3>
          <p>Welcome to InfoSec Labs the home of the best cyber security courses on the Internet. Become a master in cyber security and hacking now! It's never been more important than it is today to master cyber security and hacking, which you can do through our excellent highly rated courses. Learn from over 140+ courses of on demand video lectures, articles and other resources that transform you into a cyber security expert.</p>
          <ul class="social">
              <li><a href="https://youtu.be/nW0duLuIV04"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://twitter.com/youtube/status/1336066114208608262?lang=en"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="https://youtu.be/v7ScGV5128A"><i class="fa fa-youtube"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
          </ul>
      </div>
      <div class="footer_copyright">
          <p>copyright &copy;2020 infosec labs. designed by <span>group six</span></p>
      </div>
  </footer>

  <?php
    if(isset($_POST["submit1"])){
        $count=0;
        $res= mysqli_query($link,"select * from registration where username='$_POST[username]'") or die(mysqli_error($link));
        $count=mysqli_num_rows($res);
        if($count>0){
            ?>
            <script type="text/javascript">
                document.getElementById("success").style.display="none";
                document.getElementById("failure").style.display="block";
            </script>
            <?php
        }
        else {
            mysqli_query($link,"insert into registration values(NULL,'$_POST[username]','$_POST[reg_no]','$_POST[password]','$_POST[email]')") or die(mysqli_error($link));
            ?>
            <script type="text/javascript">
            window.location="index.php"
                document.getElementById("success").style.display="block";
                document.getElementById("failure").style.display="none";
            </script>
            <?php
        }
    }
    if (isset($_POST["login"])){
        echo "success";
        $count=0;
        $res= mysqli_query($link,"select * from registration where username='$_POST[username]' && password='$_POST[password]'") or die(mysqli_error($link));
        $count=mysqli_num_rows($res);
        if ($count==0){
            ?>
            <script type="text/javascript">
                document.getElementById("failure").style.display="block";
            </script>
            <?php

        }
        else{
            ?>
            <script type="text/javascript">window.location="default.php"</script>
            <?php
        }
    }    

    ?>

    <script src="app.js"></script>
  </body>
</html>
