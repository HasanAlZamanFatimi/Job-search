<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jobpool</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.9.0/css/lightbox.min.css">
    <link rel="stylesheet" href="assets/css/styles-2.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form-1.css">
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#"><strong>JOB POOL</strong><img src="assets/img/briefcase-512.png" id="logo"></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active" role="presentation"><a href="#">About Us</a></li>
                    <li role="presentation"><a href="#" data-toggle="modal" data-target="#login">Login <i class="fa fa-sign-in"></i></a></li>
                    <li role="presentation"><a href="#" data-toggle="modal" data-target="#singup">Sing up<i class="glyphicon glyphicon-user"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="promo">
        <div class="jumbotron">
            <h1>Objective </h1>
            <p>Our object is to provide a best job to a candidate .</p>
            <p><a class="btn btn-default" role="button" href="#">Learn more</a></p>
            <div class="modal fade" role="dialog" tabindex="-1" id="login">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <h4 class="modal-title">Login Form</h4></div>
                        <div class="modal-body" id="ab">
                            <div id="promo" class="login-card"><img src="assets/img/avatar_2x.png" class="profile-img-card">
                                



                                <form class="form-signin" method="post" action="do_login.php">
                                <span class="reauth-email"> </span>
                                    <input class="form-control" type="text" required="" placeholder="phone" id="inputEmail" name="Phone">
                                    <input class="form-control" type="password" required="" placeholder="Password" id="inputPassword" name="password">
                                    <div class="checkbox">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox">Remember me</label>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit"
                                    name="abc">Sign in</button>
                                </form>







                                <a href="#" class="forgot-password">Forgot your password?</a></div>
                        </div>
                        <div class="modal-footer">
                            <div class="modal fade" role="dialog" tabindex="-1">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <h4 class="modal-title">Modal Title</h4></div>
                                        <div class="modal-body">
                                            <p>The content of your modal.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
                                            <button class="btn btn-primary" type="button">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="singup">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title"> Registeration Form</h4></div>
                <div class="modal-body">





                    <form class="form-horizontal custom-form" method="post" enctype="multipart/form-data">
                        <h1>Register Form</h1>
                        <div class="form-group">
                            <div class="col-sm-4 label-column">
                                <label class="control-label" for="name-input-field">Name </label>
                            </div>
                            <div class="col-sm-6 input-column">
                                <input class="form-control" type="text" name="Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4 label-column">
                                <label class="control-label" for="email-input-field">Email </label>
                            </div>
                            <div class="col-sm-6 input-column">
                                <input class="form-control" type="email" name="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4 label-column">
                                <label class="control-label" for="email-input-field">Phone </label>
                            </div>
                            <div class="col-sm-6 input-column">
                                <input class="form-control" type="text" name="Phoneno">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4 label-column">
                                <label class="control-label" for="pawssword-input-field">Password </label>
                            </div>
                            <div class="col-sm-6 input-column">
                                <input class="form-control" type="password" name="pass">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-4 label-column">
                                <label class="control-label" for="dropdown-input-field">Upload CV </label>
                            </div>
                            <div class="col-sm-4 input-column">
                                <input type="file" name="cv">
                            </div>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">I've read and accept the terms and conditions</label>
                        </div>
                        <button class="btn btn-default submit-button" type="submit" name="xyz">Submit </button>
                    </form>

 <?php

 include 'connect.php';		
                                    if(isset($_POST['xyz']))
                                    {
                                        $name=$_POST['Name'];
                                        $email=$_POST['Email'];
                                        $phone=$_POST['Phoneno'];

                                        $pass=$_POST['pass'];
                                        
                                        
                                        $cv_name=$_FILES['cv']['name'];
                                        $cv_temp=$_FILES['cv']['tmp_name'];

                                        move_uploaded_file($cv_temp,"assets/img/$cv_name");
                                            
                                    $query="insert into user(Name,Email,Phone,Password,CV)";
                                    $query.=" values('{$name}','{$email}','{$phone}','{$pass}','{$cv_name}')";

                                    $select_query=mysqli_query($connection,$query);
                                    $id=mysqli_insert_id($connection);


                                    	if(!$select_query)
                                    	{
                                    		echo "<script language='javascript' type='text/javascript'>alert('use proceed')</script>";
                                    	}
                                    	else
                                    	{
                                    		echo "<script language='javascript' type='text/javascript'>alert('user successfully added...now login to proceed')</script>";
                                    	}

                                    }
                                    ?>















                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>
    <div class="container side" id="welcome">
        <h1> </h1>
        <p>Learn to enjoy every minute of your life. Be happy now. Don't wait for something outside of yourself to make you happy in the future. Think how really precious is the time you have to spend, whether it's at work or with your family. Every minute
            should be enjoyed and savored .</p>
        <div id="dark" class="darkname"></div>
    </div>
    <div class="container side" id="welcome">
        <h1>Job Type </h1>
        <div class="row">
            <div class="col-md-4 item" id="why"><i class="glyphicon glyphicon-road"></i>
                <h2>Job </h2>
                <p>There are no secrets to success. It is the result of preparation, hard work, and learning from failure. </p>
            </div>
            <div class="col-md-4 item" id="why"><i class="glyphicon glyphicon-lock"></i>
                <h2>Part time Job</h2>
                <p>Stay positive and happy. Work hard and don't give up hope. Be open to criticism and keep learning. </p>
            </div>
            <div class="col-md-4 item" id="why"><i class="fa fa-search"></i>
                <h2>Internship </h2>
                <p>Believe in yourself, andthe rest will fall into place. Have faith in your own abilities, work hard, and there is nothing you cannot accomplish. </p>
            </div>
        </div>
    </div>
    <div class="container side" id="welcome">
        <h1>Gallery </h1>
        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="work_schedule-wallpaper-1920x1080.jpg"> <img class="img-responsive" src="assets/img/work_schedule-wallpaper-1920x1080.jpg" data-lightbox="cake"></a>
                    <div class="caption"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="business-wallpaper-1920x1080.jpg"> <img class="img-responsive" src="assets/img/business-wallpaper-1920x1080.jpg" data-lightbox="cake"></a>
                    <div class="caption"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="laptop-wallpaper-1920x1080.jpg"> <img class="img-responsive" src="assets/img/laptop-wallpaper-1920x1080.jpg" data-lightbox="cake"></a>
                    <div class="caption"></div>
                </div>
            </div>
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