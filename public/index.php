<?php
require 'bootstrap.php';

$http = new Respect\Config\Container('../config/HttpKernel.ini');
$http->kernel->handle($http->request)->send();