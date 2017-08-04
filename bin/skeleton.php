<?php
$loader = null;

foreach (array(__DIR__ . '/../../../autoload.php', __DIR__ . '/../vendor/autoload.php') as $fn) {
    if (file_exists($fn)) {
        $loader = require $fn;
        break;
    }
}

if ($loader === null) {
    $cmd = basename($_SERVER['SCRIPT_FILENAME']);
    fputs(STDERR, "$cmd: unable to load composer autoloader." . PHP_EOL);
    exit(1);
}

exit(ngyuki\Skeleton\Sample::main($argc, $argv));
