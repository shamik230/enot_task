<?php

namespace Modules\Base;
use System\Database\Connection;

class BaseModel {
	protected static $instance;
	protected Connection $db;
	protected string $table;
    public static function getInstance() : static {
		if(static::$instance === null) {
			static::$instance = new static();
		}
		return static::$instance;
	}
    protected function __construct(){
		$this->db = Connection::getInstance();
	}

	public function add(array $fields) : int {
        $names = [];
		$masks = [];
		foreach($fields as $field => $val){
			$names[] = $field;
			$masks[] = ":$field";
		}
		$namesStr = implode(', ', $names);
		$masksStr = implode(', ', $masks);
        $query = "INSERT INTO {$this->table} ($namesStr) VALUES ($masksStr)";
		$this->db->query($query, $fields);
		return $this->db->lastInsertId();
    }

	public function get(int $id) : ?array {
        $query = "SELECT * FROM `{$this->table}` WHERE id=:id";
		$fields = compact('id');
		$result = $this->db->query($query, $fields)->fetchAll();
		return $result[0] ?? null;
	}
}