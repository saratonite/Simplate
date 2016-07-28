<?php
namespace Saratonite\Template;


class Simplate {


	public function __construct(){


	}


	public function make($templateString = "",$variables = array()){


		foreach($variables as $key => $value){

			 $templateString = str_replace('{'.$key.'}', $value, $templateString);
		}

		return $templateString;

	}

	
}