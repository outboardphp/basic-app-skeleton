<?php

require "vendor/autoload.php";

$container = new Aspire\DIC\Container(new Aspire\DIC\Config("aspire-app.json"));
$app = $container->create("Aspire\\Framework");

$app->input($_SERVER, $_GET, $_POST, $_COOKIE, $_SESSION, $_FILES)->run();
