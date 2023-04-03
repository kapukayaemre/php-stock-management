<?php
class urunlerModel extends model {

    public function list(){
        $query = $this->db->prepare('SELECT * FROM urunler');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($ad,$kategori_id,$ozellik) {
        $query = $this->db->prepare('INSERT INTO urunler SET ad = ?, kategori_id = ?, ozellikler = ?, tarih = ?');
        $tarih = date('Y-m-d');
        $insert = $query->execute(array($ad,$kategori_id,$ozellik,$tarih));

        if ($insert) {
            return true;
        } else {
            return false;
        }
    }

    public function getData($id) {
        $query = $this->db->prepare('SELECT * FROM urunler WHERE id = ?');
        $query->execute(array($id));
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id,$ad,$kategori_id,$ozellikler){
        $query = $this->db->prepare('UPDATE urunler SET ad = ?, kategori_id = ?, ozellikler = ? WHERE id = ?');
        $update = $query->execute(array($ad,$kategori_id,$ozellikler,$id));
        if($update) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($id){
        $query = $this->db->prepare('DELETE FROM urunler WHERE id = ?');
        $query->execute(array($id));

    }



}