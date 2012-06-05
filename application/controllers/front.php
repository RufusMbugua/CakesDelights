<?php

class Front extends CI_Controller {

	public function _construct() {

		parent::_construct();
		$this -> load -> helper('url');

	}

	public function index() {
		$data['title'] = 'Welcome';
		$data['content'] = "<p>Cakes Delights</p>";
		$this -> load -> view('index', $data);
	}//End of index file

}
?>