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
//Permet de modifier un usager, on modifie tout sauf le UserId et le Password
//ModifyUser('16','1','Vincent','Matte','QC','1','0.23','FR','loassssassl@lggsshhoggl.com');
function ModifyUser($userId,$CompanyId, $FirstName, $LastName, $Province, $Role, $KmRate, $Language, $Email){
	include('conn.php'); //remove surement
	session_start(); //remove surement
	try{
		$result = $conn->prepare("UPDATE users SET CompanyId= :CompanyId, FirstName= :FirstName, LastName= :LastName, Province= :Province, Role= :Role, KmRate= :KmRate, Language= :Language, Email= :Email WHERE UserId= :userId");
		$result->bindValue(':CompanyId',$CompanyId);
		$result->bindParam(':FirstName',$FirstName);
		$result->bindParam(':LastName',$LastName);
		$result->bindParam(':Province',$Province);
		$result->bindParam(':Role',$Role);
		$result->bindParam(':KmRate',$KmRate);
		$result->bindParam(':Language',$Language);
		$result->bindParam(':Email',$Email);
		$result->bindParam(':userId',$userId);
		$result->execute();	

	} catch(Exception $e){
		die($e);
		print_r ($result->errorInfo()); //remove surement
	}
}




?>