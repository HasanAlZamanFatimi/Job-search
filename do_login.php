<?php

	include 'connect.php';
	if(!isset($_SESSION))
	{
		session_start();
	}
	$u_phone=$_POST['Phone'];
	$u_pass=$_POST['password'];
	

	$query="select * from user where Phone=$u_phone";
	$select_query=mysqli_query($connection,$query);


	if(!$select_query)
	{
		die("query failed".mysqli_error($connection));
	}


	while($row=mysqli_fetch_assoc($select_query))
	{
		$db_pass=$row['Password'];
	}



	if($u_phone=="9041391825" && $u_pass=="admin")
	{
		$_SESSION['logged']=true;
		$_SESSION['user_phone']=$u_phone;
		header("Location: Admin.php");
		
	}
	elseif ($u_pass==$db_pass) 
	{
		$_SESSION['logged']=true;
		$_SESSION['user_phone']=$u_phone;
		header("Location: user.php");	
	}
	else
	{
		$_SESSION['logged']=false;
		header("Location: index.php");		
	}
?>