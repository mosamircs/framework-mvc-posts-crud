<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require 'autoloader.php';
use App\Core\Application;
// $app = new  Application();
// $app->parseURL();
use App\Core\Database;
Database::getInstanceDatabase();