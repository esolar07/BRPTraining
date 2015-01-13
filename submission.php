<?php	
	if (!empty($_POST)){
	$name = strip_tags($_POST['cus_name']);
	$email = strip_tags($_POST['email']);
	$phone = strip_tags($_POST['contact#']);
 	
	mail( "esolar@nerd.com", "Contact Form Submission", "Name: $name\nEmail: $email\nPhone: $phone\n");}
?>