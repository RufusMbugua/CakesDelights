<?php
namespace models\Entities\entities_cakesDelights;

/**
 * @Entity
 * @Table(name="cakes")
 */
class E_Cakes{
		/**
* @Id
* @Column(name="cakesID", type="integer", length=11, nullable=false)
* @GeneratedValue(strategy="AUTO")
* */
private $cakesID;
/**
* @Column(name="cakeName", type="string",length=45, nullable=true)
* */
private $cakeName;
/**
* @Column(name="cakesTitle", type="string",length=45, nullable=true)
* */
private $cakesTitle;
/**
* @Column(name="description", type="string",length=45, nullable=true)
* */
private $description;
/**
* @Column(name="cakesPrice", type="string",length=45, nullable=true)
* */
private $cakesPrice;
/**
* @Column(name="tags", type="string", nullable=true)
* */
private $tags;
public function getCakesID() {
		return $this ->cakesID;
}

public function setCakesID($cakesID) { $this -> cakesID = $cakesID;

}
public function getCakeName() {
		return $this -> cakeName;
}

public function setCakeName($cakeName) { $this -> cakeName = $cakeName;
}
public function getCakesTitle() {
		return $this -> cakesTitle;
}

public function setCakesTitle($cakesTitle) { $this -> cakesTitle = $cakesTitle;
}
public function getDescription() {
		return $this -> description;
}

public function setDescription($description) { $this -> description = $description;
}
public function getCakesPrice() {
		return $this -> cakesPrice;
}

public function setCakesPrice($cakesPrice) { $this -> cakesPrice = $cakesPrice;
}
public function getTags() {
		return $this -> tags;
}

public function setTags($tags) { $this -> tags = $tags;
}
}
?>