<?php

class Home extends Controller{
	public function index(){
		echo "action: index, controller: index";
		$content = "bla bla";
		echo $this->layout;
	}
}