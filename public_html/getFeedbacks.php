<?php

$servername = "db";
$username = "devuser";
$password = "devpass";
$dbname = "kcs_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM feedbacks";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<hr><h4>" . $row["Name"]. "</h4> <p> " . $row["feedback"]. "</p> <br>";
    }
} else {
    echo "0 results";
}
$conn->close();