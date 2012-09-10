<?php
namespace models\Entities\entities_cakesDelights;

/**
 * @Entity
 * @Table(name="articles")
 */
class E_Articles{
		/**
* @Id
* @Column(name="articlesID", type="integer", length=11, nullable=false)
* @GeneratedValue(strategy="AUTO")
* */
private $articlesID;
/**
* @Column(name="author", type="string",length=45, nullable=true)
* */
private $author;
/**
* @Column(name="dates", type="string",length=45, nullable=true)
* */
private $dates;
/**
* @Column(name="title", type="string",length=45, nullable=true)
* */
private $title;
/**
* @Column(name="userName", type="string",length=45, nullable=true)
* */
private $userName;

/**
* @Column(name="articleBody", type="string",length=45, nullable=true)
* */
private $articleBody;
/**
* @Column(name="tags", type="string",length=45, nullable=true)
* */
private $tags;


public function getArticlesID() {
		return $this -> articlesID;
}

public function setArticlesID($articlesID) { $this -> articlesID = $articlesID;
}
public function getAuthor() {
		return $this -> author;
}

public function setAuthor($author) { $this -> author = $author;
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
public function getUserName() {
		return $this -> userName;
}

public function setUserName($userName) { $this -> userName = $userName;
}
public function getArticleBody() {
		return $this -> ArticleBody;
}

public function setArticleBody($ArticleBody) { $this -> ArticleBody= $ArticleBody;
}
public function getTags() {
		return $this -> tags;
}

public function setTags($tags) { $this -> tags = $tags;
}
}
?>