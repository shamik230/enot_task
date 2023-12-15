<?php

namespace Modules\Converter\Models;

use Modules\Base\BaseModel;

class CurrencyName extends BaseModel {
	protected static $instance;
	protected string $table = 'currencies';

    public function getAll() : ?array {
        $query = "SELECT * FROM `{$this->table}`";
		$result = $this->db->query($query)->fetchAll();
		return $result ?? null;
	}

}