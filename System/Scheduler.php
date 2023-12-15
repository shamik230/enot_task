<?php

namespace System;
use Cron\CronExpression;
class Scheduler {
    protected $cronExpression;
    protected $callback;

    public function __construct($expression, $callback) {
        $this->cronExpression = CronExpression::factory($expression);
        $this->callback = $callback;
    }

    public function isDue() {
        return $this->cronExpression->isDue();
    }

    public function run() {
        if ($this->isDue()) {
            call_user_func($this->callback);
            echo "LOG Callback executed\n";
        }
    }
}