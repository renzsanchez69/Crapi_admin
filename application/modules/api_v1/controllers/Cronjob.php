<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Example to override functions from API_Controller
 */
class Cronjob extends API_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->library('form_builder');
		$this->load->model('Todo_model', 'Todo');
		$this->load->model('User_model', 'User');
	}

	// [GET] /demo
	protected function get_items()
	{
		var_dump('test');
		die();
		
		$data = $this->Todo->get_todo_for_reminder();
		foreach ($data as $remind) {
			$sent = $this->send_sms($remind['contact_number'], $remind);
			if ($sent) {
				$this->Todo->update_info($remind['id'], array('reminded_flg' => IS_REMINDED));
			}
		}

		$this->to_response($data);
	}

	public function send_sms($number, $params){
		//create client with api key and secret
		$client = new Nexmo\Client(new Nexmo\Client\Credentials\Basic(NEXMO_API_KEY, NEXMO_API_SECRET));
		$text = 'Hi '. $params['firstname'].', ---------------------.';
		//send message using simple api params
		// $message = $client->message()->send([
		// 	'to' =>   '+63'.$number,
		// 	'from' => NEXMO_FROM,
		// 	'text' => $text
		// ]);
		
		//array access provides response data
		// echo "Sent message to " . $message['to'] . ". Balance is now " . $message['remaining-balance'] . PHP_EOL;

		echo "<pre>";
		var_dump($text);
		exit();
		return $message;
	}

	// [GET] /demo/{id}
	protected function get_item($id)
	{
		$data = array('id' => $id, 'name' => 'Demo '.$id);
		$this->to_response($data);
	}
	
	// [GET] /demo/{parent_id}/{subitem}
	protected function get_subitems($parent_id, $subitem)
	{
		$data = array(
			array('id' => 1, 'name' => 'Parent '.$parent_id.' - '.$subitem.' 1'),
			array('id' => 2, 'name' => 'Parent '.$parent_id.' - '.$subitem.' 2'),
			array('id' => 3, 'name' => 'Parent '.$parent_id.' - '.$subitem.' 3'),
		);
		$this->to_response($data);
	}

	// [POST] /demo
	protected function create_item()
	{
		$params = elements(array('filter', 'valid', 'fields', 'here'), $this->mParams);
		$this->to_created();
	}

	// [PUT] /demo/{id}
	protected function update_item($id)
	{
		$params = elements(array('filter', 'valid', 'fields', 'here'), $this->mParams);
		$this->to_accepted();
	}

	// [DELETE] /demo/{id}
	protected function remove_item($id)
	{
		$this->to_accepted();
	}
}
