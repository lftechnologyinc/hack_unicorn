<?php
class vendor_model extends CI_Model {
    
    var $company_name = '';
    var $services = '';
    var $created_at = '';
    var $modified_at = '';

    public $table_name = 'vendor_info';
    function __construct()
    {
        parent::__construct();
    }
     function insert_entry($data)
    {
        // please read the below note
      //  $this->$services = $data['content'];
          $this->company_name   = $data['c_name'];
        $this->created_at    = date('Y-m-d H:i:s');

 
        $this->db->insert($table_name, $this);
    }

    function update_entry($data)
    {
        $this->company_name   = $data['c_name'];
        $this->created_at    = date('Y-m-d H:i:s');

        $this->modified_at    = date('Y-m-d H:i:s');

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }
    
}