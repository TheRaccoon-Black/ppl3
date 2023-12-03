<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * @property M_lacak $M_lacak
 */
class Lacak extends CI_Controller
{
    
    public function index()
    {
        $this->load->model('M_lacak');
        $id = $this->session->userdata('id');
        $transaksi = $this->M_lacak->get_transaksi_keluar($id);
        $data = [
            "transaksi" => $transaksi,
        ];
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('lacak', $data);
        $this->load->view('templates/footer');
    }
}