<?php
/*
* Contact Form Class
*/

$admin_email = 'villa.ellerslie@gmail.com'; // Your Email
$message_min_length = 5; // Min Message Length


class Contact_Form{
	function __construct($details, $admin_email, $message_min_length){
		
		$this->name = stripslashes($details['name']);
		$this->tel = stripslashes($details['tel']);
		$this->email = trim($details['email']);
		$this->subject = 'Contact from Your Website'; // Subject 
		$this->message = stripslashes($details['message']);
	
		$this->admin_email = $admin_email;
		$this->message_min_length = $message_min_length;
		
		$this->response_status = 1;
		$this->response_html = '';
	}


	private function validateEmail(){
		$regex = '/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i';
	
		if($this->email == '') { 
			return false;
		} else {
			$string = preg_replace($regex, '', $this->email);
		}
	
		return empty($string) ? true : false;
	}


	private function validateFields(){
		// Check name
		if(!$this->name)
		{
			$this->response_html .= '<p>Veuillez entrer votre nom</p>';
			$this->response_status = 0;
		}
		// Check Tel
		if(!$this->tel)
		{
			$this->response_html .= '<p>Veuillez entrer votre numero de telephone</p>';
			$this->response_status = 0;
		}
		// Check email
		if(!$this->email)
		{
			$this->response_html .= '<p>Veuillez entrer votre numero de télephone</p>';
			$this->response_status = 0;
		}
		
		// Check valid email
		if($this->email && !$this->validateEmail())
		{
			$this->response_html .= '<p>veuillez rentrer une adresse e-mail valide</p>';
			$this->response_status = 0;
		}
		
		// Check message length
		if(!$this->message || strlen($this->message) < $this->message_min_length)
		{
			$this->response_html .= '<p>Message trop court, rentrez un message d\'au moins ' .$this->message_min_length.' caractères</p>';
			$this->response_status = 0;
		}
	}


	private function sendEmail(){
		$mail = mail($this->admin_email, $this->subject, $this->message." Numero de telephone: ".$this->tel,
			 "From: ".$this->name." <".$this->email.">\r\n"
			."Reply-To: ".$this->email."\r\n"
		."X-Mailer: PHP/" . phpversion());
	
		if($mail)
		{
			$this->response_status = 1;
			$this->response_html = '<p>Message bien envoyé!</p>';
		}
	}


	function sendRequest(){
		$this->validateFields();
		if($this->response_status)
		{
			$this->sendEmail();
		}

		$response = $this->response_html;
		
		return $response;
	}
}

if(isset($_POST)){
	$contact_form = new Contact_Form($_POST, $admin_email, $message_min_length);
	$response = $contact_form->sendRequest();
	echo "<div class='alert alert-info'>". $response . "</div>";
}


?>