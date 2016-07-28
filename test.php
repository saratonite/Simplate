<?php
require "vendor/autoload.php";


echo Saratonite\Template\Simplate::make("Hello {msg}",array('msg'=>'World'));