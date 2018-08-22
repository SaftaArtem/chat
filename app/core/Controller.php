<?php

namespace Core;

class Controller {
	
	public $model;
	public $view;
	
	public function __construct()
	{
		$this->view = new View();
	}
	public function render($cont, $temp, $data = 'guest') {
        ob_start();
	    $this->view->generate($cont, $temp, $data);
	    $html = ob_get_clean();
	    return $html;
    }
    public function render_handlers($content)
    {
        ob_start();
        $this->view->handler($content);
        return ob_get_clean();
    }
}
