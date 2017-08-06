<?php

try
{
    $config = include(__DIR__ . '/../config/config.php');

    $connectionString = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";
    $db = new stdClass(); // new PDO($connectionString, $config['user'], $config['password']);

    // Получить информацию о текущем городе
    $city = array('name' => 'XXX'); /* $db->query("SELECT * FROM city WHERE id = :id")
                ->execute(array(
                    'id' => $config['cityId'],
                )); */

    include __DIR__ . '/../layouts/' . $config['layout'] . '.php';
} catch(\Exception $exception)
{
    $errorMessage = $exception->getMessage();
    include __DIR__ . '/../layouts/error.php';
}