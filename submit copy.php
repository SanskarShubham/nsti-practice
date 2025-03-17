<?php

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "todo_list";   

// Create connection
$connection = mysqli_connect($servername, $username, $password, $database);

// Check connection
if ($connection) {
    echo "Connected successfully";
} else {
    die("Connection failed: " . mysqli_connect_error());
}


// Get data from the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if fields are not empty
    if (!empty($_POST['task']) && !empty($_POST['time'])) {
        $task = $_POST['task'];
        $time = $_POST['time'];

        // Prepare statement using $connection instead of $conn
        $stmt = mysqli_prepare($connection, "INSERT INTO tasks (task, time) VALUES (?, ?)");

        if ($stmt) {
            // Bind parameters ("ss" = two string values)
            mysqli_stmt_bind_param($stmt, "ss", $task, $time);   

            // Execute statement
            if (mysqli_stmt_execute($stmt)) {
                echo "Data inserted successfully";
            } else {
                echo "Error inserting data: " . mysqli_stmt_error($stmt);
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }   
    }                    
            else {
                echo "Please fill in all the fields.";  
            }
}


// Close connection
mysqli_close($connection);

?>
