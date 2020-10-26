<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Latihan1 extends CI_Controller{

        public function index(){
            echo"Welcome to Programing Web Class";    
        }
        public function penjumlahan($n1, $n2)
        {
            $this->load->model('Model1');
            $hasil = $this->Model1->jumlah($n1, $n2);
            echo"Hasil dari penjumlahan dari ".$n1." + ".$n2." = ".$hasil;
        }
    }

?>