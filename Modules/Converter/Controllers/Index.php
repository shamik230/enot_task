<?php

namespace Modules\Converter\Controllers;
use Modules\Base\BaseController;

class Index extends BaseController {

    public function __construct() {
        parent::__construct();
        $this->checkAccess();
    }

    public function index() {
        $this->title = "Home page";
        $this->content = $this->view->render('Converter/Views/index.twig');
    }
}