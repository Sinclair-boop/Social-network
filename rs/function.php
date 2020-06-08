<?php
	//connexion a la bd en POO

 //finction qui vas se charge d'insere l'utilisateur
 function inscrire_utilisateur($pseudo,$password,$email,$sexe,$situation,$apropos){
 	 $db=new PDO('mysql:host=localhost;dbname=rs','root','');
 	$inscrire=$db->prepare("INSERT INTO utilisateurs (id,pseudo,password,email,sexe,situation,apropos) VALUES (?,?,?,?,?,?,?)");
 	$inscrire->execute(array('',$pseudo,$password,$email,$sexe,$situation,$apropos));
 	/*$inscrire=$db->query("INSERT INTO utilisateur (id,pseudo,password,email,sexe,situation,apropos) VALUES ('',$pseudo,$password,$email,$sexe,$situation,$apropos)");*/
 }
 //fonction qui dis si un pseudo existe ou pas
 function pseudo_existe($pseudo){
 	 $db=new PDO('mysql:host=localhost;dbname=rs','root','');
 	$existe=$db->prepare("SELECT id FROM utilisateurs WHERE pseudo=?");
 	$existe->execute(array($pseudo));
 	$count=$existe->rowCount();
 	$existe->closeCursor();
 	return $count;
 }
 //fonction qui dis si email existe ou pas
 function email_existe($email){
 	 $db=new PDO('mysql:host=localhost;dbname=rs','root','');
 	$existe=$db->prepare("SELECT id FROM utilisateurs WHERE email=?");
 	$existe->execute(array($email));
 	$count=$existe->rowCount();
 	$existe->closeCursor();
 	return $count;
}
?>