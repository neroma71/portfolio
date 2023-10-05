<?php
	
	$erreur='';
	$erreurmail='';
	
	$monemail='jerome@jeromesauzet.fr'; // adresse mail où envoyer les éléments du formulaire
	
		 $headers  = 'MIME-Version: 1.0' . "\r\n".'Date: '.date('r')."\r\n"; 

         $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

         $headers .= 'From: jerome@jeromesauzet.fr' . "\r\n";
	
	     $headers.="Message-Id: <" . sha1(microtime()) . "@" . $fqdn_hostname = $_SERVER['SERVER_NAME'] . ">\r\n";
	
	$sujet = utf8_decode($_POST['sujet']);
	$nom = utf8_decode($_POST['nom']); //
	$prenom = utf8_decode($_POST['prenom']);	
	$email = $_POST['email'];
	$commentaires = utf8_decode($_POST['commentaires']);
	
	
	// Tests des variables 
	if ($_POST['remarque'] != "") { die(); }
	if(empty($nom) OR empty($prenom) OR empty($email))
	// OR = l'un ou l'autre et AND = l'un et l'autre
	{
	$erreur = 'Champs incomplets';
	}
	
	if(!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[_a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/i',$email) ) //
	{
	$erreurmail = 'Adresse E.mail invalide';
	}
	/*
	if(!preg_match('/^[0-9]{5})',$cpostal) 
	{
	$erreurcpostal = 'Code postal invalide';
	}
	*/
	
	// Tests la variable '$erreur' et '$erreurmail'
	
	if(empty($erreur) AND empty($erreurmail))
	{
		$message = "Vous avez un nouveau e.mail de votre site :
		\r \r
		Nom : $nom
		\r
		Prenom : $prenom
		\r
		E.mail : $email
		\r
		Pays : $pays
		\r
		Commentaires : $commentaires
		";
	
		
		// Envoi l'e.mail
		mail($monemail,$message,$headers, $commantaires);
		
		// Change l'en-tête HTTP lors de l'envoi
		header('Location:merci.html');
		}
?>

<!-- Page ci-dessous apparait uniquement en cas d'erreurs -->	
	
<html>
	<head>
		<title>Erreur sur le formulaire</title>
	</head>
	<body>
		<h3>
			<?php 
			echo($erreur);
			
			echo nl2br($erreurmail); //
			?>
		</h3>
	</body>
</html>