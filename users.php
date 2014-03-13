<?php

//AddUser
//Ajoute un utilisateur dans la table users
//Retourne le id du user créé
//Retoune 0 si l'usager n'a pas été créé
//AddUser('0','Vincent','Matte','QC','lkaslals','1','0.23','FR','loasassl@lggsshhoggl.com');
function AddUser($CompanyId, $FirstName, $LastName, $Province, $Password, $Role, $KmRate, $Language, $Email){
	include('conn.php'); //remove surement
	session_start(); //remove surement
	try{
		$result = $conn->prepare("INSERT INTO users (CompanyId, FirstName, LastName, Province, Password, Role, KmRate, Language, Email) VALUES (:CompanyId, :FirstName, :LastName, :Province, :Password, :Role, :KmRate, :Language, :Email)");
		$result->bindValue(':CompanyId',$CompanyId);
		$result->bindParam(':FirstName',$FirstName);
		$result->bindParam(':LastName',$LastName);
		$result->bindParam(':Province',$Province);
		$result->bindParam(':Password',$Password);
		$result->bindParam(':Role',$Role);
		$result->bindParam(':KmRate',$KmRate);
		$result->bindParam(':Language',$Language);
		$result->bindParam(':Email',$Email);
		$result->execute();	
		
		return $conn->lastInsertId();
	} catch(Exception $e){
		die($e);
		print_r ($result->errorInfo()); //remove surement
	}
}



?>