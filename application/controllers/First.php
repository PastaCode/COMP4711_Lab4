<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class First extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Homepage for our app
	 */
	public function index()
	{
            // this is the view we want shown
            $this->data['pagebody'] = 'justone';
                
            $record = $this->quotes->first();
            $this->data = array_merge($this->data, $record);

            $this->render();
	}

        public function wut()
        {
                       // this is the view we want shown
            $this->data['pagebody'] = 'justone';
                
            $record = $this->quotes->last();
            $this->data = array_merge($this->data, $record);

            $this->render(); 
        }
}
