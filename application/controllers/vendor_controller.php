<?php

class vendor_controller extends CI_Controller
{
    public function __construct() {
        parent::__construct();
    }
    
    public function index()
    {
        
        $this->load->view('vendor_view');
    }
    
}