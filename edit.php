<?php

include "connection_create.php";

// Get data from the form
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Prepare statement using $connection instead of $conn
    $id = $_GET['s_no'];
    $todo = $conn->query("SELECT *  FROM todo WHERE s_no = '$id'");
    $todo_data = $todo->fetch_assoc();
    // echo "<pre>";
    // print_r($todo_data);
     $todo_date = date('Y-m-d', strtotime($todo_data['time']));
    // exit;
?>


    <form action="http://localhost/karan/submit.php" method="POST" id="myForm">
        <label for="input">TODO :</label>
        <input type="text" name="task" value="<?php echo $todo_data['task']; ?>" id="input" placeholder="enter your todo here" required>
        <input type="date" value="<?php echo $todo_date; ?>" name="time" id="date" required>
        <input type="hidden" name="s_no" value="<?php echo $todo_data['s_no']; ?>">
        <button type="submit" id="submit">SUBMIT</button>

    </form>


<?php
}
?>