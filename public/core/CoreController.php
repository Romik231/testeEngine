<?php


namespace core;


use interfaces\Index;

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
	 * @param CoreModel|null $model
	 */
	public function __construct($model = null)
	{
		$this->model = $model instanceof CoreModel ?? new $model;
		$this->view = new CoreView();
	}

	public function index()
	{
		$view = new CoreView();
		$this->view->render($this->model, 'index');
	}
}