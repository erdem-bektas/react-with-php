<?php

$db = new PDO('mysql:host=localhost;dbname=<db-name>', '<username>', '<password>');

$query = $db->prepare('INSERT INTO table_react_php SET
text = ?
');

$recText = $_POST['text'];
$add = $query->execute([
    $recText
    ]);

if ($add) {
    echo 'Data has been inserted';
} else {
    echo 'Error';
}
