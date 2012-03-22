<?php

namespace Blog\Controllers;

use Respect\Config\Container;

class AbstractController
{
	protected $entityManager;

	public function __construct() 
	{
		$config = new Container('../config/Doctrine.ini');
		$this->entityManager = $config->entityManager;
	}
}