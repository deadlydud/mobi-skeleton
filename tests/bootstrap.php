<?php // bootstrap for phpunit
ob_start();
require_once dirname(__DIR__) . '/index.php';
ob_end_clean();
