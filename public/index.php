<?php
require 'bootstrap.php';

$db   = new Respect\Config\Container('../config/Doctrine.ini');
$http = new Respect\Config\Container('../config/HttpKernel.ini');
$http->kernel->handle($http->request)->send();