<?php

class Invoice extends CI_Controller{
    
    public function index()
    {
        $data['invoice'] = $this->model_invoice->tampil_data();
        $this->load->view('Templates_admin/Header');
        $this->load->view('Templates_admin/Sidebar');
        $this->load->view('admin/invoice', $data);
        $this->load->view('Templates_admin/Footer');
    }
}
