<?php
namespace App\util;

class DB {
    const DB_FILE = 'database.db';
    private $pdo;

    private function __construct() {
        try {
            $this->pdo = new \PDO($this->getDsn(self::DB_FILE));
            $this->pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    // Data source name
    private function getDsn($filename) {
        return 'sqlite:' . __DIR__ . DIRECTORY_SEPARATOR . '/../../database/'.$filename;
    }
    //外部からインスタンスを呼び出したい場合のメソッド
    final public static function getInstance()
    {
        static $instance;
        return $instance ?: $instance = new self;
    }
    public function get(){
        if (!isset($this->db)) {
            $this->db = new \PDO($this->getDsn(self::DB_FILE));
            $this->db->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
        }
        return $this->db;
    }
    //クローンを禁止する
    final public function __clone()
    {
        throw new Exception("this instance is singleton class.");
    }
}