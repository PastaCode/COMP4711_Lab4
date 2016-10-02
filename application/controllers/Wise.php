<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Wise extends Application
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
        bingo();
    }

    /**
     * A page that contains a quote and image based on the parameter id
     */
    public function bingo()
    {
        // this is the view we want shown
        $this->data['pagebody'] = 'justone';

        // Load the data of the id of the author, store in data array
        $record = $this->quotes->get(6);
        $this->data = array_merge($this->data, $record);

        $this->render();
    }
}
