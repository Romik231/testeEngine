<?php

namespace core;

/**
 * Class Request
 *
 * @author Roman Stepurov
 * @version 1.0, 10.08.2020
 */
class Request
{
	/** @var string $controller - controller name */
	private $controller;
	/** @var string $action - action name */
	private $action;
	/** @var string $model - model name */
	private $model;

	/**
	 * Request constructor.
	 */
	public function __construct()
	{
		$route = explode('/', $_SERVER['REQUEST_URI']);
		$controller = ucfirst($route[1]) ?: 'Base';
		$this->model = $controller . 'Model';
		$this->controller = $controller . 'Controller';
		$this->action = $route[2] ?: 'index';
	}

	/**
	 * get controller name
	 *
	 * @author Roman Stepurov
	 * @version 1.0, 10.08.2020
	 *
	 * @return string
	 */
	public function getController(): string
	{
		return $this->controller;
	}

	/**
	 * get action name
	 *
	 * @author Roman Stepurov
	 * @version 1.0, 10.08.2020
	 *
	 * @return string
	 */
	public function getAction(): string
	{
		return $this->action;
	}

	/**
	 * get model name
	 *
	 * @author Roman Stepurov
	 * @version 1.0, 10.08.2020
	 *
	 * @return string
	 */
	public function getModel(): string
	{
		return $this->model;
	}
}