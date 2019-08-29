<?php
    namespace App\controllers;

use App\util\DB;
class Sample
{
    /**
     * Undocumented function
     *
     * @param [type] $arg
     * @return void
     */
    public function hoge()
    {
        $db = DB::getInstance();
        
    // 選択 (プリペアドステートメント)
    $stmt = $db->get()->query("Select * from comic_info");
    $r1 = $stmt->fetchAll();
        return true;
    }
}
