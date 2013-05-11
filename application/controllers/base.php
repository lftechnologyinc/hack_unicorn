<?php

class base extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
    
    public function index()
    {
       // echo base_url('assets'); die;
        $this->load->view('base_view');
    }
    
}