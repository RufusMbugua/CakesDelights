<?php
namespace models\Entities\cakesDelights;

/**
 * @Entity
 * @Table(name="client")
 */
class E_Cakes{
		/**
* @Id
* @Column(name="clientID", type="integer", length=11, nullable=false)
* @GeneratedValue(strategy="AUTO")
* */
private $clientID;
/**
* @Column(name="clientName", type="string",length=45, nullable=true)
* */
private $clientName;
/**
* @Column(name="email", type="string",length=45, nullable=true)
* */
private $email;
/**
* @Column(name="age", type="string",length=45, nullable=true)
* */
private $age;
public function getClientID() {
		return $this ->clientID;
}

public function setClientID($clientID) { $this -> clientID = $clientID;

}
public function getClientName() {
		return $this -> clientName;
}
	public function setClientName($clientName) { $this -> clientName = $clientName;

}
	public function getEmail() {
		return $this -> email;
}

public function setEmail($email) { $this -> email = $email;
}
public function getAge() {
		return $this -> age;
}

public function setAge($age) { $this -> age = $age;
}
}
?>