<?php

$execFilePath = __DIR__ . "/../bin/phpunit-exec";
$mainFilePath = __DIR__ . "/../bin/phpunit";

echo "Make files executable\n";

exec('chmod +x '.$execFilePath);
exec('chmod +x '.$mainFilePath);