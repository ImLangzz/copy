<?php

foreach ([
    'APP_ENV' => 'production',
    'APP_DEBUG' => 'false',
    'CACHE_STORE' => 'array',
    'SESSION_DRIVER' => 'array',
    'QUEUE_CONNECTION' => 'sync',
    'LOG_CHANNEL' => 'stderr',
    'VIEW_COMPILED_PATH' => '/tmp/laravel-views',
    'APP_CONFIG_CACHE' => '/tmp/laravel-config.php',
    'APP_EVENTS_CACHE' => '/tmp/laravel-events.php',
    'APP_PACKAGES_CACHE' => '/tmp/laravel-packages.php',
    'APP_ROUTES_CACHE' => '/tmp/laravel-routes.php',
    'APP_SERVICES_CACHE' => '/tmp/laravel-services.php',
] as $name => $value) {
    putenv("{$name}={$value}");
    $_ENV[$name] = $value;
    $_SERVER[$name] = $value;
}

$compiledViews = getenv('VIEW_COMPILED_PATH');

if (! is_dir($compiledViews)) {
    mkdir($compiledViews, 0755, true);
}

require __DIR__.'/../public/index.php';