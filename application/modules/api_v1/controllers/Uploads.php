<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uploads extends API_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Product_model', 'product');
	}

	public function upload_image(){
		$postData = $this->input->post();
		$category = !empty($postData['image_category']) ? $postData['image_category'] : 'image';

		if (empty($_FILES[$category])) {
			$this->to_response([
	            "result"=> REQUEST_RESULT_NG,
	            "error" => "Image category not set. Make sure category name is same with image input name."
			]);
		}

		$path_parts = pathinfo($_FILES[$category]["name"]);
		$filename = $category.'_'.time().uniqid().'.'.$path_parts['extension'];
		$uploadImageRes = $this->saveToLocalFolders($category, $filename, $category);

		if (!$uploadImageRes) {
			$this->to_response([
				"result"=> REQUEST_RESULT_NG,
	            "error" => "Failed to upload image."
			]);
		}

		$uploadImageRes['image_url'] = $category.'/'.$uploadImageRes['orig_name'];

		$this->to_response([
            "data" => $uploadImageRes,
            "result"=> REQUEST_RESULT_OK
		]);
	}

	public function saveToLocalFolders($filekey, $filename, $path) {
		if (empty($path)) {
			return false;
		}
		$path = UPLOADS_DIR.$path;
		if (!file_exists($path)) {
			mkdir($path, 0777, true);
		}

		$config = array(
			'upload_path' => $path,
			'allowed_types' => "gif|jpg|png|jpeg",
			'overwrite' => 1,
			// 'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
			// 'max_height' => "768",
			// 'max_width' => "1024",
			'file_name' => $filename
		);
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$this->upload->do_upload();
		if ($this->upload->do_upload($filekey)) {
			return $this->upload->data();
		} else {
			return false;
		}
	}

}
