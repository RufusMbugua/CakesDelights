<?php

class C_Front extends CI_Controller {

	public function _construct() {

		parent::_construct();
		$this -> load -> helper('url');

	}

	public function index() {
		$data['title'] = 'Welcome';
		$data['content'] = "<p>Cakes Delights</p>";
		$this -> load -> view('index', $data);
	}//End of index file
	
	public function cakes(){
		$data['title'] = 'Cakes';
		$data['content'] = "<p>Cakes Delights</p>";
		$this -> load -> view('cakes', $data);
	}
	
	public function articles(){
		$data['title'] = 'Articles';
		$data['content'] = "<p>Cakes Delights</p>";
		$this -> load -> view('articles', $data);
	}
public function moreinfo(){
		$data['title'] = 'More Info.';
		$data['content'] = "<p>Cakes Delights</p>";
		$this -> load -> view('more_info', $data);
	}
}
?>