<?php

class C_Front extends CI_Controller {
	var $data;
	var $count;
	public function _construct() {

		parent::_construct();
		$this -> data = '';
		$this->load->helper(array('form','url'));
		$this -> count = 1;

	}

	public function index() {
		$data['title'] = 'Welcome';
		$data['content'] = "<p>Cakes Delights</p>";
		$this->cakeSearch();
		$this -> load -> view('index', $data);
	}//End of index file

	public function cakes() {
		$this -> getCakes();
		$this -> data['title'] = "Cakes";
		$this -> data['content'] = "<p>Cakes Delights</p>";
		$this -> data['count'] = $this -> count;
		$this -> load -> view('cakes', $this -> data);
	}

	public function articles() {
	
		$this->getArticles();
		
	}

	public function moreinfo() {
		$data['title'] = 'More Info.';
		$data['content'] = "<p>Cakes Delights</p>";
		$this -> load -> view('more_info', $data);
	}

	public function getCakes() {
		$this -> load -> model('models_cakesDelights/M_Cakes');
		$this -> M_Cakes -> getCakesInformation();
		$this -> data['cakes'] = $this -> M_Cakes -> cakes;
		//$this->load->view('cakes', $data);

	}

	public function getArticles() {
		$this -> load -> model('models_cakesDelights/M_Articles');
		$this -> data['content'] = "<p>Articles Cakes Delights</p>";
		$this->data['title']="View Articles";
        $this -> data['articles'] = $this -> M_Articles ->getArticlesInformation();
        $this -> load -> view('articles', $this -> data);
	}

	public function getArticlesFront() {
		$this -> load -> model('models_cakesDelights/M_ArticlesFront');
		$this -> M_ArticlesFront -> getArticlesFrontInformation();
	}
	
	public function ArticleCreator(){
		$this->data['title']="Article Creator";
		$this -> load -> view('article_post', $this -> data);
		
		
		
	}
	
	public function setArticles(){
		@$title=$_POST['title'];
		@$content=$_POST['body'];
		@$tags=$_POST['tags'];
		$thedate=date('Y-m-d');
		
		$data = array(
           'articlesID`' => 'NULL' ,
           'author' => 'Marete' ,
           'dates' => $thedate,
           'title' => $title ,
           'userName' => 'mbuguarufus' ,
           'articleBody' => $content,
           'tags' => $tags
        );

       $this->db->insert('articles', $data); 

		$this -> data['hed'] = "Article Creator";
		$this -> data['content'] = "<p>Article Posted Successfully</p>";
		$this -> load -> view('article_success', $this -> data);
	}
	
public function getCakesInfo(){
	
	$val=@$_POST['txtsearch'];
	//echo $val;
	$query=$this->db->query("select * from cakes where cakeName='$val'");
	if($query->num_rows()>0){
	  
	  $this -> data['cakes']=$query->result();
	  $this -> data['title'] = "Cake Details";
	  $this -> load -> view('cake_v', $this -> data);
		
    }
    else{
     $this -> data['message'] = "NO MATCH";
     $this -> load -> view('navigation', $this -> data);	
	 	
    }
	
	
		
}	
	
	
	
	
	
	
	
	public function cakeSearch(){
		
	
	@$q = strtolower($_GET["q"]);
	if (!$q){
	
	
	}
	else{
 
	$this -> data['title']="Cake Details";
	$query =$this -> db->query("select cakeName from cakes where cakeName LIKE '%$q%'");
	if($query->num_rows()>0){
	foreach ($query->result() as $row){
		
	  Print $row->cakeName."\n";
       
    }
	
	
	}
	else{
				
	Print "No Results \n";		
		
	}
			
	}	
		
		
		
	}

}
?>