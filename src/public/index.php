<?php

use Ramsey\Uuid\UuidFactory;

require __DIR__ . '/../vendor/autoload.php';


$id = new UuidFactory();
echo $id->uuid4();



phpinfo();
print_r($_SERVER);

