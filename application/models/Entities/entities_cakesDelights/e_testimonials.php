<?php
namespace models\Entities\cakesDelights;

/**
 * @Entity
 * @Table(name="testimonials")
 */
class E_Testimonials{
		/**
* @Id
* @Column(name="testimonialsID", type="integer", length=11, nullable=false)
* @GeneratedValue(strategy="AUTO")
* */
private $testimonialsID;
/**
* @Column(name="clientName", type="string",length=45, nullable=true)
* */
private $clientName;
/**
* @Column(name="dates", type="string",length=45, nullable=true)
* */
private $dates;
/**
* @Column(name="title", type="string",length=45, nullable=true)
* */
private $title;
public function getTestimonialsID() {
		return $this ->testimonialsID;
}

public function setTestimonialsID($testimonialsID) { $this -> testimonialsID = $testimonialsID;

}
public function getClientName() {
		return $this -> clientName;
}
	public function setClientName($clientName) { $this -> clientName = $clientName;

}
	public function getDates() {
		return $this -> dates;
}
	public function setDates($dates) { $this -> dates = $dates;
}
	public function getTitle() {
		return $this -> title;
}
	public function setTitle($title) { $this -> title = $title;
}
}
?>