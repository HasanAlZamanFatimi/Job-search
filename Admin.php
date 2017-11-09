<?php
include 'checkLogin.php';
?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles-6.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand navbar-link" href="#"><img src="assets/img/briefcase-512.png" id="img1"><strong>Job Pool </strong></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right .cst" id="z3">
                    <li role="presentation" id="z4"><a href="logout.php" id="logout">LogOut </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container cst">
        <h1 class="text-center"><strong>Admin View </strong></h1><a class="btn btn-success btn-block btn-lg cst" role="button" href="#" data-toggle="modal" data-target="#view-bookings">View Application</a><a class="btn btn-success btn-block btn-lg cst" role="button" href="#" data-toggle="modal" data-target="#view-dj-lists">View Jobs List</a>
        <a
        class="btn btn-success btn-block btn-lg cst" role="button" href="#" data-toggle="modal" data-target="#view-users">View Users</a><a class="btn btn-success btn-block btn-lg cst" role="button" href="#" data-toggle="modal" data-target="#adddj">Add New Job</a>
            <div class="modal fade cst" role="dialog" tabindex="-1" id="view-bookings">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr class="success cst">
                                            <th class="ee">U_id </th>
                                            <th class="ee">U_Contact_no<strong> </strong></th>
                                            <th class="ee">D_id </th>
                                            <th class="ee">D_Name </th>
                                            <th class="ee"> Date </th>
                                            <th class="ee">Pay_Mode </th>
                                            <th class="ee">Amount </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="active cst">
                                            <td>101 </td>
                                            <td>9646813585 </td>
                                            <td>201 </td>
                                            <td>DJ Nugget </td>
                                            <td>2017-10-31 </td>
                                            <td>Paytm </td>
                                            <td>25000 </td>
                                        </tr>
                                        <tr class="active cst">
                                            <td>101 </td>
                                            <td>9646813585 </td>
                                            <td>201 </td>
                                            <td>DJ Nugget </td>
                                            <td>2017-10-31 </td>
                                            <td>Paytm </td>
                                            <td>25000 </td>
                                        </tr>
                                        <tr class="active cst">
                                            <td>101 </td>
                                            <td>9646813585 </td>
                                            <td>201 </td>
                                            <td>DJ Nugget </td>
                                            <td>2017-10-31 </td>
                                            <td>Paytm </td>
                                            <td>25000 </td>
                                        </tr>
                                        <tr class="active cst">
                                            <td>101 </td>
                                            <td>9646813585 </td>
                                            <td>201 </td>
                                            <td>DJ Nugget </td>
                                            <td>2017-10-31 </td>
                                            <td>Paytm </td>
                                            <td>25000 </td>
                                        </tr>
                                        <tr class="active cst">
                                            <td>101 </td>
                                            <td>9646813585 </td>
                                            <td>201 </td>
                                            <td>DJ Nugget </td>
                                            <td>2017-10-31 </td>
                                            <td>Paytm </td>
                                            <td>25000 </td>
                                        </tr>
                                        <tr class="active cst">
                                            <td>101 </td>
                                            <td>9646813585 </td>
                                            <td>201 </td>
                                            <td>DJ Nugget </td>
                                            <td>2017-10-31 </td>
                                            <td>Paytm </td>
                                            <td>25000 </td>
                                        </tr>
                                        <tr class="active cst">
                                            <td>101 </td>
                                            <td>9646813585 </td>
                                            <td>201 </td>
                                            <td>DJ Nugget </td>
                                            <td>2017-10-31 </td>
                                            <td>Paytm </td>
                                            <td>25000 </td>
                                        </tr>
                                        <tr class="active cst">
                                            <td>101 </td>
                                            <td>9646813585 </td>
                                            <td>201 </td>
                                            <td>DJ Nugget </td>
                                            <td>2017-10-31 </td>
                                            <td>Paytm </td>
                                            <td>25000 </td>
                                        </tr>
                                        <tr class="active cst">
                                            <td>101 </td>
                                            <td>9646813585 </td>
                                            <td>201 </td>
                                            <td>DJ Nugget </td>
                                            <td>2017-10-31 </td>
                                            <td>Paytm </td>
                                            <td>25000 </td>
                                        </tr>
                                        <tr class="active cst">
                                            <td>101 </td>
                                            <td>9646813585 </td>
                                            <td>201 </td>
                                            <td>DJ Nugget </td>
                                            <td>2017-10-31 </td>
                                            <td>Paytm </td>
                                            <td>25000 </td>
                                        </tr>
                                        <tr class="active cst">
                                            <td>101 </td>
                                            <td>9646813585 </td>
                                            <td>201 </td>
                                            <td>DJ Nugget </td>
                                            <td>2017-10-31 </td>
                                            <td>Paytm </td>
                                            <td>25000 </td>
                                        </tr>
                                        <tr class="active cst">
                                            <td>101 </td>
                                            <td>9646813585 </td>
                                            <td>201 </td>
                                            <td>DJ Nugget </td>
                                            <td>2017-10-31 </td>
                                            <td>Paytm </td>
                                            <td>25000 </td>
                                        </tr>
                                        <tr class="active cst">
                                            <td>101 </td>
                                            <td>9646813585 </td>
                                            <td>201 </td>
                                            <td>DJ Nugget </td>
                                            <td>2017-10-31 </td>
                                            <td>Paytm </td>
                                            <td>25000 </td>
                                        </tr>
                                        <tr class="active cst">
                                            <td>101 </td>
                                            <td>9646813585 </td>
                                            <td>201 </td>
                                            <td>DJ Nugget </td>
                                            <td>2017-10-31 </td>
                                            <td>Paytm </td>
                                            <td>25000 </td>
                                        </tr>
                                        <tr class="active cst">
                                            <td>101 </td>
                                            <td>9646813585 </td>
                                            <td>201 </td>
                                            <td>DJ Nugget </td>
                                            <td>2017-10-31 </td>
                                            <td>Paytm </td>
                                            <td>25000 </td>
                                        </tr>
                                        <tr class="active cst">
                                            <td>101 </td>
                                            <td>9646813585 </td>
                                            <td>201 </td>
                                            <td>DJ Nugget </td>
                                            <td>2017-10-31 </td>
                                            <td>Paytm </td>
                                            <td>25000 </td>
                                        </tr>
                                    </tbody>
                                    <caption class="lead"><strong>Booking details : - </strong></caption>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer"></div>
                    </div>
                </div>
            </div>
            <div class="modal fade cst" role="dialog" tabindex="-1" id="view-dj-lists">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr class="success cst">
                                            <th class="ee">D_id </th>
                                            <th class="ee">D_Name </th>
                                            <th class="ee">D_by </th>
                                            <th class="ee">Rating </th>
                                            <th class="ee"> Day_Charges</th>
                                            <th class="ee">Eve_charges </th>
                                            <th class="ee">Icon </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="active cst">
                                            <td>101 </td>
                                            <td>Dj Nugget</td>
                                            <td>Nikhil </td>
                                            <td>4.5 <i class="glyphicon glyphicon-star"></i></td>
                                            <td>15000 </td>
                                            <td>20000 </td>
                                            <td> <img class="img-thumbnail img-responsive" src="assets/img/logo.png" width="30"></td>
                                        </tr>
                                        <tr class="active cst">
                                            <td>101 </td>
                                            <td>Dj Nugget</td>
                                            <td>Nikhil </td>
                                            <td>4.5 <i class="glyphicon glyphicon-star"></i></td>
                                            <td>15000 </td>
                                            <td>20000 </td>
                                            <td> <img class="img-thumbnail img-responsive" src="assets/img/logo.png" width="30"></td>
                                        </tr>
                                        <tr class="active cst">
                                            <td>101 </td>
                                            <td>Dj Nugget</td>
                                            <td>Nikhil </td>
                                            <td>4.5 <i class="glyphicon glyphicon-star"></i></td>
                                            <td>15000 </td>
                                            <td>20000 </td>
                                            <td> <img class="img-thumbnail img-responsive" src="assets/img/logo.png" width="30"></td>
                                        </tr>
                                    </tbody>
                                    <caption class="lead"><strong>Dj details : - </strong></caption>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer"></div>
                    </div>
                </div>
            </div>
            <div class="modal fade cst" role="dialog" tabindex="-1" id="view-users">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr class="success cst">
                                            <th class="ee">U_id </th>
                                            <th class="ee">U_Name </th>
                                            <th class="ee">Phone_no </th>
                                            <th class="ee">Email_id </th>
                                            <th class="ee">Password </th>
                                            <th class="ee">image </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="active cst">
                                            <td>101 </td>
                                            <td>user1 </td>
                                            <td>9646813585 </td>
                                            <td>nikhilgoyal@gmail.com </td>
                                            <td>user1 </td>
                                            <td> <img class="img-thumbnail img-responsive" src="assets/img/logo.png" width="30"></td>
                                        </tr>
                                        <tr class="active cst">
                                            <td>101 </td>
                                            <td>user1 </td>
                                            <td>9646813585 </td>
                                            <td>nikhilgoyal@gmail.com </td>
                                            <td>user1 </td>
                                            <td> <img class="img-thumbnail img-responsive" src="assets/img/logo.png" width="30"></td>
                                        </tr>
                                        <tr class="active cst">
                                            <td>101 </td>
                                            <td>user1 </td>
                                            <td>9646813585 </td>
                                            <td>nikhilgoyal@gmail.com </td>
                                            <td>user1 </td>
                                            <td> <img class="img-thumbnail img-responsive" src="assets/img/logo.png" width="30"></td>
                                        </tr>
                                    </tbody>
                                    <caption class="lead"><strong>User details : - </strong></caption>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer"></div>
                    </div>
                </div>
            </div>
            <div class="modal fade cst" role="dialog" tabindex="-1" id="b-date-status">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr class="success cst">
                                            <th id="c1">D_id </th>
                                            <th id="c2">Date </th>
                                            <th id="c3">Status </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="active cst">
                                            <td>101 </td>
                                            <td>2017-10-31 </td>
                                            <td>Available </td>
                                        </tr>
                                        <tr class="active cst">
                                            <td>101 </td>
                                            <td>2017-10-31 </td>
                                            <td>Available </td>
                                        </tr>
                                        <tr class="active cst">
                                            <td>101 </td>
                                            <td>2017-10-31 </td>
                                            <td>Available </td>
                                        </tr>
                                    </tbody>
                                    <caption class="lead"><strong>Booking Available dates : - </strong></caption>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer"></div>
                    </div>
                </div>
            </div>
            <div class="modal fade" role="dialog" tabindex="-1" id="add">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body" id="add-dates">
                            <h2 class="text-center">Add new available dates : -</h2>
                            <input class="input-lg cst" type="text" required="" placeholder="D_id" maxlength="3" minlength="3" pattern="[2][0-9]*">
                            <input class="input-lg cst" type="date" required="">
                            <input class="input-lg cst" type="text" value="Available" disabled="" readonly="" required="">
                            <button class="btn btn-primary btn-block btn-lg" type="submit" id="bb">ADD </button>
                        </div>
                        <div class="modal-footer"></div>
                    </div>
                </div>
            </div>
            <div class="modal fade" role="dialog" tabindex="-1" id="adddj">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body" id="add-dates">
                            <h2 class="text-center">Add new dj detais : -</h2>
                            <input class="input-lg cst" type="text" required="" placeholder="Dj Name">
                            <input class="input-lg cst" type="text" required="" placeholder="Dj By">
                            <input class="input-lg cst" type="text" required="" placeholder="Rating">
                            <input class="input-lg cst" type="text" required="" placeholder="Day Charges">
                            <input class="input-lg cst" type="text" required="" placeholder="Evening Charges">
                            <input type="file" accept="image/*" required="" class="ss">
                            <button class="btn btn-primary btn-block btn-lg" type="submit" id="bb">ADD </button>
                        </div>
                        <div class="modal-footer"></div>
                    </div>
                </div>
            </div>
    </div>
    <section>
        <footer>
            <div class="row">
                <div class="col-md-4 col-sm-6 footer-navigation">
                    <h3><a href="#">Job Pool </a></h3>
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
                        <p> <a href="#" target="_blank">jobpool@gmail.com</a></p>
                    </div>
                </div>
                <div class="clearfix visible-sm-block"></div>
                <div class="col-lg-4 col-md-4 footer-about">
                    <h4>About the company</h4>
                    <p> Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
                    </p>
                    <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a></div>
                </div>
            </div>
        </footer>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>