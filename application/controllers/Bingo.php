<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bingo extends Application
{
    function __construct()
    {
        parent::__construct();
    }

    /**
     * A page that contains Socrates' quote and image
     */
    public function index()
    {
        // this is the view we want shown
        $this->data['pagebody'] = 'justone';
        // Load the data for Socrates
        $record = $this->quotes->get(5);
        $this->data = array_merge($this->data, $record);
        $this->render();
    }
}    
