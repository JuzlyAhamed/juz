<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'kamu');

	// There is a form to edit or add data so i am keeping initial value of all the inpus as null using the code below
	$username = "";
	$emailid = "";
	$usertype = "";
	$password = "";
	$id = 0;
	$update = false;

	// Create function

	if (isset($_POST['save'])) {
		$username = $_POST['username'];
		$usertype=$_POST['usertype'];
		$emailid = $_POST['emailid'];
		$password = $_POST['password'];

		//Password encription
		$password = md5($password);

		mysqli_query($db, "INSERT INTO accounts (username, usertype, emailid, password) VALUES ('$username', '$usertype', '$emailid','$password')"); 
		$_SESSION['message'] = "User details added Successfully!"; 
		header('location: manageusers.php');//file where you have to be after the function
	}

	//update function

	if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$username = $_POST['username'];
	$usertype = $_POST['usertype'];
	$emailid = $_POST['emailid'];


	mysqli_query($db, "UPDATE accounts SET username='$username', usertype='$usertype', emailid='$emailid' WHERE id=$id");
	$_SESSION['message'] = "User details updated Successfully!"; 
	header('location: manageusers.php'); //file where you have to be after the function
	}

	//delete function
	if (isset($_GET['delete'])) {
	$id = $_GET['delete'];
	mysqli_query($db, "DELETE FROM accounts WHERE id=$id");
	$_SESSION['message'] = "User Account deleted Successfully!"; 
	header('location: manageusers.php'); //file where you have to be after the function
	}

?>