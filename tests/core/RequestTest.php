<?php

namespace core;

use PHPUnit\Framework\TestCase;

class RequestTest extends TestCase
{
	/** @var Request $Request */
	private $Request;

	/**
	 * @description
	 *
	 * @author Roman Stepurov
	 * @version 1.0, 15.10.2020
	 * @return void
	 */
	public function setUp(): void
	{
		$this->Request = new Request();
	}

	/**
	 * Tests correct Names
	 *
	 * @author Roman Stepurov
	 * @version 1.0, 15.10.2020
	 *
	 */
	public function testNamesMVC(): void
	{
		self::assertInstanceOf(Request::class, $this->Request);
		self::assertEquals('BaseController', $this->Request->getController());
		self::assertEquals('BaseModel', $this->Request->getModel());
		self::assertEquals('index', $this->Request->getAction());
	}
}
