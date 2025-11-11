<?php 

class About extends Controller {

 public function index($nama = 'Aditya Eka Heriyawan', $pekerjaan = 'Mahasiswa', $umur = 20) {
    $data['nama'] = $nama;
    $data['pekerjaan'] = $pekerjaan;
    $data['umur'] = $umur;
    $data['judul'] = 'About Me';
    $this->view('tamplate/header', $data);
    $this->view('about/index', $data);
    $this->view('tamplate/footer');
 }
 
}