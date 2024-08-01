<?php
session_start();
include 'config.php';
define('HOST', $host);
define('USER', $username);
define('PASSWORD', $password);
define('DATABASE', $database);
require 'class/Database.php';
$database = new Database;
require 'class/Users.php';
require 'class/Time.php';
require 'class/Tickets.php';
require 'class/Department.php';
$users = new Users();
$time = new Time();
$department = new Department();
$tickets = new Tickets();

?>
