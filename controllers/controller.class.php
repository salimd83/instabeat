<?php

class Controller{
	protected $layout;

	public function __construct(){
		$this->layout = include('templates/layout.php');
	}

}