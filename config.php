<?php
$db_host = 'localhost';
$db_user = 'u82191';
$db_pass = '7564858';
$db_name = 'u82191';

// Отключаем вывод ошибок на экран (Information Disclosure)
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
// Логируем ошибки в файл
ini_set('log_errors', 1);
ini_set('error_log', '/home/u82191/logs/php_errors.log');

try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8mb4", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    // Не выводим детали ошибки на экран
    error_log($e->getMessage());
    die('Ошибка подключения к базе данных. Пожалуйста, попробуйте позже.');
}
?>
