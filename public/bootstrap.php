<?php
ini_set('display_errors', 'On');
error_reporting(-1);

define('RESPECT_LIBRARY', realpath(__DIR__.'/../library'));
set_include_path(RESPECT_LIBRARY.PATH_SEPARATOR.get_include_path());
spl_autoload_register(function($className) {
	$fileParts = explode('\\', ltrim($className, '\\'));
    if (false !== strpos(end($fileParts), '_'))
        array_splice($fileParts, -1, 1, explode('_', current($fileParts)));
    require implode(DIRECTORY_SEPARATOR, $fileParts) . '.php';
});