<?php

namespace controllers;

use core\CoreController;

class Page404 extends CoreController
{
	public function pageNotFound()
	{
		$this->view->render([], '404');
	}
}