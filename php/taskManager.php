<?php
require_once __DIR__.'/taskFunction.php';

$description = htmlspecialchars($_POST['task_description']);
$author = htmlspecialchars($_POST['task_author']);
$date = $_POST['task_date'];

// Basic validation
if (empty($description) || empty($author) || empty($date)) {
    die('All fields are required');
}

saveTask([
    'description' => $description,
    'author' => $author,
    'date' => $date,
    'created_at' => date('Y-m-d H:i:s')
]);

header('Location: ../index.php');