<?php
namespace models\Entities\cakesDelights;

/**
 * @Entity
 * @Table(name="orders")
 */
class E_Orders{
		/**
* @Id
* @Column(name="orderDetailsID", type="integer", length=11, nullable=false)
* @GeneratedValue(strategy="AUTO")
* */
private $orderDetailsID;
/**
* @Column(name="ordersID", type="integer",length=11, nullable=true)
* */
private $ordersID;
/**
* @Column(name="cakesID", type="integer",length=11, nullable=true)
* */
private $cakesID;
public function getOrderDetailsID() {
		return $this ->orderDetailsID;
}

public function setOrderDetailsID($orderDetailsID) { $this -> orderDetailsID = $orderDetailsID;
}
public function getOrdersID() {
		return $this ->ordersID;
}

public function setOrdersID($ordersID) { $this -> ordersID = $ordersID;

}
public function getCakesID() {
		return $this ->cakesID;
}

public function setCakesID($cakesID) { $this -> cakesID = $cakesID;

}
}
?>