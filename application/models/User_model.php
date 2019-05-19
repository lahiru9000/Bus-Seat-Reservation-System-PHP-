<?php

class User_model extends CI_Model
{
    public function __constructor()
    {
        $this->load->database();
    }

    public function searchBus()
    {
        $data = array(
            'start_location' => $this->input->post('start'), 
            'end_location' => $this->input->post('end'), 
            'departure_date' => $this->input->post('dDate')
        );

        $this->db->select('*');
        $this->db->from('trip t');
        $this->db->join('bus b', 'b.id = t.bus_id', 'left');
        $this->db->join('route r', 'r.id = bus.route_id', 'left');

        $query = $this->db->get_where('trip', $data);

        return $query->result_array();
    }
}
