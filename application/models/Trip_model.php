<?php

class Trip_model extends CI_model
{
    public function __constructor()
    {
        $this->load->database();
    }

    public function getTripsAndBuses()
    {
        $query = $this->db->select('*')
            ->from('bus')
            ->join('trip', 'trip.bus_id = bus.id')
            ->get();

        return $query->result_array();
    }

    public function createTrip()
    {
        $data = array(
            'departure_date' => $this->input->post('dDate'),
            'arrival_date' => $this->input->post('aDate'),
            'departure_time' => $this->input->post('dTime'),
            'arrival_time' => $this->input->post('aTime'),
            'duration' => $this->input->post('duration'),
            'bus_id' => $this->input->post('busId'),
        );

        $this->db->set('availability', 'not available');
        $this->db->where('id', $this->input->post('busId'));
        $this->db->update('bus');

        return $this->db->insert('trip', $data);
    }

    public function getAvailableBuses()
    {
        $query = $this->db->get_where('bus', array('availability' => 'available'));
        return $query->result_array();
    }

    public function deleteTrip($id, $busId)
    {
        $this->db->set('availability', 'available')->where('id', $busId)->update('bus');

        $this->db->where('id', $id);
        $this->db->delete('trip');
        return true;
    }
}
