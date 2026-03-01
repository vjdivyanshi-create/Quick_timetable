<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "quicktimetable";

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET["username"]) && isset($_GET["class_name"])) {
    $username = $_GET["username"];
    $class_name = $_GET["class_name"];

    // Query all timetable entries for this user and class
    $sql = "SELECT * FROM timetable WHERE username='$username' AND class_name='$class_name'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Set headers for CSV download
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="timetable.csv"');

        // Open output stream
        $output = fopen("php://output", "w");

        // Write CSV headers
        fputcsv($output, ["Day", "Period 1", "Period 2", "Period 3", "Period 4", "Period 5"]);

        // Write data rows
        while ($row = $result->fetch_assoc()) {
            fputcsv($output, [$row["day"], $row["period1"], $row["period2"], $row["period3"], $row["period4"], $row["period5"]]);
        }

        fclose($output);
    } else {
        echo "No timetable found for this user and class.";
    }
} else {
    echo "❌ Missing parameters.";
}

$conn->close();
?>
