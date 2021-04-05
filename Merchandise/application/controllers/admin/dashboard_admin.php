<?php

class dashboard_admin extends CI_Controller{

    public function index()
    {
        if ($this->session->userdata('role')== 1 ){
            $this->load->view('Templates_admin/header');
            $this->load->view('Templates_admin/sidebar');
            $this->load->view('admin/dashboard');
            $this->load->view('Templates_admin/footer');
        }
        else {
            redirect('keset/index');
        }

    }
}