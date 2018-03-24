
<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Multicat extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

public function index(){
$this->categories();
}


 public function categories(){

    $this->load->model('Model_cat');
	$data = $this->Model_cat->get_categories();
    echo "<pre>";
	print_r($data);die('moikjki');
    }
}