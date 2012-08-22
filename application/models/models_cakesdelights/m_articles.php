<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 *model to E_Cakes entity
 */
use application\models\Entities\entities_cakesdelights\e_articles;

class M_Articles  extends MY_Model {
	var $articles;
	function getArticlesInformation(){
		   //get registered devices' details
			/*$this->equipment=$this->em->getRepository('models\Entities\E_Cakes')
			                       ->findAll( array());*/
			                       
			                       
	      /*using DQL*/
	      $query = $this->em->createQuery('SELECT a.title,a.dates,a.articleBody,a.tags FROM models\Entities\entities_cakesdelights\e_articles a');
          
          $this->articles = $query->getResult();
						foreach ($this->articles as $key=>$value) {
									// print $this->equipment[$key]['deviceCompNumber']."<br />";
									//print $value['title'].'<br />';
									//print $value['dates'].'<br />';
									//print $value['articleBody'].'<br />';
									//print $value['tags'].'<br />';
									//var_dump($this->articles);
								  }
		   return $this->articles;
		
	}/*close getManucDevicesByIodizationCenter($iodizationCentreName)*/
	
}
?>