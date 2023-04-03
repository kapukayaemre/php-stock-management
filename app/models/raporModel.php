<?php

class raporModel extends model
{
    public function girenUrunToplam($id)
    {
        $query = $this->db->prepare("SELECT SUM(fiyat*adet) AS toplam FROM stok WHERE urun_id = ? AND islem_tipi = '0'");
        $query->execute(array($id));
        $sonuc = $query->fetch(PDO::FETCH_ASSOC);
        return doubleval($sonuc['toplam']);
    }

    public function cikanUrunToplam($id)
    {
        $query = $this->db->prepare("SELECT SUM(fiyat*adet) AS toplam FROM stok WHERE urun_id = ? AND islem_tipi = '1'");
        $query->execute(array($id));
        $sonuc = $query->fetch(PDO::FETCH_ASSOC);
        return doubleval($sonuc['toplam']);
    }

    public function girenUrunAdet($id)
    {
        $query = $this->db->prepare("SELECT SUM(adet) FROM stok WHERE urun_id = ? AND islem_tipi = '0'");
        $query->execute(array($id));
        $sonuc = $query->fetch(PDO::FETCH_ASSOC);
        return doubleval($sonuc['SUM(adet)']);
    }

    public function cikanUrunAdet($id)
    {
        $query = $this->db->prepare("SELECT SUM(adet) FROM stok WHERE urun_id = ? AND islem_tipi = '1'");
        $query->execute(array($id));
        $sonuc = $query->fetch(PDO::FETCH_ASSOC);
        return doubleval($sonuc['SUM(adet)']);
    }

    public function toplamAlinanUrun($id) // musteri_id
    {
        $query = $this->db->prepare("SELECT SUM(adet) FROM stok WHERE musteri_id = ? AND islem_tipi = '0'");
        $query->execute(array($id));
        $sonuc = $query->fetch(PDO::FETCH_ASSOC);
        return intval($sonuc['SUM(adet)']);
    }

    public function toplamSatilanUrun($id) // musteri_id
    {
        $query = $this->db->prepare("SELECT SUM(adet) FROM stok WHERE musteri_id = ? AND islem_tipi = '1'");
        $query->execute(array($id));
        $sonuc = $query->fetch(PDO::FETCH_ASSOC);
        return intval($sonuc['SUM(adet)']);
    }

    public function toplamKazanilanPara($id) // musteri_id
    {
        $query = $this->db->prepare("SELECT SUM(fiyat*adet) AS toplam FROM stok WHERE musteri_id = ? AND islem_tipi = '1'");
        $query->execute(array($id));
        $sonuc = $query->fetch(PDO::FETCH_ASSOC);
        return doubleval($sonuc['toplam']);
    }

    public function toplamKaybedilenPara($id) // musteri_id
    {
        $query = $this->db->prepare("SELECT SUM(fiyat*adet) AS toplam FROM stok WHERE musteri_id = ? AND islem_tipi = '0'");
        $query->execute(array($id));
        $sonuc = $query->fetch(PDO::FETCH_ASSOC);
        return doubleval($sonuc['toplam']);
    }



}