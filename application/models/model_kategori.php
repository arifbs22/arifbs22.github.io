<?php

class Model_kategori extends CI_Model{

    public function data_minuman(){
      return $this->db->get_where("tb_barang",array('kategori' =>'minuman'));
    }

    public function data_makanan(){
        return $this->db->get_where("tb_barang",array('kategori' =>'makanan'));
      }

    public function data_makanan_ringan(){
        return $this->db->get_where("tb_barang",array('kategori' =>'makanan ringan'));
      }
}