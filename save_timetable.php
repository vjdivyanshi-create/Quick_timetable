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

// Collect POST data from HTML form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $class_name = $_POST["class_name"];
    $day = $_POST["day"];
    $period1 = $_POST["period1"];
    $period2 = $_POST["period2"];
    $period3 = $_POST["period3"];
    $period4 = $_POST["period4"];
    $period5 = $_POST["period5"];

    // Insert into timetable table
    $sql = "INSERT INTO timetable (username, class_name, day, period1, period2, period3, period4, period5)
            VALUES ('$username', '$class_name', '$day', '$period1', '$period2', '$period3', '$period4', '$period5')";

    if ($conn->query($sql) === TRUE) {
        echo "✅ Timetable saved successfully!<br><br>";
        echo "<a href='download_timetable.php?username=$username&class_name=$class_name'>📥 Download Timetable</a>";
    } else {
        echo "❌ Error: " . $conn->error;
    }

    $conn->close();
} else {
    echo "❌ Invalid request.";
}
?>
