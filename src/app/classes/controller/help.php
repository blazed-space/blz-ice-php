<?php

class Controller_Help extends Controller_Ice{
	public function action_docs($section){
    	$this->layout->page = 6;
        $this->layout->title = "Documentation - " . $section;
        $this->layout->content = 'docs/' . $section;
    }
}