<?php

namespace Modules\Users\Api;
use System\Session;
use Modules\Users\Models\User as UserModel;
use Modules\Users\Models\Session as Sessions;

class Auth {
	public static function getUser() : ?array {
		$token = Session::get('token') ?? $_COOKIE['token'] ?? null;
		if($token === null){
			return null;
		}
		$mSession = Sessions::getInstance();
		$session = $mSession->getByToken($token);

		if($session === null){
			return null;
		}

		return UserModel::getInstance()->get($session['id_user']);
	}
}