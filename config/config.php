<?php

// общий конфиг для всего приложения
$config = array(
    // ...
);

//  имя домена
$host = $_SERVER['SERVER_NAME'];
// конфиг под домен
$hostConfigFile = __DIR__.'/'.$host.'.php';
if (is_file($hostConfigFile))
    $hostConfig = include($hostConfigFile);
else
    throw new \Exception('Не задана конфигурация для домена "' . $host . '"');

return array_merge($config, $hostConfig); // объединить конфиги