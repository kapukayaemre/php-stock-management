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



}