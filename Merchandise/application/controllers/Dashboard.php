<?php

class Dashboard extends CI_Controller{
    
    public function index()
    {
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $this->load->view('Templates/Header');
        $this->load->view('Templates/Sidebar');
        $this->load->view('Dashboard', $data);
        $this->load->view('Templates/Footer');
    }


    public function tambah_ke_keranjang($id)
    {
        if ($this->session->userdata('login')== 1 ){
            $barang = $this->model_barang->find($id);

            $data = array(
                'id'      => $barang->id_brg,
                'qty'     => 1,
                'price'   => $barang->harga,
                'name'    => $barang->nama_brg,

            );
            $this->cart->insert($data);
            redirect('Dashboard');
        }
        else {
            redirect('keset/index');
        }
    }

    public function detail_keranjang()
    {
        $this->load->view('Templates/Header');
        $this->load->view('Templates/Sidebar');
        $this->load->view('keranjang');
        $this->load->view('Templates/Footer');
    }

    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('Dashboard/index');
    }

    public function pembayaran()
    {
        $this->load->view('Templates/Header');
        $this->load->view('Templates/Sidebar');
        $this->load->view('pembayaran');
        $this->load->view('Templates/Footer');
    }

    public function proses_pesanan()
    {
        $is_processed = $this->model_invoice->index();
        if($is_processed){
        $this->cart->destroy();
        $this->load->view('Templates/Header');
        $this->load->view('Templates/Sidebar');
        $this->load->view('proses_pesanan');
        $this->load->view('Templates/Footer');
        }else {
            echo "Maaf, Pesanan anda gagal diproses!!";
        }
    }

    public function detail($id_brg)
    {
        $data['barang'] =$this->model_barang->detail_brg($id_brg);
        $this->load->view('Templates/Header');
        $this->load->view('Templates/Sidebar');
        $this->load->view('detail_barang', $data);
        $this->load->view('Templates/Footer');
    }
    public function searching()
    {
        $this->db->like('nama_brg', $this->input->post('searching'),'both');
        $query['result'] = $this->db->get('tb_barang')-> result_array(); 
       //var_dump($query);
        //die; 
        $this->load->view('Templates/Header');
        $this->load->view('Templates/Sidebar');
        $this->load->view('searching',$query);
        $this->load->view('Templates/Footer');
    }

}