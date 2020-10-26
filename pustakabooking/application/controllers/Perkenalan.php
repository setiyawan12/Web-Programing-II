<?php
class Perkenalan extends CI_Controller
{

    public function index(){
        echo "<h1 style='color:red; text-align:center'>Perkenalan</h1>";
        echo "<p>nama saya Yayang Setiyawan <br>
                Saya tinggal di <address>Mindaka</address> <br>
                Saya suka rebahan";
    }

    public function setiyawan(){
        echo "<p>ini halaman setiyawan</p>";
    }

}