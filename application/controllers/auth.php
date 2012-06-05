<?php
/*helps authenticate a user*/
class Auth extends CI_Controller {

	public function _construct() {
		parent::_construct();
		$this -> load -> helper('url');
	}

	public function login() {
		$this -> load -> model('UsersModel');

		$this -> UsersModel -> get_user();

		if ($this -> UsersModel -> isUser != false) {
			#find a better way to redirect w/ CI :-)

			$email = $this -> UsersModel -> email;

			$newdata = array('email' => $email, 'logged_in' => TRUE);

			$this -> session -> set_userdata($newdata);

			header("Location: " . base_url() . 'index.php/' . 'front/vehicles');

		} else {
			#use an ajax request and not a whole refresh
			$data['form'] = '<p>User Not Found!<p>';
			$this -> load -> view('index', $data);
		}

	}

}
?>
