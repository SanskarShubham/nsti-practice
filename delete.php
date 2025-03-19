<?php

include "connection_create.php";

// Get data from the form
if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Prepare statement using $connection instead of $conn
        $id = $_GET['s_no'];
        $stmt = $conn->prepare("DELETE FROM todo WHERE s_no = '$id'");

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


    include "connection_close.php" 


    ?>
