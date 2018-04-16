<?php

// FRONT CONTROLLER

// Общие настройки
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Открытие сессии
session_start();

// Подключение файлов системы
define('ROOT', dirname(__FILE__));
require_once ROOT . '/components/Autoload.php';

// Генерация данных
Database::generateData();

// Вызов Router
$router = new Router();
$router->run();
