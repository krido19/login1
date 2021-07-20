<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function index()
	{
		$this->load->view('login');
	}

	public function dashboard()
	{
		$this->load->view('login-khusus');
	}

	// Controller Aksi Login
    	function CekLogin()
         {
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');  
    if ($this->form_validation->run() != false) {
        // menangkap data username dan password dari halaman login
        $username   =   $this->input->post('username');
        $password   =   $this->input->post('password');

        $where = array(
            'pengguna_username' => $username,
            'pengguna_password' => md5($password),
            'pengguna_status'   => 1
        );
        //$this->load->model('m_login');

            // cek kesesuaian login pada table pengguna
            $cek = $this->m_login->cek_login('pengguna',$where);
            //cek login apabila benar
            if ($cek->num_rows() > 0) {
                 // ambil data pengguna yang melakukan login
                 $data = $this->m_login->cek_login('pengguna',$where)->row();
                 // buat session untuk pengguna yang berhasil login
                 $data_session = array(
                    'id'        =>  $data->pengguna_id, 
                    'username'  =>  $data->pengguna_username, 
                    'level'     =>  $data->pengguna_level,
                    'jobb'       =>  $data->pengguna_job,
                    'status'    =>  'telah_login'
                );
                $this->session->set_userdata($data_session);

                // alihkan halaman ke halaman dashboard pengguna
                redirect('dashboard');
            }else{
                redirect('login?alert=gagal');
            }
        }else{
            $this->load->view('dashboard/v_index');
        }
    }

	public function cekSpesial()
	{
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');
		$dimana = array(
			'user' => $user,
			'pass' => $pass
		);
		$cekSiswa = $this->m_login->cekSiswa('tb_siswa', $dimana)->num_rows();
		$cekAdmin = $this->m_login->cekAdmin('tb_admin', $dimana)->num_rows();
		$cekGuru = $this->m_login->cekGuru('tb_guru', $dimana)->num_rows();
		if ($cekAdmin > 0) {
			$data_session = array(
				'nama' => $user,
				'status' => 'admin',
			);

			$this->session->set_userdata($data_session);
			$this->session->set_flashdata('login_admin', 'Anda berhasil login sebagai admin!');
			redirect('admin');
		} else if ($cekGuru > 0) {
			$data_session = array(
				'guru' => $user,
				'status' => 'guru',
			);

			$this->session->set_userdata($data_session);
			$this->session->set_flashdata('login_guru', 'Anda berhasil login sebagai guru!');
			redirect('guru');
		} else {
			$this->session->set_flashdata('login_gagal', 'Maaf username atau password tidak terdaftar!');
			redirect('login/dashboard');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
