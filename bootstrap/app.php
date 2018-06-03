<?php

session_start();

require_once '../vendor/autoload.php';

(new Dotenv\Dotenv(__DIR__ . '/../'))->load();

require_once 'container.php';

