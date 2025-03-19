<?php
// Database connection
include "connection_create.php";

// Fetch data from the database
$sql = "SELECT * FROM  todo";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Fetch Data Example</title>
</head>
<body>
    <h2>Data from Database:</h2>
    <table border="1">
        <tr>
            <th>S_no</th>
            <th>Todo</th>
            <th>Time</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row['s_no'] . "</td>
                        <td>" . $row['task'] . "</td>
                        <td>" . $row['time'] . "</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No data found</td></tr>";
        }
        ?>

    </table>
</body>
</html>

<?php
// Close connection
$conn->close();
?>
