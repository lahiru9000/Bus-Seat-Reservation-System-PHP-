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

        $table = $this->db
            ->select('*')
            ->from('trip')
            ->join('bus', 'bus.id = trip.bus_id')
            ->join('route', 'route.id = trip.route_id')
            ->where($data)
            ->get();

        // $query = $this->db->get_where($table, $data);

        return $table->result_array();
    }
}
