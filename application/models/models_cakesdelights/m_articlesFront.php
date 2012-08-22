<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 *model to E_Articles entity
 */

use application\models\Entities\entities_cakesDelights\E_Articles;
use applications\models\Entities\entities_cakesDelights\E_Testimonials;

class M_ArticlesFront  extends MY_Model {
	var $articlesFront;
	function getArticlesFrontInformation(){
		   //get registered devices' details
			/*$this->equipment=$this->em->getRepository('models\Entities\E_Cakes')
			                       ->findAll( array());*/
			                       
			                       
	      /*using DQL*/
	      $query = $this->em->createQuery('SELECT a.title,a.dates,a.articleBody FROM models\Entities\entities_cakesdelights\e_articles a');
          $query = $this->em->createQuery('SELECT t.title,t.dates,t.testimonialsBody FROM models\Entities\entities_cakesdelights\e_testimonials t');
          $this->articlesFront = $query->getResult();
						foreach ($this->articlesFront as $key=>$value) {
									// print $this->equipment[$key]['deviceCompNumber']."<br />";
									print $value['title'].'<br />';
									var_dump($this->articlesFront);
								  }
		   return $this->articlesFront;
		
	}/*close getManucDevicesByIodizationCenter($iodizationCentreName)*/
	
}
?>
