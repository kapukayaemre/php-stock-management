<?php

class stokModel extends model
{
    public function list() {
        $query = $this->db->prepare('SELECT * FROM stok');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($urun_id,$musteri_id,$islem_tipi,$adet,$fiyat) {
        $tarih = date('Y-m-d');
        $query = $this->db->prepare('INSERT INTO stok SET urun_id = ?, musteri_id = ?, islem_tipi = ?, adet = ?, fiyat = ?, tarih = ?');
        $insert = $query->execute(array($urun_id,$musteri_id,$islem_tipi,$adet,$fiyat,$tarih));
        if($insert) {
            return true;
        } else {
            return false;
        }
    }

    public function getData($id){
        $query = $this->db->prepare('SELECT * FROM stok WHERE id = ?');
        $query->execute(array($id));
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id,$urun_id,$musteri_id,$islem_tipi,$adet,$fiyat) {
        $query = $this->db->prepare('UPDATE stok SET urun_id = ?, musteri_id = ?, islem_tipi = ?, adet = ?, fiyat = ? WHERE id = ?');
        $update = $query->execute(array($urun_id,$musteri_id,$islem_tipi,$adet,$fiyat,$id));
        if($update) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($id) {
        $query = $this->db->prepare('DELETE from stok WHERE id = ?');
        $query->execute(array($id));
    }

}