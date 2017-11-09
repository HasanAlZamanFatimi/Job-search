<?php
include 'checkLogin.php';
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>userprofile</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles-3.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/styles-4.css">
    <link rel="stylesheet" href="assets/css/styles-5.css">
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#"><strong>JOB POOL</strong><img src="assets/img/briefcase-512.png" id="logo"></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="logout.php" >Logout <i class="fa fa-sign-in"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="promo">

        <?php
                include 'connect.php';
                $xyz=$_SESSION['user_phone'];
                $query="select * from user where Phone=$xyz";
                $select_query=mysqli_query($connection,$query);
                while ($row=mysqli_fetch_assoc($select_query)) 
                {
                        $user_id=$row['U_ID'];
                        $cv=$row['CV'];
                        $_SESSION['a']=$user_id;

                        $_SESSION['d']=$cv;



                       echo' <div class="jumbotron">
                            <h2>Name:-'.$row['Name'].'</h2>
                            <h2>User_ID:-'.$row['U_ID'].'</h2>
                            <h2>Email:-'.$row['Email'].'</h2>
                            <h2>Phone:-'.$row['Phone'].'</h2>
                            <p></p>
                        </div>';
                }
        ?>








    </div>
    <div class="container side" id="welcome">
        <h1> </h1>
        <p>Learn to enjoy every minute of your life. Be happy now. Don't wait for something outside of yourself to make you happy in the future. Think how really precious is the time you have to spend, whether it's at work or with your family. Every minute
            should be enjoyed and savored .</p>
        <div id="dark" class="darkname"></div>
    </div>
    <div class="container cst" id="abc">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            



          <?php
            
                $query="select * from job";
                $select_query=mysqli_query($connection,$query);
                while ($row=mysqli_fetch_assoc($select_query)) 
                {
                
                    $j_id=$row['Job_ID'];
                    $profle=$row['Profile'];
                    $_SESSION['b']=$j_id;
                    $_SESSION['c']=$profle;
                

            echo '<div class="well well-sm .cst" style="height: 500px">
                <div class="thumbnail"><img class="img-thumbnail" src="assets/img/background.jpg">
                    <div class="caption">
                        <h2>'.$row['Profile'].'</h2>
                        <h3>'.$row['Company'].'</h3>
                        <h4>Salary:- '.$row['Salary'].'</h4>
                        <h4>location:- '.$row['Location'].'</h4>
                        <p><strong>Skills:- '.$row['Skills'].'</strong></p>

                        <a class="btn btn-primary active btn-block btn-lg" role="button" href="book.php">Apply </a></div>
                </div>
            </div>';
            

            }
            ?>

        </div>
    </div>
    <footer>
        <div class="row">
            <div class="col-md-4 col-sm-6 footer-navigation">
                <h3><a href="#">JOB POOL</a></h3>
                <p class="links"><a href="#">Home</a><strong> · </strong><a href="#">Blog</a><strong> · </strong><a href="#">Pricing</a><strong> · </strong><a href="#">About</a><strong> · </strong><a href="#">Faq</a><strong> · </strong><a href="#">Contact</a></p>
                <p class="company-name">Company Name © 2015 </p>
            </div>
            <div class="col-md-4 col-sm-6 footer-contacts">
                <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                    <p><span class="new-line-span">21 Revolution Street</span> Paris, France</p>
                </div>
                <div><i class="fa fa-phone footer-contacts-icon"></i>
                    <p class="footer-center-info email text-left"> +1 555 123456</p>
                </div>
                <div><i class="fa fa-envelope footer-contacts-icon"></i>
                    <p> <a href="#" target="_blank">jobpool@gmailcom</a></p>
                </div>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="col-md-4 footer-about">
                <h4>About the company</h4>
                <p> Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
                </p>
                <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a></div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.9.0/js/lightbox-plus-jquery.min.js"></script>
</body>

</html>