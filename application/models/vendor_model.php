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

        $this->load->database();
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
    


    public function get_all_vendor($from, $to, $date)
    {
        $this->db->select('vd.company_name,
                   ud.permanent_address,
                  ud.contact_number,
                   vi.description,
                   vd.services,
                   vd.idvendor_info,
                   vi.idvechicle_info,
                   vi.departure_date,
                   p.name,
                   vi.vechicle_number');
        $this->db->from('unicorn_userdata as ud');
        $this->db->join('vendor_info as vd', 'vd.user_id = ud.user_id','left');
        $this->db->join('vechicle_info as vi', 'vi.vendor_info_id = vd.idvendor_info', 'left');
        $this->db->join('places as p', 'p.idplaces = vi.from', 'left');
        $this->db->where('vi.departure_date =', $date);
        $this->db->group_by('vd.idvendor_info');

        $query = $this->db->get();

        return $query->result();
    }


}