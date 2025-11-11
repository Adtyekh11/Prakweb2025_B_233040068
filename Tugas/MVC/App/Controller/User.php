<?php

class User extends Controller{
    public function index()
    {
        $data['judul'] = 'Daftar Pelanggan';
        $data['user'] = $this->model('User_Model')->getUser();
        $this->view('Template/Header', $data);
        $this->view('User/Index', $data);
        $this->view('Template/Footer');
    }

       public function detail($id)
    {
        $data['judul'] = 'Detail Pelanggan';
        $data['user'] = $this->model('User_Model')->getUserById($id);
        $this->view('Template/Header', $data);
        $this->view('User/detail', $data);
        $this->view('Template/Footer');
    }

    public function tambah()
    {
        if( $this->model('User_Model')->TambahDataPelanggan($_POST) > 0){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/User');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
        }
    }
  
    public function hapus($id)
    {
        if( $this->model('User_Model')->HapusDataPelanggan($id) > 0){
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/User');
            exit;
        } else{
            Flasher::setFlash('gagal', 'dihapus', 'danger');
        }
    }



    public function getUbah()
    {
        echo json_encode($this->model('User_Model')->getUserById($_POST['id']));
    }


    public function ubah()
    {
        if( $this->model('User_Model')->UbahDataPelanggan($_POST) > 0){
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/User');
            exit;
        }else{
            Flasher::setFlash('gagal', 'diubah', 'danger');
        }
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Pelanggan';
        $data['user'] = $this->model('User_Model')->CariDataPelanggan();
        $this->view('Template/Header', $data);
        $this->view('User/Index', $data);
        $this->view('Template/Footer');

}

}