<?php
class Places_model extends CI_Model
{
    function __construct() {
        parent::__construct();

        $this->load->database();
    }

    function get_all_places()
    {
        $query = $this->db->get('places');

        return $query->result();
    }
}