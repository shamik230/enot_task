<?php

namespace Modules\Users\Controllers;
use Modules\Base\BaseController;
use Modules\Users\Models\Session as SessionModel;
use Modules\Users\Models\User as UserModel;
use System\Session as SessionHelper;

class Logout extends BaseController {
    protected UserModel $model;
    protected SessionModel $sessionModel;
    public function __construct(){
		parent::__construct();
		$this->model = UserModel::getInstance();
        $this->sessionModel = SessionModel::getInstance();
	}

    public function logout(){
        if($this->user !== null){
            // $this->sessionModel->removeTokenById($this->user['id']);
            setcookie('token', "", time() - 3600, $_ENV['BASE_URL']);
            SessionHelper::slice('token');
        }
        header("Location: " . $_ENV['BASE_URL']);
		exit();
    }
    
}