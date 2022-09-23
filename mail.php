<?php 
	$lastname = $_POST['nom']; // récupèration du nom envoyé par le formulaire
	$name = $_POST['prenom']; // récupèration du prénom envoyé par le formulaire
	$email = $_POST['email']; // récupèration du mail envoyé par le formulaire
	$message = $_POST['message']; // récupèration du message envoyé par le formulaire
	$formcontent="From: $name $lastname \n Message: $message"; // création de la partie from du mail (qui a envoyé le mail)
	$recipient = "marvyn.marechal@gmail.com"; // addresse vers laquelle envoyer le mail
	$subject = "Contact Form";
	$mailheader = "From: $email \r\n";
	mail($recipient, $subject, $formcontent, $mailheader) or die("Error!"); // envoi du mail
	echo "Redirection....";
	header('Location:index.html'); // redirection vers l'accueil
?>