<?php

class Vehicle extends CI_Controller
{
    public function __construct() {
        parent::__construct();
    }
    
    public function index()
    { //echo "Entered here";die;
        $this->load->view('vehicle_view');
       // $this->add();
    }
    
    public function add(){
        $this -> load -> view('vehicle_add');
       
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
        
         $this -> load -> view('vehicle_edit');
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