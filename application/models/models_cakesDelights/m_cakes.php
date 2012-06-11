<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 *model to E_Cakes entity
 */
use application\models\Entities\cakesDelights\E_Cakes;

class M_Cakes  extends MY_Model {
	var $cakes;
	function getCakesInformation(){
		   //get registered devices' details
			/*$this->equipment=$this->em->getRepository('models\Entities\E_Cakes')
			                       ->findAll( array());*/
			                       
			                       
	      /*using DQL*/
	      $query = $this->em->createQuery('SELECT c.cakesTitle,c.description,c.cakesPrice,c.tags FROM models\Entities\entities_cakesDelights\E_Cakes c');
          
          $this->cakes = $query->getResult();
						foreach ($this->cakes as $key=>$value) {
									// print $this->equipment[$key]['deviceCompNumber']."<br />";
									print $value['cakesTitle'].'<br />';
									var_dump($this->cakes);
								  }
		   return $this->cakes;
		
	}/*close getManucDevicesByIodizationCenter($iodizationCentreName)*/
	
}
?>