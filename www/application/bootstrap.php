<?php

include_once 'module.php';

//подключаем модули
$module = new module();
$module->load_all_modules();

//include_once 'core/Router.php';
// запускаем маршрутизатор

$r = Router::getInstance();
$r->process($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
