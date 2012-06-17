<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 *model to E_Cakes entity
 */
use application\models\Entities\cakesDelights\E_Cakes;

class M_Cakes  extends MY_Model {
	var $cakes, $tags;
	function getCakesInformation() {
		//get registered devices' details
		/*$this->equipment=$this->em->getTags('models\Entities\cakesDelight\E_Cakes')
		 ->findAll( array());

		 $this->elements=array();         */
		/*using DQL*/

		$query = $this -> em -> createQuery('SELECT c.cakesTitle,c.description,c.cakesPrice,c.tags FROM models\Entities\entities_cakesDelights\E_Cakes c');

		$this -> cakes = $query -> getResult();
		//foreach ($this->cakes as $key=>$value) {
		//print $this->cakes[$key]['cakesDescription'];
		//print $this->cakes[$key]['cakeFooter'];
		//print $value['description'];
		//print $value['tags'];
		//var_dump($this->cakes);
		//  }
		return $this -> cakes;

	}/*close getManucDevicesByIodizationCenter($iodizationCentreName)*/

}

function getSpecificCakesInformation($cakeTitle) {
	

	$query = $this -> em -> createQuery("SELECT c.cakesTitle,c.description,c.cakesPrice,c.tags FROM models\Entities\entities_cakesDelights\E_Cakes c WHERE c.cakesTitle LIKE %'".$cakesTitle."'");

	$this -> cakes = $query -> getResult();
	
	return $this -> cakes;

}/*close getManucDevicesByIodizationCenter($iodizationCentreName)*/


?>