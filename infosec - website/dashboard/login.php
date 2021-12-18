<?php 
include "connection.php";
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INFOSEC</title>
    <link rel="icon" href="https://www.pngkey.com/png/full/432-4327792_cyber-security-technology-blue-icon-png.png"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="http://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
            <div class="main">
                <div class="title">
                    <h1>INFOSEC LABS</h1>
                </div>
                <ul class="tab">
                    <li><a href="../dashboard/default.php">Home</a></li>
                    <li><a href="../dashboard/courses.html">Courses</a></li>
                    <li><a href="../dashboard/article2.html">Articles</a></li>
                    <li><a href="../dashboard/attacks2.html">Attacks</a></li>
                    <li><a href="../dashboard/contactmain.html">Contact</a></li>
                        </ul>

            </div>
    </header>
	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login">
				<h3 class="head-one">LOGIN FORM</h3>
			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        <form action="" name="form1" method="post">
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input type="text"  placeholder="Username" title="Please enter you username" required="" value="" name="username" id="username" class="form-control">

                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password"  title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">

                            </div>

                            <button type="submit" name="login" class="btn btn-success btn-block loginbtn">Login</button>
                            <a class="btn btn-default btn-block" href="register.php">Register</a>

                            <div class="alert alert-danger"  id="failure" style="margin-top: 10px; display: none;">
                            <strong>Error!</strong> Password or username is incorrect.
                            </div>

                        </form>
                    </div>
                </div>
			</div>
		</div>   
    </div>

    <?php
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
    <footer>
            <div class="footer_main">
                <h3>INFOSEC LABS</h3>
                <p>Welcome to InfoSec Labs the home of the best cyber security courses on the Internet. Become a master in cyber security and hacking now! It's never been more important than it is today to master cyber security and hacking, which you can do through our excellent highly rated courses. Learn from over 140+ courses of on demand video lectures, articles and other resources that transform you into a cyber security expert.</p>
                <ul class="social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                </ul>
            </div>
            <div class="footer_copyright">
                <p>copyright &copy;2020 infosec labs. designed by <span>group six</span></p>
            </div>
        </footer>
</body>
</html>