<?php

namespace core;

use PHPUnit\Framework\TestCase;

class RouteTest extends TestCase
{
	/** @var Route $Route Object Route */
	private $Route;
	/** @var Request $Request Object Request */
	private $Request;

	protected function setUp(): void
	{
		$this->Request = new Request();
		$this->Route = new Route($this->Request);
	}

	/**
	 * test correct instances
	 *
	 * @author Roman Stepurov
	 * @version 1.0, 15.10.2020
	 *
	 */
	public function testInstances(): void
	{
		self::assertInstanceOf(Request::class, $this->Request);
		self::assertInstanceOf(Route::class, $this->Route);
	}
}
