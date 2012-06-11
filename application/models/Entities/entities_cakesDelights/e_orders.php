<?php
namespace models\Entities\cakesDelights;

/**
 * @Entity
 * @Table(name="orders")
 */
class E_Orders{
		/**
* @Id
* @Column(name="ordersID", type="integer", length=11, nullable=false)
* @GeneratedValue(strategy="AUTO")
* */
private $ordersID;
/**
* @Column(name="clientName", type="string",length=45, nullable=true)
* */
private $clientName;
/**
* @Column(name="cakeName", type="string",length=45, nullable=true)
* */
private $cakeName;
/**
* @Column(name="quantity", type="string",length=45, nullable=true)
* */
private $quantity;
/**
* @Column(name="dates", type="string",length=45, nullable=true)
* */
private $dates;
/**
* @Column(name="priceTotal", type="decimal", nullable=true)
* */
private $priceTotal;
public function getOrdersID() {
		return $this ->ordersID;
}

public function setOrdersID($ordersID) { $this -> ordersID = $ordersID;

}
public function getClientName() {
		return $this -> clientName;
}
	public function setClientName($clientName) { $this -> clientName = $clientName;

}
	public function getCakeName() {
		return $this ->cakeName;
}

public function setCakeName($cakeName) { $this -> cakeName = $cakeName;

}
public function getQuantity() {
		return $this ->quantity;
}
	public function setQuantity($quantity) { $this -> quantity = $quantity;
}
	public function getDates() {
		return $this ->dates;
}

public function setDates($dates) { $this -> dates = $dates;

}
public function getPriceTotal() {
		return $this -> priceTotal;
}
	public function setPriceTotal($priceTotal) { $this -> priceTotal = $priceTotal;

}
}
?>