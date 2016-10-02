<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class First extends Application
{
    function __construct()
    {
        parent::__construct();
    }

    /**
     * A page that contains Bob Monkhouse's quote and image
     */
    public function index()
    {
        // this is the view we want shown
        $this->data['pagebody'] = 'justone';

        // Load the data from the first author, store in data array
        $record = $this->quotes->get(1);
        $this->data = array_merge($this->data, $record);

        $this->render();
    }
    
    /**
     * A page that contains Bob Monkhouse's quote and image
     */
    public function zzz()
    {
        // this is the view we want shown
        $this->data['pagebody'] = 'justone';

        // Load the data of Bob Monkhouse, store in data array
        $record = $this->quotes->get(1);
        $this->data = array_merge($this->data, $record);

        $this->render();
    }
    
    /**
     * A page that contains a quote and image based on the parameter id
     */
    public function gimme($id)
    {
        // this is the view we want shown
        $this->data['pagebody'] = 'justone';

        // Load the data of the id of the author, store in data array
        $record = $this->quotes->get($id);
        $this->data = array_merge($this->data, $record);

        $this->render();
    }
}
