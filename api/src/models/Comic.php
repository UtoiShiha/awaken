<?php
    namespace App\models;
use App\util\DB;

class Comic
{
    private $db;

    public function __construct(DB $db) {
        $this->db = $db->get();
    }
    public function getInfo()
    {

        return $this->db->query('Select * From comic_info')->fetchAll()[0];
    }
}
