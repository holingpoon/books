<?php
    class Book {
        public $title = '';
	private $lastname = '';
	private $firstname = '';
	private $isbn = '';

	public function __get($property) {
		if ($property === 'title')
			return $title;
	}
	public function __set($property,$value) {
		if ($property === 'title')
			$this->title = $value;
	}
    }
    $obj = new Book();
    $obj->title= "Dandelion Wine";
    echo $obj->title . "\n";
?>
