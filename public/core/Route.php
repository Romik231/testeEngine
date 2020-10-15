<?php

namespace core;

use controllers\Page404;
use RuntimeException;

/**
 * Class router
 *
 * @author Roman Stepurov
 * @version 1.0, 04.08.2020
 */
class Route
{
	/** @var Request $request Object Request*/
	private $request;

	/**
	 * Route constructor.
	 * @param Request $request Object Request
	 *
	 */
	public function __construct(Request $request)
	{
		$this->request = $request;
	}

	/**
	 * Initialize page
	 *
	 * @author Roman Stepurov
	 * @version 1.0, 07.08.2020
	 *
	 * @throws RuntimeException
	 */
	public function init()
    {
		$namespaceController = '\\controllers\\';
		$controller =  $namespaceController . $this->request->getController();
		$action = $this->request->getAction();
		$filePath = $_SERVER['DOCUMENT_ROOT'] . '/public/controllers/' . $this->request->getController() . '.php';
		if (file_exists($filePath)) {
			$pageController = new $controller($this->getModel());
			if ($pageController instanceof CoreController && method_exists($pageController, $action)) {
				return $pageController->$action();
			}
			$pageController->index();
		}
		return (new Page404())->pageNotFound();
    }

	/**
	 * get model if exist
	 *
	 * @author Roman Stepurov
	 * @version 1.0, 10.08.2020
	 *
	 * @return CoreModel|void
	 */
    public function getModel()
	{
		$nameSpaceModel = '\\models\\';
		$model = $nameSpaceModel . $this->request->getModel();
		$filePath = $_SERVER['DOCUMENT_ROOT'] . '/public/models/' . $this->request->getModel() . '.php';
		if (file_exists($filePath)) {
			return new $model();
		}
	}






}