<?php

if(!empty($_POST)){
	include "partials/autoload.php";
	include "partials/TeamData.php";
	include "partials/PersonData.php";
	
		$destino = "pfpicon@utpl.edu.ec";
		$criteria = new Criteria("item");
		$criteria->insert(array(
			"fullname"=>"\"$_POST[fullname]\"",
			"phone"=>"\"$_POST[phone]\"",
			"address"=>"\"$_POST[address]\"",
			"kind"=>"\"$_POST[kind]\"",
			"email"=>"\"$_POST[email]\"",
			"msg"=>"\"$_POST[msg]\"",
			"created_at"=>"NOW()"
			));
		print "<script>alert(\"Mensaje enviado exitosamente.\");</script>";
		Core::redir("./");
	
	}
?>
