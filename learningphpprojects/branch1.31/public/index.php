<?php

declare(strict_types = 1);

$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;

define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
define('FILES_PATH', $root . 'transaction_files' . DIRECTORY_SEPARATOR);
define('VIEWS_PATH', $root . 'views' . DIRECTORY_SEPARATOR);

echo '<br> Start of Index.php';
require APP_PATH . 'App.php';

$files = getAllTransactionFiles(FILES_PATH);

echo '<br> ------------------- <br>';
print_r('These are the files');
print_r($files);
echo '<br> ------------------- <br>';

$transactions = [];
foreach($files as $file){
    $transactions = array_merge($transactions, getAllTransactions($file, 'extractTransaction'));
}
echo '<br> ------------------- <br>';
print_r('These are the transactions');
print_r($transactions);
echo '<br> ------------------- <br>';

echo '<br> End of Index.php';
/* YOUR CODE (Instructions in README.md) */
