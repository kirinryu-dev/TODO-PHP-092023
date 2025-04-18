<?php
define('TASKS_FILE', __DIR__.'/tasks.json');

function getAllTasks() {
    if (!file_exists(TASKS_FILE)) {
        file_put_contents(TASKS_FILE, '[]');
        return [];
    }
    return json_decode(file_get_contents(TASKS_FILE), true) ?: [];
}

// to save task 
function saveTask($task) {
    $tasks = getAllTasks();
    $tasks[] = $task;
    file_put_contents(TASKS_FILE, json_encode($tasks));
}

// to delete task 

// var_dump(getAllTasks());