<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 *model to E_Articles entity
 */
use application\models\Entities\cakesDelight\E_Articles;
use applications\models\Entities\cakesDelight\E_Testimonials;
class M_ArticlesFront  extends MY_Model {
	var $articlesFront;
	function getArticlesFrontInformation(){
		   //get registered devices' details
			/*$this->equipment=$this->em->getRepository('models\Entities\E_Cakes')
			                       ->findAll( array());*/
			                       
			                       
	      /*using DQL*/
	      $query = $this->em->createQuery('SELECT a.title,a.dates,a.articleBody FROM models\Entities\cakesDelight\E_Articles a');
          $query = $this->em->createQuery('SELECT t.title,t.dates,t.testimonialsBody FROM models\Entities\cakesDelight\E_Testimonials t');
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
