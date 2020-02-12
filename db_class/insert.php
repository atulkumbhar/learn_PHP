<?php
$servername = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "demo1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql1 = "INSERT INTO demo_t (roll, name, address, zip)
VALUES ('2','Prajot', 'Bhoj', ' @RajaBhoj.com')";

if (mysqli_query($conn, $sql1)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
}

$sql = "SELECT roll, name, address, zip FROM demo_t";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br>"."Roll: " . $row["roll"]. " - Name: " . $row["name"]. " " . $row["address"]. " " . $row["zip"]. "<br>";
    }
} else {
    echo "0 results";
}



mysqli_close($conn);
?>