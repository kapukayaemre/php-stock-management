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

}