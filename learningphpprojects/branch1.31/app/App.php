<?php

declare(strict_types = 1);

echo '<br> Start of App.php';

function getAllTransactionFiles(string $dirPath): array{
    $files = [];

    foreach(scandir($dirPath) as $file){
        if(is_dir($file)){
            continue;
        }

        $files[] = $dirPath . $file;
    }

    return $files;
}

function getAllTransactions(string $fileName, ?callable $transactionHandler = null): array {
    if (!file_exists($fileName)){
        trigger_error('File"' . $fileName . '" does not exist.', E_USER_ERROR);
    }
     echo '<br> fileName is: '. $fileName . '<br>';

     $file = fopen($fileName, 'r');

     fgetcsv($file);

     $transactions = [];

     while(($transactions = fgetcsv($file)) !== false){
        if($transactionHandler !== null){
            $transaction = $transactionHandler($transactions);
        }

        echo '<br> -------';
        echo implode($transaction);
        echo '<br> -------';

        $transactions[] = $transaction;
     }

     return $transactions;
}

function extractTransaction(array $transactionRow): array{
    [$date, $checkNumber, $description, $amount] = $transactionRow;

    $amount = (float) str_replace(['$',','], '', $amount);

    return [
        'date' => $date,
        'checkNumber' => $checkNumber,
        'description' => $description,
        'amount' => $amount,
    ];
}

echo '<br> End of App.php';

// Your Code
