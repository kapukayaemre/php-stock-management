<?php

class categoryModel extends model
{
    public function create($ad) {
        $query = $this->db->prepare('INSERT INTO kategori SET ad = ?');
        $insert = $query->execute(array($ad));
        if($insert) {
            return true;
        } else {
            return false;
        }

    }
}