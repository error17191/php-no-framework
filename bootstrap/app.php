<?php

session_start();

require_once '../vendor/autoload.php';

(new Dotenv\Dotenv(__DIR__ . '/../'))->load();

var_dump(getenv('APP_NAME'));