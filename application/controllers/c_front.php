<?php

class C_Front extends CI_Controller {
    var $data;
	public function _construct() {

		parent::_construct();
		$this->data='';
		$this -> load -> helper('url');

	}

	public function index() {
		$data['title'] = 'Welcome';
		$data['content'] = "<p>Cakes Delights</p>";
		$this -> load -> view('index', $data);
	}//End of index file
	
	public function cakes(){
		$this->getCakes();
		$this->data['cakesTitle']="cakes";
		$this->data['content'] = "<p>Cakes Delights</p>";
		$this -> load -> view('cakes', $this->data);
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
public function getCakes(){
	$this->load->model('models_cakesDelight/M_Cakes');
	$this->M_Cakes->getCakesInformation();
	$this->data['cakes']=$this->M_Cakes->cakes;
	//$this->load->view('cakes', $data);
	
}
public function getArticles(){
	$this->load->model('models_cakesDelight/M_Articles');
	$this->M_Articles->getArticlesInformation();
}
public function getArticlesFront(){
	$this->load->model('models_cakesDelight/M_ArticlesFront');
	$this->M_ArticlesFront->getArticlesFrontInformation();
}
}
?>