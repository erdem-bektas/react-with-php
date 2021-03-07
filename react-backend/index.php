<?php

$db = new PDO('mysql:host=localhost;dbname=react-php', 'root', '');

$query = $db->prepare('INSERT INTO table_react_php SET
textt = ?
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
