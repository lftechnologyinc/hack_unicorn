<?php

class Vendor extends CI_Controller
{
    public function __construct() {
        parent::__construct();
         $this->load->library(array('pagination', 'bitauth'));
    }
    
    public function index()
    { 

        $config['uri_segment'] 	= 3;
        $config['total_rows']   = 30;
	$config['per_page'] =$data['per_page']	= $per_page = 5;
        $data['page']   = $page = $this->uri->segment(3);
        $start = (!empty($page))?($per_page * ($page-1)):0 ;

        $vendor_list[0] = array( 
            'company' => 'leapfrog'
        );   
        $vendor_list[1] = array( 
            'company' => 'Makalu'
        );  
        $vendor_list[2] = array( 
            'company' => 'Sajha'
        );  
        $vendor_list[3] = array( 
            'company' => 'Agni'
        );  
        $vendor_list[4] = array( 
            'company' => 'Tiger'
        );  
        $vendor_list[5] = array( 
            'company' => 'Sita'
        );  
        $data['vendor_list'] = $vendor_list;
        
	$config['total_rows']     = 30;		 
	$config['base_url']       = base_url('vendor/index');
	$this->pagination->initialize($config); 
        
        $this->load->view('vendor_view',$data);
        //$this->add();
    }
    
    public function add(){
        $this -> load -> view('vendor_add');
       
    }
    
    public function create(){
         
     if ($this -> input -> post()) {
            $insert_data = array(	'c_name' => $this -> input -> post('c_name'),
                        		'address' => $this -> input -> post('address'), 
					'contact' => $this -> input -> post('contact'),
					'email' => $this -> input -> post('email'),
					);
            echo "<pre>";
            print_r($insert_data);die;
        }
    }

    public function edit(){
        
         $this -> load -> view('vendor_edit');
    }
    
    
    public function update(){
        
        if ($this -> input -> post()) {
            $insert_data = array(	'c_name' => $this -> input -> post('c_name'),
                        		'address' => $this -> input -> post('address'), 
					'contact' => $this -> input -> post('contact'),
					'email' => $this -> input -> post('email'),
					);
            echo "<pre>";
            print_r($insert_data);die;
        }
        
    }

    
     public function delete(){
        
    }
    
}