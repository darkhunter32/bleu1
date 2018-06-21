<?php
if($_POST)
{
	$to_Email   	= "sihamessalek@gmail.com"; //Replace with recipient email address
	$subject        = 'Message du site Web '.$_SERVER['SERVER_NAME']; //Subject line for emails
	
	
	//check if its an ajax request, exit if not
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
	
		//exit script outputting json data
		$output = json_encode(
		array(
			'type'=>'error', 
			'text' => 'Request must come from Ajax'
		));
		
		die($output);
    } 
	
	//check $_POST vars are set, exit if any missing
	if(!isset($_POST["userName"]) || !isset($_POST["userEmail"]) || !isset($_POST["userMessage"]))
	{
		$output = json_encode(array('type'=>'error', 'text' => 'Les champs de saisie sont vides!'));
		die($output);
	}

	//Sanitize input data using PHP filter_var().
	$user_Name        = filter_var($_POST["userName"], FILTER_SANITIZE_STRING);
	$user_Email       = filter_var($_POST["userEmail"], FILTER_SANITIZE_EMAIL);
	$user_Message     = filter_var($_POST["userMessage"], FILTER_SANITIZE_STRING);
	
	$user_Message = str_replace("\&#39;", "'", $user_Message);
	$user_Message = str_replace("&#39;", "'", $user_Message);
	
	$user_Societe        = filter_var($_POST["userSociete"], FILTER_SANITIZE_STRING);
	$user_Tel        = filter_var($_POST["userTel"], FILTER_SANITIZE_STRING);
	$user_Subject        = filter_var($_POST["userSubject"], FILTER_SANITIZE_STRING);
	
	//additional php validation
	if(strlen($user_Name)<4) // If length is less than 4 it will throw an HTTP error.
	{
		$output = json_encode(array('type'=>'error', 'text' => '
Le nom est trop court ou vide!'));
		die($output);
	}
	if(!filter_var($user_Email, FILTER_VALIDATE_EMAIL)) //email validation
	{
		$output = json_encode(array('type'=>'error', 'text' => "S'il vous plaît entrer un email valide!"));
		die($output);
	}
	if(strlen($user_Message)<5) //check emtpy message
	{
		$output = json_encode(array('type'=>'error', 'text' =>"Message trop court! S'il vous plaît entrer quelque chose."));
		die($output);
	}
	
	//proceed with PHP email.
	$headers = 'From: '.$user_Email.'' . "\r\n" .
	'Reply-To: '.$user_Email.'' . "\r\n" .
	'X-Mailer: PHP/' . phpversion();
	$content="From:".$user_Name."\r\n
  Email :".$user_Email."\r\n
  Tel :".$user_Tel."\r\n
  Societe :".$user_Societe."\r\n
  Sujet :".$user_Subject."\r\n
  Message :</td><td>".$user_Message."\r\n";
	$sentMail = @mail($to_Email, $subject,$content, $headers);
	
	if(!$sentMail)
	{
		$output = json_encode(array('type'=>'error', 'text' => 'Could not send mail! Please check your PHP mail configuration.'));
		die($output);
	}else{
		$output = json_encode(array('type'=>'message', 'text' => $user_Name .'! Merci pour votre courriel'));
		die($output);
	}
}
?>