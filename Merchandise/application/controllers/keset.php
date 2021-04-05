<?php
defined('BASEPATH') or exit('No direct script access allowed');

class keset extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->library('form_validation');
    }


    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
            $this->load->view('templates/Header', $data);
            $this->load->view('keset/login');
            $this->load->view('templates/Footer');
        } else {
            $this->_login();
        }
    }


    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $gidn = $this->db->get_where('gidn', ['email' => $email])->row_array();
        if ($gidn) {
            if ($gidn['is_active'] == 1) {

                if (password_verify($password, $gidn['password'])) {
                    $data = [
                        'username' => $gidn['username'], // ini tadi gada
                        'email' => $gidn['email'],
                        'role' => $gidn['role'],
                        'image' => $gidn['image']
                    ];
                    $this->session->set_userdata($data);

                    if($data['role'] == "1")
                    {
                        $this->session->set_userdata('role', '1');
                        redirect('admin/dashboard_admin');
                    }
                    else
                    {
                        $this->session->set_userdata('role', '2');
                        redirect('Dashboard');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> PASSWORD SALAH </div>');
                    redirect('keset/index');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> LOGIN GAGAL </div>');
                redirect('keset/index');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> LOGIN GAGAL </div>');
            redirect('keset/index');
        }

    }


    public function registration()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[gidn.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]|matches[cpassword]');
        $this->form_validation->set_rules('cpassword', 'CPassword', 'required|trim|matches[password]');


        if ($this->form_validation->run() == false) {
            $data['title'] = 'Welcome to Merchandise';
            $this->load->view('templates/Header', $data);
            $this->load->view('keset/registration');
            $this->load->view('templates/Footer');
        } else {
            $data = [
                //'id' => $this->input->post('id'),
                'username' => htmlspecialchars($this->input->post('username', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role' => 2,
                'is_active' => 1,
                'image' => 'default.jpg',
                'jeniskelamin' => htmlspecialchars($this->input->post('jeniskelamin', true)),
                'tgllahir' => htmlspecialchars($this->input->post('tgllahir', true))
            ];

            // $data['role'] = (int) $data['role'];
            $this->db->insert('gidn', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            REGISTER BERHASIL </div>');
            redirect('keset');
        }   
    }
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            LOGOUT BERHASIL </div>');
        redirect('keset');
    }
}
