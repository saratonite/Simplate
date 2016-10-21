<?php
namespace Saratonite\Template;


class Simplate {


	public function __construct(){


	}


	public function compileString($templateString = "",$variables = array()){
		if(empty($variables)) return $templateString;
		foreach($variables as $key => $value){

			 $templateString = str_replace('{'.$key.'}', $value, $templateString);
		}

		return $templateString;

	}


}
