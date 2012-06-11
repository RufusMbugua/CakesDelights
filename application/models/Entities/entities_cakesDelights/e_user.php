<?php
namespace models\Entities\cakesDelights;

/**
 * @Entity
 * @Table(name="orders")
 */
class E_Orders{
		/**
* @Id
* @Column(name="userID", type="integer", length=11, nullable=false)
* @GeneratedValue(strategy="AUTO")
* */
private $userID;
/**
* @Column(name="userName", type="string",length=45, nullable=true)
* */
private $userName;
/**
* @Column(name="password", type="string",length=45, nullable=true)
* */
private $password;
/**
* @Column(name="userRights", type="string",length=45, nullable=true)
* */
private $userRights;
/**
* @Column(name="clientID", type="integer",length=11, nullable=true)
* */
private $clientID;
public function getUserID() {
		return $this ->userID;
}

public function setUserID($userID) { $this -> userID = $userID;

}
public function getUserName() {
		return $this -> userName;
}
	public function setUserName($userName) { $this ->userName = $userName;

}
public function getPassword() {
		return $this -> password;
}
	public function setPassword($password) { $this ->password = $password;
}
	public function getUserRights() {
		return $this -> userRights;
}
	public function setUserRights($userRights) { $this ->userRights = $userRights;
}
public function getClientID() {
		return $this -> clientID;
}
	public function setClientID($clientID) { $this ->clientID = $clientID;

}	
}
?>
