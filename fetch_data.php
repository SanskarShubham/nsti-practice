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
            <th>Action</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) { ?>
                <tr>
                        <td><?php echo $row['s_no'] ?> </td>
                        <td><?php echo $row['task'] ?></td>
                        <td><?php echo $row['time'] ?></td>
                        <td> 
                            <a href="http://localhost/karan/delete.php?s_no=<?php echo $row['s_no']  ?>" > Delete </a>|
                            <a href="http://localhost/karan/edit.php?s_no=<?php echo $row['s_no']  ?>" > Edit </a></td>
                      </tr>
        <?php      }
        } else {
            echo "<tr><td colspan='4'>No data found</td></tr>";
        }
        ?>

    </table>
</body>
</html>

<?php
// Close connection
$conn->close();
?>
