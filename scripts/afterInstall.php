<?php

$execFilePath = __DIR__ . "/../bin/phpunit-exec.phar";
$mainFilePath = __DIR__ . "/../bin/phpunit";

echo "Make files executable\n";

exec('chmod +x '.$execFilePath);
exec('chmod +x '.$mainFilePath);