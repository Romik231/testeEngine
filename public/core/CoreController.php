<?php


namespace core;


use interfaces\Index;
use models\BaseModel;

/**
 * class core controller
 *
 * @author Roman Stepurov
 * @version 1.0, 10.08.2020
 */
class CoreController implements Index
{
	/** @var CoreModel|null */
	protected $model;

	/** @var CoreView */
	protected $view;

	/**
	 * CoreController constructor.
	 */
	public function __construct()
	{
		$this->model = new BaseModel();
		$this->view = new CoreView();
	}

	public function index()
	{
		$this->view->render($this->model->model(), 'index');
	}
}