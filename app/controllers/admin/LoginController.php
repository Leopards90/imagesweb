<?php
namespace Train\Controllers\Admin;

use Phalcon\Mvc\Controller;

class LoginController extends Controller
{

    public function indexAction()
    {
    	echo "<h1>Test</h1>";

    	echo $this->tag->linkTo("Signup","Signup here");
    }

}

