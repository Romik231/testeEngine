<?php


namespace core;


class CoreView
{
	public function render($model = [], $fileName = 'index')
	{
		$path = $_SERVER['DOCUMENT_ROOT'] . '/public/views/' . $fileName . '.php';
		if (!file_exists($path)) {
			$fileName = 'index';
			require_once $path;
		}
		extract($model,EXTR_OVERWRITE);

		ob_start(null, 0, PHP_OUTPUT_HANDLER_CLEANABLE);
		include $path;
		return ob_get_clean();
//		require_once $path;
	}
}