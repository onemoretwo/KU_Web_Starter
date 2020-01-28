<?php

namespace App\Models;

class User extends Model{
    //เชื่อมกับ table `users`

    public function Top5()
    {
        $data = $this->db->queryAll("select * from ". $this->table . " ORDER BY POINT DESC LIMIT 5");
        return $data;
    }
}