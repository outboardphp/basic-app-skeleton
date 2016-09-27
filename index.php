<?php

require "vendor/autoload.php";

$container = new Aspire\Container(new Aspire\Config("aspire-app.json"));
$app = $container->create("Aspire\\Framework");

$app->input($_SERVER, $_GET, $_POST, $_COOKIE, $_FILES)->run();
