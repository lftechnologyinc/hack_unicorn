<?php

class Vendor extends CI_Controller
{
    public function __construct() {
        parent::__construct();
    }
    
    public function index()
    { //echo "Entered here";die;
        $this->load->view('vendor_view');
    }
    
    public function add(){
        
    }
    
    public function edit(){
        
    }
    
    public function delete(){
        
    }
    
}