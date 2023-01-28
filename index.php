<?php

$servername = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'db_hotel';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn && $conn->connection_error)
    echo "Connection failed: " . $conn->collator_error;
else
    echo "Connection successful";

echo '<br><br>';

$sql = "Select room_number, floor FROM stanze";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo 'Stanza n. '.$row['room_number'].' piano: '.$row['floor'].'<br>';
    }
} elseif ($result) {
    echo "0 results";
} else {
    echo "query error";
}

$conn->close();