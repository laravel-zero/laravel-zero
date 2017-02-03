<?php

ini_set('phar.readonly', 0);

$phar_file_name = 'application.phar';
$included_paths = ['app/', 'vendor/', 'bootstrap/', 'start.php'];

$phar = new Phar(__DIR__ . '/' . $phar_file_name,
    FilesystemIterator::CURRENT_AS_FILEINFO | FilesystemIterator::KEY_AS_FILENAME,
    $phar_file_name
);
$phar->buildFromDirectory(dirname(__FILE__), '#' . implode('|', $included_paths) . '#');
$phar->setStub($phar->createDefaultStub('start.php'));

echo "\nSuccessfully compiled standalone application: " . realpath(__DIR__ . '/' . $phar_file_name) . "\n";
