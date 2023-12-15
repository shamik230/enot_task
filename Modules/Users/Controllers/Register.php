<?php

namespace Modules\Users\Controllers;
use Modules\Base\BaseController;
use Modules\Users\Models\Session as SessionModel;
use Modules\Users\Models\User as UserModel;
use System\Session as SessionHelper;

class Register extends BaseController {
    protected UserModel $model;
    protected SessionModel $sessionModel;
    public function __construct(){
		parent::__construct();
		$this->model = UserModel::getInstance();
        $this->sessionModel = SessionModel::getInstance();
	}

    public function register(){
        if($this->isAuth()){
            header("Location: " . $_ENV['BASE_URL'] . 'home');
			exit();
        }
		$this->title = 'Register';
		$error = false;

		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$username = trim($_POST['login']);
			$password = trim($_POST['password']);

			$user = $this->model->getByLogin($username);

			if($user !== null){
				$error = true;
			}
			else {
                $password = password_hash($password, PASSWORD_DEFAULT); // no salt
                $this->model->add(compact('username', 'password'));
				header("Location: " . $_ENV['BASE_URL']);
				exit();
			}
		}
        $this->content = $this->view->render('Users/Views/register.twig', [
			'error' => $error
		]);
    }
    
}