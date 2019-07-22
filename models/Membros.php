<?php 
class Membros extends Model {

    public function getMembers(){
        $membros = array();

        $sql = "SELECT * FROM membros ";
        $sql = $this->db->query($sql);
        if($sql->rowCount() > 0){
            $membros = $sql->fetchAll();
        }
        return $membros;
    }
}