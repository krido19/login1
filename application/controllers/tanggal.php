<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class TANGGAL extends CI_Controller {
    
    function __construct()  {
        parent::__construct();
        $this->load->model('m_login');
        /*
            cek session yang login,
            jika session status tidak sama dengan session telah_login, berar
ti pengguna belum login
            maka halaman akan di alihkan kembali ke halaman login.
        */
        if($this->session->userdata('status') != "telah_login"){
            redirect('login?alert=belum_login');
        }
    }
    function keluar()  {
        $this->session->sess_destroy();
        redirect('login?alert=logout');
    }
    function index()    {
        
        $this->load->view('dashboard/v_header');
        $this->load->view('dashboard/v_calender');
        
        $this->load->view('dashboard/v_footer');
        
    }
}
?>