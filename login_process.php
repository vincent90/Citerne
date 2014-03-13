<?php 
	include('conn.php');
	session_start ();

	$username = $_POST['username'];
	$password = $_POST['password'];

	if(isset($_POST['disconnect'])) {
		session_destroy();
		header ('location: login.php');
	}		
	else{
		$result = $conn->prepare("SELECT * FROM users WHERE username= :user AND password= :pass");
		$result->bindParam(':user',$username);
		$result->bindParam(':pass',$password);
		$result->execute();
		$rows = $result->fetch(PDO::FETCH_NUM);
		
		if($rows > 0){
			$_SESSION['username'] = $username;
			header ('location: login.php');
			}
		else{
			echo "Erreur de login";
		}
	}
?>