<?php

namespace Modules\Users;
use Modules\Base\BaseController;

class Controller extends BaseController {
    protected Model $model;
    public function __construct(){
		parent::__construct();
		$this->model = Model::getInstance();
	}

    public function index() {
        $this->title = "Home page";
        $this->content = $this->view->render('Users/Views/index.twig');
    }
}