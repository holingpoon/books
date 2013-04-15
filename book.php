<?php
    class Book {
        private $title = '';
	private $lastname = '';
	private $firstname = '';
	private $isbn = '';

	public function __construct($title, $lastname, $firstname, $isbn) {
		$this->title = $title;
		$this->lastname = $lastname;
		$this->firstname = $firstname;
		$this->isbn = $isbn;
	}

	public function setTitle($newTitle) {
		$this->title = $newTitle;
	}
	public function getTitle() {
		return $this->title;
	}

	public function setLastName($newLastName) {
		$this->lastname = $newLastName;
	}
	public function getLastName() {
		return $this->lastname;
	}

	public function setFirstName($newFirstName) {
		$this->firstname = $newFirstName;
	}
	public function getFirstName() {
		return $this->firstname;
	}
	
	public function setISBN($newISBN) {
		$this->isbn = $newISBN;
	}
	public function getISBN() {
		return $this->isbn;
	}
	public function printBook() {
		echo $this->title . "\n" . $this->firstname . " " . $this->lastname . "\n";
		echo $this->isbn . "\n";
	}
    }
    $obj = new Book("Dandelion Wine", "Bradbury", "Ray", "0553277537");
    //$obj->setTitle("Dandelion Wine");
    $obj->printBook();

?>
