<?php

class Controller
{
    public function __construct()
    {
        $this->view = new View();
    }

    public function indexAction(){
        $this->view = new View();
    }
} 
