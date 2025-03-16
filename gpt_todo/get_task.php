<?php
echo file_exists('tasks.json') ? file_get_contents('tasks.json') : '[]';
?>
