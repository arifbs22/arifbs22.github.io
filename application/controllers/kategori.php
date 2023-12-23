<?php

class Kategori extends CI_Controller{
    public function Minuman()
    {
        $data['minuman']=$this->model_kategori->data_minuman()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('minuman',$data);
        $this->load->view('templates/footer');
    }

    public function Makanan()
    {
        $data['makanan']=$this->model_kategori->data_makanan()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('makanan',$data);
        $this->load->view('templates/footer');
    }

    public function Makanan_ringan()
    {
        $data['makanan_ringan']=$this->model_kategori->data_makanan_ringan()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('makanan_ringan',$data);
        $this->load->view('templates/footer');
    }


}