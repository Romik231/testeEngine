<?php


namespace controllers;


use core\CoreController;

class PatternfabricaController extends CoreController
{
	public function index()
	{
		$this->view->render([], 'patternfabrica');
	}
}