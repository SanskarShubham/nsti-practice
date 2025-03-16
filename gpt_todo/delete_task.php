<?php
if (isset($_GET['index'])) {
    $tasks = json_decode(file_get_contents('tasks.json'), true);
    array_splice($tasks, $_GET['index'], 1);
    file_put_contents('tasks.json', json_encode($tasks));
}
?>
