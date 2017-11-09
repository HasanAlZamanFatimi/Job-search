<?php
include 'connect.php';
include 'checkLogin.php';

$uid=$_SESSION['a'];
$jid=$_SESSION['b'];
$pro=$_SESSION['c'];
$cv=$_SESSION['d'];

 $query1="insert into main1(U_ID,Job_ID,Profile,CV) values('{$uid}','{$jid}','{$pro}','{$cv}')";
                                     $select_query1=mysqli_query($connection,$query1);




?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>final_page</title>
</head>
<body>
<center>
	<h1 style="margin-top:100px;font-size:50px">Congratulation Your Booking is Confirmed...!!!</h1>
	<a href="user_view.php"><h2>Click to view booking details</h2></a>
</center>
</body>
</html>
