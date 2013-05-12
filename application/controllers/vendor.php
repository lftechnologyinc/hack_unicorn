<?php

class Vendor extends CI_Controller
{
    public function __construct() {
        parent::__construct();
         $this->load->library(array('pagination', 'bitauth'));

         $this->load->model('membership_model');

         $this->load->model('vendor_model');
    }
    
    public function index()
    { 

        $config['uri_segment'] 	= 3;
        $config['total_rows']   = 30;
	$config['per_page'] =$data['per_page']	= $per_page = 5;
        $data['page']   = $page = $this->uri->segment(3);
    
        
        $all_users = $this->bitauth->get_users();
        $counter = 0;
        foreach($all_users as $user)
        {
            if($this->bitauth->has_role('vendor', $user->roles)){
                $vendor_list[$counter] = array('company'=>$user->fullname);
                $counter++;
            }
        }
            // echo $user->fullname.'<br/>';
    
        $data['vendor_list'] = $vendor_list;
        
	$config['total_rows']     = 30;		 
	$config['base_url']       = base_url('vendor/index');
	$this->pagination->initialize($config); 
        
        $this->load->view('vendor_view',$data);
        //$this->add();
    }
    
    public function add(){
        //checking for adming role
        if(!$this->bitauth->logged_in())
            redirect('vendor');
            if(!$this->bitauth->has_role('admin'))
                redirect('vendor');

        $this -> load -> view('vendor_add');
       
    }
    
    public function create(){
         
     //checking for adming role
    if(!$this->bitauth->logged_in())
        redirect('vendor');
        if(!$this->bitauth->has_role('admin'))
            redirect('vendor');

     if ($this -> input -> post()) {
            $insert_data = array(	'c_name' => $this -> input -> post('c_name'),
                        		'address' => $this -> input -> post('address'), 
					'contact' => $this -> input -> post('contact'),
					'email' => $this -> input -> post('email'),
                    'password'=> $this->input->post('password'));
		
           // echo "<pre>";
            //print_r($insert_data);die;
					
           $this->vender_model->insert_entry($insert_data);
            //echo "<pre>";
            //print_r($insert_data);die;
        }
    }

    function add_user(){
        if( ! $this->bitauth->logged_in())
        {
            $this->session->set_userdata('redir', current_url());
            redirect('user/login');
        }

        if (!$this->bitauth->has_role('admin'))
        {
            redirect('home');
        }
        
        //only admin can access here
        $data = array();
        if($this->input->post('username'))
        {
            $this->form_validation->set_rules('username', 'Email Address', 'trim|required|bitauth_unique_username|valid_email');
            $this->form_validation->set_rules('c_name', 'Full Name', 'trim|required');
            $data['username'] = $this->input->post('username');
            $data['password'] = 'iagree';
            $data['fullname'] = $this->input->post('c_name');
            $data['contact_number'] = $this->input->post('contact');
            $data['permanent_address'] = $this->input->post('address');

            if($this->form_validation->run() == TRUE)
            {
                $user = $this->bitauth->add_user($data);
                if($user !== FALSE){
                   
                    $data['message'] = 'New Member has been successfully created.';
                    $this->load->view('vendor_view',$data);
                    return;
                }
            }
            else
            {
                $data['error'] = 'Invalid Email Address or it may be already in use.';
            }

        }
        $this->load->view('vendor_view',$data);
    }

    public function edit(){
        //checking for adming role
        if(!$this->bitauth->logged_in())
            redirect('vendor');
            if(!$this->bitauth->has_role('admin'))
                redirect('vendor');
         $this -> load -> view('vendor_edit');
    }
    
    
    public function update(){
        
        //checking for adming role
        if(!$this->bitauth->logged_in())
            redirect('vendor');
            if(!$this->bitauth->has_role('admin'))
                redirect('vendor');

        if ($this -> input -> post()) {
            $insert_data = array(	'c_name' => $this -> input -> post('c_name'),
                        		'address' => $this -> input -> post('address'), 
					'contact' => $this -> input -> post('contact'),
					'email' => $this -> input -> post('email'),
					);
           // echo "<pre>";
           // print_r($insert_data);die;
        }
        
    }

    
     public function delete(){
        //checking for adming role
        if(!$this->bitauth->logged_in())
            redirect('vendor');
            if(!$this->bitauth->has_role('admin'))
                redirect('vendor');
    }
    
}