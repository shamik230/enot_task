<?php

namespace Modules\Parser\Models;

use Modules\Base\BaseModel;

class CurrencyValue extends BaseModel {
	protected static $instance;
	protected string $table = 'currency_values';

    public function getNewestEntry(string $charcode) {
        $query = "SELECT * FROM `{$this->table}` WHERE charcode=:charcode ORDER BY timestamp DESC LIMIT 1";
		$fields = compact('charcode');
		$result = $this->db->query($query, $fields)->fetchAll();
		return $result[0] ?? null;
    }

}