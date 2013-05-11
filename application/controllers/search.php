<?php

class Search extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('places_model', 'vendor_model'));
    }

    public function index()
    {
        $placesObj = $this->places_model->get_all_places();
        $data['place'] = $placesObj;
        $this->load->view('search_view', $data);
    }

    public function result()
    {
        $formData = $this->input->post();
        
        $from = $formData['from'];
        $to = $formData['destination'];
        $date = '2013-05-11'; //$formData['date'];

        $vendor['search_result'] = $this->vendor_model->get_all_vendor($from, $to, $date);

        $this->load->view('result_view', $vendor);
    }

}