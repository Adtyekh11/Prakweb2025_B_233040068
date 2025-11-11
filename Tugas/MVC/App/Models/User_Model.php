<?php 

class User_Model {

    private $table = 'users';
    private $db;



    public function __construct() {
        $this->db = new Database;
    }


    

public function getUser() {
      $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
   }


   public function getUserById($id) {
       $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
       $this->db->bind('id', $id);
       return $this->db->single();
   }

   public function TambahDataPelanggan($data) {
           $query = "INSERT INTO users (name, email) VALUES (:name, :email)";

            $this->db->query($query);
            $this->db->bind('name', $data['name']);
            $this->db->bind('email', $data['email']);


            $this->db->execute();

            return $this->db->rowCount();
}
   


public function HapusDataPelanggan($id){
    $query = "DELETE FROM users WHERE id = :id";
    $this->db->query($query);
    $this->db->bind('id', $id);
    $this->db->execute();

    return $this->db->rowCount();
}


public function UbahDataPelanggan($data) {
        $query = "UPDATE users SET name = :name, email = :email WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('name', $data['name']);
        $this->db->bind('email', $data['email']);
        $this->db->execute();

        return $this->db->rowCount();
}


public function CariDataPelanggan() {
    $keyword = $_POST['keyword'];
    $query = "SELECT * FROM users WHERE name LIKE :keyword";
    $this->db->query($query);
    $this->db->bind('keyword', "%$keyword%");

    return $this->db->resultSet();

}
}