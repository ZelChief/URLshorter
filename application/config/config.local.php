<?php
/**
 * Настройки для локального сервера.
 * Для использования - переименовать файл в config.local.php
 * Именно в этом файле необходимо переопределять все настройки конфига
 */

/**
 * Настройка базы данных
 */
$config['db']['params']['host'] = 'localhost';
$config['db']['params']['port'] = '3306';
$config['db']['params']['user'] = 'root';
$config['db']['params']['pass'] = '';
$config['db']['params']['type']   = 'mysqli';
$config['db']['params']['dbname'] = 'social';
$config['db']['table']['prefix'] = '';

$config['server']['api']['key'] = '123';

$config['db']['tables']['engine'] = 'InnoDB';
$config['path']['root']['web'] = 'http://localhost/ls_alfa';
$config['path']['offset_request_url'] = 1;
$config['module']['blog']['encrypt'] = '61f62ea824b8cc8aa33c5308f19a339c';
$config['module']['talk']['encrypt'] = '44e65785916f7336dd558d4713d2cd8a';
$config['module']['security']['hash'] = '3e6157f55f0d7c09f63074b191e6dee5';
$config['general']['reg']['invite'] = true;
$config['view']['name'] = 'bmstu.link';                   // название сайта
$config['view']['description'] = ''; // seo description
return $config;