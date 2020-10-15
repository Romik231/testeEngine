<?php


namespace core;


class CoreView
{
	public function render($model, $fileName = 'index')
	{
		$path = $_SERVER['DOCUMENT_ROOT'] . '/public/views/' . $fileName . '.php';
		if (!file_exists($path)) {
			$fileName = 'index';
			require_once $path;
		}
		require_once $path;
	}
}