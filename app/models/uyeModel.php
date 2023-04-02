<?php

class uyeModel extends model {
    public function control($email,$password){
        $query = $this->db->prepare('SELECT * FROM uyeler WHERE email = ? AND password = ?');
        $query->execute(array($email,$password));
        return $query->rowCount();
    }
}