<?php
	if(!isset($_SESSION))
	{
		session_start();
	}
	if(!isset($_SESSION['logged']) || $_SESSION['logged']==false)
	{
		header("location:index.php");
		
	}
?>