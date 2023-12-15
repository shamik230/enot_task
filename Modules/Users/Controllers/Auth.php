<?php

namespace Modules\Users\Controllers;
use Modules\Base\BaseController;
use Modules\Users\Models\Session as SessionModel;
use Modules\Users\Models\User as UserModel;
use System\Session as SessionHelper;

class Auth extends BaseController {
    protected UserModel $model;
    protected SessionModel $sessionModel;
    public function __construct(){
		parent::__construct();
		$this->model = UserModel::getInstance();
        $this->sessionModel = SessionModel::getInstance();
	}

    public function login(){
        if($this->isAuth()){
            header("Location: " . $_ENV['BASE_URL'] . 'home');
			exit();
        }
		$this->title = 'Login';
		$error = false;

		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$login = trim($_POST['login']);
			$password = trim($_POST['password']);

			$user = $this->model->getByLogin($login);

			if($user === null || !password_verify($password, $user['password'])){
				$error = true;
			}
			else {
				$fields = [
					'id_user' => $user['id'],
					'token' => $this->sessionModel->generateToken()
				];
				$this->sessionModel->add($fields);
				setcookie('token', $fields['token'], time() + 3600 * 24 * 30, $_ENV['BASE_URL']);
				SessionHelper::set('token', $fields['token']);
				header("Location: " . $_ENV['BASE_URL'] . 'home');
				exit();
			}
		}
        $this->content = $this->view->render('Users/Views/login.twig', [
			'error' => $error
		]);
    }
    
}