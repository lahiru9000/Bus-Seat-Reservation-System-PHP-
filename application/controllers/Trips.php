<?php

class Trips extends CI_controller
{
    public function index()
    {
        $data['title'] = "All Trips";
        $data['trips'] = $this->Trip_model->getTripsAndBuses();

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/trips/index', $data);
        $this->load->view('admin/templates/footer');
    }


    public function create()
    {
        $data['title'] = "Add Trips";
        $data['buses'] = $this->Trip_model->getAvailableBuses();

        $this->form_validation->set_rules('dDate', 'Departure Date', 'Required');

        if (!$this->form_validation->run()) {
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/trips/create', $data);
            $this->load->view('admin/templates/footer');
        } else {
            $this->Trip_model->createTrip();
            redirect('trip/add');
        }
    }

    public function delete($id, $busId)
    {
        $this->Trip_model->deleteTrip($id, $busId);
        redirect('trip/all');
    }
}
