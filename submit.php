<?php

include "connection_create.php";

// Get data from the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if fields are not empty
    if (!empty($_POST['task']) && !empty($_POST['time'])) {
        $task = $_POST['task'];
        $time = $_POST['time'];

        // Prepare statement using $connection instead of $conn
        $stmt = $conn->prepare("INSERT INTO todo (task, time) VALUES ('$task', '$time')");

        if ($stmt) {

            // Execute the statement
            if ($stmt->execute()) {
                // echo "New record created successfully";
                header("Location: http://localhost/karan/home.php");
                exit();
            } else {
                echo "Error: " . $stmt->error;
            }

            // Close statement
            $stmt->close();
        } else {
            echo "Error in preparing statement: " . $connection->error;
        }
    } else {
        echo "Please fill in all fields!";
    }
}

 include "connection_close.php" 


?>

