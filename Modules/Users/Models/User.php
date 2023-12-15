<?php

namespace Modules\Users\Models;
use Modules\Base\BaseModel;

class User extends BaseModel {
	protected static $instance;
	protected string $table = 'users';

	public function getByLogin(string $username) : ?array {
		$query = "SELECT * FROM `{$this->table}` WHERE username=:username";
		$fields = compact('username');
		$result = $this->db->query($query, $fields)->fetchAll();
		return $result[0] ?? null;
	}
}