<?php

use App\Kernel;
use Ramsey\Uuid\UuidFactory;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

$id = new UuidFactory();
echo $id->uuid4();

echo "\nHello world!";

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
