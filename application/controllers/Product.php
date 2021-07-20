<?php

 class Product extends CI_Controller { 

	function __construct(){
	 parent:: __construct();
     $this->load->helper(array('url'));
	 $this->load->model('product_model'); 
 	}

 	public function index(){
        $this->load->database();
        $jumlah_data = $this->product_model->jumlah_data();
        $this->load->library('pagination');   		
         
        $config['base_url'] = base_url().'product/index';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 10; 
             
        $from = $this->uri->segment('3');  
          // styling
        $config['full_tag_open'] = '<nav><ul class="pagination">';
        $config['full_tag_close'] = ' </ul></nav>' ;  

        $config['num_tag_open'] = '<li class="page-item "><span class="page-link">' ; 
        $config['num_tag_close'] = '</span></li>' ;

        $config['cur_tag_open'] = '<li class="page-item active "><span class="page-link">' ; 
        $config['cur_tagl_close'] = '</span>></li>' ;

        $config['next_tag_open'] = '<li class="page-item "><span class="page-link">' ; 
        $config['next_tagl_close'] = '<span aria-hidden="true">&raquo;</span></span></li>' ;

        $config['prev_tag_open'] = '<li class="page-item "><span class="page-link">' ; 
        $config['prev_tagl_close'] = '</span>next</li>' ;

        $config['first_tag_open'] = '<li class="page-item "><span class="page-link">' ; 
        $config['first_tagl_close'] = '</span></li>' ;

        $config['last_tag_open'] = '<li class="page-item "><span class="page-link">' ; 
        $config['last_tagl_close'] = '</span></li>' ;

        $this->pagination->initialize($config);

        $data['product'] = $this->product_model->data($config['per_page'],$from);
        $this->load->view('dashboard/v_header');
        $this->load->view('product/product_view',$data); 
        $this->load->view('dashboard/v_footer');

	}

	function add_new(){
        $this->load->view('dashboard/v_header');
		$this->load->view('product/add_product_view');
        $this->load->view('dashboard/v_footer');

	}

	
    function save(){
        $nip   =   $this->input->post('nip');
        $nama  =   $this->input->post('nama');
        $jenis =   $this->input->post('jenis');
        $alamat =   $this->input->post('alamat');
        $lahir  =   $this->input->post('lahir');
        $tanggal  =   $this->input->post('tanggal');
        $status  =   $this->input->post('status');
        $this->product_model-> save ($nip, $nama, $jenis, $alamat, $lahir, $tanggal, $status);
        redirect('product');
    }
	function update(){
        
        $product_id     =   $this->input->post('product_id');
        $nip   =   $this->input->post('nip');
        $nama  =   $this->input->post('nama');
        $jenis =   $this->input->post('jenis');
        $alamat =   $this->input->post('alamat');
        $lahir  =   $this->input->post('lahir');
        $tanggal  =   $this->input->post('tanggal');
        $status  =   $this->input->post('status');
        $this->product_model-> update ($product_id,$nip, $nama, $jenis, $alamat, $lahir, $tanggal, $status);
        redirect('product');
    }
	function delete(){
        $product_id =   $this->uri->segment(3);
        $this->product_model->delete($product_id);
        redirect('product');
    }
    function get_edit(){
        $product_id =   $this->uri->segment(3);
        $result     =   $this->product_model->get_product_id($product_id);
        if ($result->num_rows() > 0) {
            $i      =   $result->row_array();
            $data   =   array(
                'product_id'    =>  $i['product_id'] , 
                'nip'  =>  $i['nip'],
                'nama' =>  $i['nama'],
                'jenis' =>  $i['jenis'],
                'alamat' =>  $i['alamat'],
                'lahir' =>  $i['lahir'],
                'tanggal' =>  $i['tanggal'],
                'status' =>  $i['status']
            );
            $this->load->view('dashboard/v_header');
            $this->load->view('product/edit_product_view',$data);
            $this->load->view('dashboard/v_footer');
        
        }else{
            echo "
                <script>
                    alert('Data Was Not Found')
                </script>
            ";
        }
    }  



}
?>
	