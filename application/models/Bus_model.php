<?php

class Bus_model extends CI_model
{
    public function __constructor()
    {
        $this->load->database();
    }

    public function getBuses($id = FALSE)
    {
        if ($id === FALSE) {
            $query = $this->db->get('bus');
            return $query->result_array();
        } else {
            $query = $this->db->get_where('bus', array('id' => $id));
            return $query->row_array();
        }
    }

    public function createBus()
    {
        $data = array(
            'bus_number' => $this->input->post('busNo'),
            'name' => $this->input->post('name'),
            'no_of_seats' => $this->input->post('noOfSeats'),
            'type' => $this->input->post('type'),
            'facilities' => $this->input->post('facilities'),
            'availability' => $this->input->post('availability'),
            'route_id' => $this->input->post('routeId'),
        );

        return $this->db->insert('bus', $data);
    }

    public function getRouteNumbers()
    {
        $query = $this->db->get('route');
        return $query->result_array();
    }

    public function deleteBus($id)
    {
        //delete bus
        $this->db->where('id', $id);
        $this->db->delete('bus');

        //delete trips
        $this->db->where('bus_id', $id);
        $this->db->delete('trip');
        return true;
    }

    public function updateBus()
    {
        $data = array(
            'bus_number' => $this->input->post('busNo'),
            'name' => $this->input->post('name'),
            'no_of_seats' => $this->input->post('noOfSeats'),
            'type' => $this->input->post('type'),
            'facilities' => $this->input->post('facilities'),
            'availability' => $this->input->post('availability'),
            'route_id' => $this->input->post('routeId'),
        );

        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('bus', $data);
    }
}
