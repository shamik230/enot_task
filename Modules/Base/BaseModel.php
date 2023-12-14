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

}