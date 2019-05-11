<?php

class Routes extends CI_Controller
{
    public function index()
    {
        $data['title'] = "All Routes";
        $data['routes'] = $this->Route_model->getRoutes();

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/routes/index', $data);
        $this->load->view('admin/templates/footer');
    }

    public function create()
    {
        $data['title'] = "Create Route";

        $this->form_validation->set_rules('routeNo', 'Route Number', 'required');
        $this->form_validation->set_rules('routeNo', 'Route Number', 'required|alpha_numeric');
        $this->form_validation->set_rules('distance', 'Distance', 'required|is_natural_no_zero');
        $this->form_validation->set_rules('start', 'Start Location', 'required|alpha');
        $this->form_validation->set_rules('end', 'End Location', 'required|alpha');
        $this->form_validation->set_rules('destinations', 'Destinations', 'required|alpha');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/routes/create');
            $this->load->view('admin/templates/footer');
        } else {
            $this->Route_model->saveRoute();
            redirect('route/add');
        }
    }

    public function delete($id)
    {
        $this->Route_model->deleteRoute($id);
        redirect('route/all');
    }

    public function edit($id)
    {
        $data['title'] = "Edit Route";
        $data['route'] = $this->Route_model->getRoutes($id);

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/routes/edit', $data);
        $this->load->view('admin/templates/footer');
    }

    public function update()
    {
        $this->Route_model->updateRoute();
        redirect('route/all');
    }
}
