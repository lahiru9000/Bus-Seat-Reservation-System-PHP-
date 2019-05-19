<?php

class Users extends CI_Controller
{

    public function home()
    {
        $data['title'] = "Welcome to Our Homepage";

        $this->load->view('user/templates/header', $data);
        $this->load->view('user/home');
        $this->load->view('user/templates/footer');
    }

    public function searchBus()
    {
        $this->form_validation->set_rules('start', 'Start Location', 'required');
        $this->form_validation->set_rules('end', 'End Location', 'required');
        $this->form_validation->set_rules('dDate', 'Departure Date', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->home();
        } else {
            $data['buses'] = $this->User_model->searchBus();

            $this->load->view('user/templates/header');
            $this->load->view('user/busList', $data);
            $this->load->view('user/templates/footer');
        }
    }
}
