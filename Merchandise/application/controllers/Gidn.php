<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gidn extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'My Profile';

        $data['gidn'] = $this->db->get_where('gidn', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('Welcome', $data);
    }
}
