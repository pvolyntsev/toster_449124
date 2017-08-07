<?php

try
{
    $config = include(__DIR__ . '/../config/config.php');

    $connectionString = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";
    $db = new PDO($connectionString, $config['user'], $config['password']);

    // Получить информацию о текущем городе
    if ($config['cityId'])
    {
        // если в конфиге указан конкретный город
        $city = $db->query("SELECT * FROM city WHERE id = :id")
            ->execute(array(
                'id' => $config['cityId'],
            ));
    } else
    {
        // получить из таблицы городов по названию доменного имени
        $city = $db->query("SELECT * FROM city WHERE domain = :domain")
            ->execute(array(
                'domain' => $_SERVER['SERVER_NAME'],
            ));
    }

    include __DIR__ . '/../layouts/' . $config['layout'] . '.php';
} catch(\Exception $exception)
{
    $errorMessage = $exception->getMessage();
    include __DIR__ . '/../layouts/error.php';
}