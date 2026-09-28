<?php

foreach ([
	'APP_ENV' => 'production',
	'APP_DEBUG' => 'false',
	'CACHE_STORE' => 'array',
	'SESSION_DRIVER' => 'array',
	'QUEUE_CONNECTION' => 'sync',
	'LOG_CHANNEL' => 'stderr',
	'VIEW_COMPILED_PATH' => '/tmp/laravel-views',
] as $name => $value) {
	if (getenv($name) === false) {
		putenv("{$name}={$value}");
		$_ENV[$name] = $value;
		$_SERVER[$name] = $value;
	}
}

$compiledViews = getenv('VIEW_COMPILED_PATH');

if (! is_dir($compiledViews)) {
	mkdir($compiledViews, 0755, true);
}

require __DIR__.'/../public/index.php';