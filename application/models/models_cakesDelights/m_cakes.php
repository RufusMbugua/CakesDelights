<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 *model to E_Cakes entity
 */
use application\models\Entities\cakesDelights\E_Cakes;

class M_Cakes  extends MY_Model {
	var $cakes, $tags;
	function getCakesInformation(){
		   //get registered devices' details
			/*$this->equipment=$this->em->getTags('models\Entities\cakesDelight\E_Cakes')
			                       ->findAll( array());
			                       
			 $this->elements=array();         */             
	      /*using DQL*/
<<<<<<< HEAD:application/models/models_cakesDelights/m_cakes.php
	      $query = $this->em->createQuery('SELECT c.cakesTitle,c.description,c.cakesPrice,c.tags FROM models\Entities\entities_cakesDelights\E_Cakes c');
=======
	      
	      $query = $this->em->createQuery('SELECT c.cakesTitle,c.description,c.cakesPrice,c.tags FROM models\Entities\cakesDelight\E_Cakes c');
>>>>>>> f3bc20d971eab32b12a04ff8b0fed2bc12e66c2e:application/models/models_cakesDelight/m_cakes.php
          
          $this->cakes = $query->getResult();
						//foreach ($this->cakes as $key=>$value) {
									//print $this->cakes[$key]['cakesDescription'];
							        //print $this->cakes[$key]['cakeFooter'];
									//print $value['description'];
									//print $value['tags'];
									//var_dump($this->cakes);
								//  }
		   return $this->cakes;
		   
	}/*close getManucDevicesByIodizationCenter($iodizationCentreName)*/
	
}
?>