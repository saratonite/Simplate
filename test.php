<?php
require "vendor/autoload.php";


echo Saratonite\Template\Simplate::compileString("Hello {msg}",array('msg'=>'World'));
