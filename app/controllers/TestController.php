<?php

class TestController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
    	echo "<h1>Test</h1>";

    	echo $this->tag->linkTo("Signup","Signup here");
    }

}

