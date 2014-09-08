<?php
session_start();
error_reporting(E_ALL);
ini_set('error_reporting',true);
ini_set('html_errors',true);
require_once __DIR__ . '/config/database.php';
require_once __DIR__.'/vendor/autoload.php';

$dsn = 'mysql:host='.$host.';dbname='.$database.';charset=utf8';
$pdo = new PDO($dsn,$username,$password);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$passwordHasher = new \SpaceGame\Service\PasswordHasherService();
