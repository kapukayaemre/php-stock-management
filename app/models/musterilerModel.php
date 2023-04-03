<?php
class musterilerModel extends model {

    public function list(){
        $query = $this->db->prepare('SELECT * FROM musteriler');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($ad,$soyad,$sirket,$email,$telefon,$adres,$tc,$notu) {
        $tarih = date("Y-m-d");
        $query = $this->db->prepare('INSERT INTO musteriler SET ad = ?, soyad = ?, sirket = ?, email = ?, telefon = ?, adres = ?, tc = ?, notu = ?, tarih = ?');
        $insert = $query->execute(array($ad,$soyad,$sirket,$email,$telefon,$adres,$tc,$notu,$tarih));
        if ($insert) {
            return true;
        } else {
            return false;
        }

    }
}