<?php
class Product_model extends CI_Model{
	function get_product (){
	$result = $this->db->get('product');
	return $result;

	}
    function jumlah_data(){
        return $this->db->get('product')->num_rows();
    }
    function data($number,$offset) {
        return $query = $this->db->get('product',$number,$offset)->result();
        
    }
	function save($nip,$nama,$jenis, $alamat, $lahir, $tanggal, $status){
        $data = array(
            'nip' => $nip,
            'nama' => $nama,
            'jenis' => $jenis,
            'alamat' => $alamat,
            'lahir' => $lahir,
            'tanggal' => $tanggal,
            'status' => $status);
		$this->db->insert('product',$data);
	}
	function delete ($product_id){
        $this->db->where('product_id', $product_id);
        $this->db->delete('product');
    }
    function update($product_id,$nip,$nama,$jenis, $alamat, $lahir, $tanggal, $status){
        $data = array(
            'nip' => $nip,
            'nama' => $nama,
            'jenis' => $jenis,
            'alamat' => $alamat,
            'lahir' => $lahir,
            'tanggal' => $tanggal,
            'status' => $status);
        $this->db->where('product_id', $product_id);
        $this->db->update('product', $data);
    }
    function get_product_id($product_id){
   $query  =   $this->db->get_where ('product', array 
('product_id' => $product_id));
   return $query;
}
}
?>