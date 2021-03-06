<?php

class M_Waktu_Tidak_Bersedia extends CI_Model{

	public $limit;
	public $offset;
	public $sort;
	public $order;

	function __construct(){

		parent::__construct();

	}
    
    function get_by_guru($kode_guru){
      $rs = $this->db->query("SELECT kode_hari,kode_jam ".
                             "FROM waktu_tidak_bersedia ".
                             "WHERE kode_guru = $kode_guru");
      return $rs;
    }
    
    function update($kode,$data){
      /*
      string.Format(
                        "UPDATE waktu_tidak_bersedia " +
                        "SET kode_guru = {0} " +
                        "WHERE kode_guru = {1}",
                        txtKode.Text,
                        _selectedkode);
      */
      
        $this->db->where('kode',$kode);
        $this->db->update('waktu_tidak_bersedia',$data);
    }
    
    
    function delete_by_guru($kode_guru){
        $this->db->query("DELETE FROM waktu_tidak_bersedia ".
                         "WHERE kode_guru = $kode_guru");       
      
    }
    
    
}