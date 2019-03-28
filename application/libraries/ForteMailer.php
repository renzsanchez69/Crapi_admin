<?php
// lib/talk_mailer/TalkMailer.php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once("Exception.php");
require_once("PHPMailer.php");
require_once("SMTP.php");


class ForteMailer extends PHPMailer
{
	function __construct() {
		parent::__construct(true);
		try {
			$this->SMTPOptions = array(
				'ssl' => array(
					'verify_peer' => false,
					'verify_peer_name' => false,
					'allow_self_signed' => true
				)
			);

			// MARK: Server settings      
			$this->CharSet = 'UTF-8';								// Enable verbose debug output
			$this->isSMTP();										// Set mailer to use SMTP
			$this->Host = 'smtp.gmail.com';  					// Specify main and backup SMTP servers
			$this->SMTPAuth = true;									// Enable SMTP authentication
			$this->SMTPSecure = 'ssl';			// Enable TLS encryption, `ssl` also accepted
			$this->Port = 465;					// TCP port to connect to

			$this->Username = 'forteeightcatering@gmail.com';				// SMTP username
			$this->Password = 'capstone123';							// SMTP password

			$this->setFrom('forteeightcatering@gmail.com');
			$this->addReplyTo('forteeightcatering@gmail.com');
			$this->Sender = 'forteeightcatering@gmail.com';

			return $this;
		} catch (Exception $e) {
			log_message('error', __METHOD__." - ".$e);
		} catch (PHPMailer\PHPMailer\Exception $e) { 
			log_message('error', __METHOD__." - ".$e);
		}
		
	}
}