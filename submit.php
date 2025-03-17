<?php
// echo "dfasdf";exit;
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "todo_list";   

// Create connection
$connection = new mysqli($servername, $username, $password, $database);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Get data from the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if fields are not empty
    if (!empty($_POST['task']) && !empty($_POST['time'])) {
        $task = $_POST['task'];
        $time = $_POST['time'];

        // Prepare statement using $connection instead of $conn
        $stmt = $connection->prepare("INSERT INTO todo (task, time) VALUES ('$task', '$time')");

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

// Close connection
$connection->close();

?>

