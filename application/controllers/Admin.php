<?php

class Admin extends CI_Controller
{

    public function home()
    {
        $data['title'] = "Admin Dashboard";

        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/home');
        $this->load->view('admin/templates/footer');
    }
}
