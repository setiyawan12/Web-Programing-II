<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Matakuliah extends CI_Controller{

        public function index(){
            $this->load->view('form-matakuliah');
        }
        public function cetak()
        {
            
        }
    }

?>