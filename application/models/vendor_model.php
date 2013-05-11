<?php
class vendor_model extends CI_Model {

    function __construct()
    {
        parent::__construct();

        $this->load->database();
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