<?php

namespace App\Controllers;

use InfoEnter\Controller\Action;

class IndexController extends Action {
    
    


    public function index()
    {
        $this->view->cars = array("Mustang", "Ferrari", "BMW");
        $this->render("index");
    }
    
    public function contact()
    {
        $this->view->cars = array("Mustang", "Ferrari"); 
         $this->render("contact");
    }
    
    

}

