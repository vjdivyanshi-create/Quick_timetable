<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "quicktimetable";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Check if POST data exists
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $user = $_POST['username'];
        $pass = $_POST['password'];

        // Correct table name: timetable (not users)
        $sql = "SELECT * FROM timetable WHERE username = '$user'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            if (password_verify($pass, $row['password'])) {
                echo "✅ Login successful! <a href='generator.html'>Go to Generator</a>";
            } else {
                echo "❌ Incorrect password!";
            }
        } else {
            echo "❌ User not found!";
        }
    } else {
        echo "❌ Username or Password is missing!";
    }
} else {
    echo "❌ Invalid request!";
}

$conn->close();
?>
