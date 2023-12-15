<?php

namespace Modules\Users\Models;

use Modules\Base\BaseModel;

class Session extends BaseModel {
	protected static $instance;
	protected string $table = 'users_sessions';

	public function generateToken(){
		return substr(bin2hex(random_bytes(128)), 0, 128);
	}

	public function getByToken(string $token) : ?array {
        $query = "SELECT * FROM `{$this->table}` WHERE token=:token";
		$fields = compact('token');
		$result = $this->db->query($query, $fields)->fetchAll();
		return $result[0] ?? null;
	}

    public function removeTokenById(int $id) {
        $query = "DELETE FROM `{$this->table}` WHERE id=:id";
        $fields = compact('id');
        $this->db->query($query, $fields);
    }

}