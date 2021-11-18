<?php

class Company {
	private static $instance;
	public $numA = 10;
	
	private function __construct() {}
	
	public static function getInstance() {
		if (!self::$instance) {
			self::$instance = new Company();
		}
		
		return self::$instance;
	}
}

$company = Company::getInstance();
echo $company->numA;