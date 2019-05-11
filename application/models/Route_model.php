<?php

class Route_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function getRoutes($id = FALSE)
    {
        $this->db->order_by('route_number');
        if ($id === FALSE) {
            $query = $this->db->get('route');
            return $query->result_array();
        } else {
            $query = $this->db->get_where('route', array('id' => $id));
            return $query->row_array();
        }
    }

    public function saveRoute()
    {
        $data = array(
            'route_number' => $this->input->post('routeNo'),
            'distance' => $this->input->post('distance'),
            'start_location' => $this->input->post('start'),
            'end_location' => $this->input->post('end'),
            'middle_locations' => $this->input->post('destinations')
        );

        return $this->db->insert('route', $data);
    }

    public function deleteRoute($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('route');
        return true;
    }

    public function updateRoute()
    {
        $data = array(
            'route_number' => $this->input->post('routeNo'),
            'distance' => $this->input->post('distance'),
            'start_location' => $this->input->post('start'),
            'end_location' => $this->input->post('end'),
            'middle_locations' => $this->input->post('destinations')
        );

        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('route', $data);
    }
}
