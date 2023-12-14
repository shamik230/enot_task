<?php

namespace Modules\Base;
use System\Template;

class BaseController {
    protected string $title = '';
	protected string $content = '';
	protected Template $view;
    public function __construct(){
		$this->view = Template::getInstance();
		// $this->user = Auth::getUser();
	}

    public function render() : string{
		return $this->view->render('Base/main.twig', [
			'title' => $this->title,
			'content' => $this->content
		]);
	}
}