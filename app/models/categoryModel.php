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

    public function list(){
        $query = $this->db->query('SELECT * FROM kategori');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function edit($id){
        $query = $this->db->prepare('SELECT * FROM kategori WHERE id = ?');
        $query->execute(array($id));
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id,$ad){
        $query = $this->db->prepare('UPDATE kategori SET ad = ? WHERE id = ?');
        $update = $query->execute(array($ad,$id));
        return $update;
    }

    public function delete($id) {
        $query = $this->db->prepare('DELETE FROM kategori WHERE id = ? ');
        $query->execute(array($id));
    }
}