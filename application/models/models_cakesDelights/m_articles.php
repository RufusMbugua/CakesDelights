<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 *model to E_Cakes entity
 */

use application\models\Entities\entities_cakesDelights\E_Articles;


class M_Articles  extends MY_Model {
	var $articles;
	function getArticlesInformation(){
		   //get registered devices' details
			/*$this->equipment=$this->em->getRepository('models\Entities\E_Cakes')
			                       ->findAll( array());*/
			                       
			                       
	      /*using DQL*/

	      $query = $this->em->createQuery('SELECT a.title AS TITLE,a.dates AS DATE,a.articleBody AS BODY,a.tags AS TAG FROM models\Entities\entities_cakesDelights\E_Articles a');
          
          $this->articles = $query->getResult();

		   return $this->articles;
		
	}

	
}
?>