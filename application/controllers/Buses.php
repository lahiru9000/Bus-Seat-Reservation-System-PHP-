<?php

class Buses extends CI_Controller
{
    public function index()
    { 
        $data['title'] = "All Buses";
        $data['buses'] = $this->Bus_model->getBuses();

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/buses/index', $data);
        $this->load->view('admin/templates/footer');
    }

    public function create()
    {
        $data['title'] = "Add Buses";
        $data['routes'] = $this->Bus_model->getRouteNumbers();

        $this->form_validation->set_rules('busNo', 'Bus Number', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/buses/create', $data);
            $this->load->view('admin/templates/footer');
        } else {
            $this->Bus_model->createBus();
            redirect('bus/add');
        }
    }

    public function delete($id)
    {
        $this->Bus_model->deleteBus($id);
        redirect('bus/all');
    }

    public function edit($id)
    { 
        $data['title'] = "Edit Bus";
        $data['bus'] = $this->Bus_model->getBuses($id);
        $data['routes'] = $this->Bus_model->getRouteNumbers($id);

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/buses/edit', $data);
        $this->load->view('admin/templates/footer');
    }

    public function update()
    { 
        $this->Bus_model->updateBus();
        redirect('bus/all');
    }
}
