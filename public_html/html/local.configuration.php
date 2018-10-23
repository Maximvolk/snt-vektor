<?php
class JConfig {
	public $dbtype = 'mysqli';
	public $host = 'localhost';
	public $user = 'a0236142_app_joomla_0';
	public $password = '415hKMMINE';
	public $db = 'a0236142_app_joomla_0';

	public $dbprefix = 'jos_';
}

if (file_exists('local.configuration.php')) {
    require_once 'local.configuration.php';
}