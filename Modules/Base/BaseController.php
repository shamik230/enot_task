<?php

namespace Modules\Base;
use Modules\Users\Api\Auth;
use System\Exceptions\AuthException;
use System\Template;

class BaseController {
    protected string $title = '';
	protected string $content = '';
	protected ?array $user;

	protected Template $view;
    public function __construct(){
		$this->view = Template::getInstance();
		$this->user = Auth::getUser();
	}

    public function render() : string {
		// print_r($this->user);
		return $this->view->render('Base/main.twig', [
			'title' => $this->title,
			'content' => $this->content,
			'isAuth' => $this->isAuth(),
		]);
	}

	public function checkAccess(){
		if($this->user === null){
			throw new AuthException('You need to log in');
		}
	}

	protected function isAuth() {
		return $this->user !== null;
	}
}