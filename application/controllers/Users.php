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

    public function searchBus($start, $end, $dDate)
    {
        $data['buses'] = $this->User_model->searchBus($start, $end, $dDate);
        
    }
}
