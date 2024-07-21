<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Bookings";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $Name = mysqli_real_escape_string($conn, $_POST['fullName']);
    $Email = mysqli_real_escape_string($conn, $_POST['email']);
    $Destination = mysqli_real_escape_string($conn, $_POST['destination']);
    $Hotels = mysqli_real_escape_string($conn, $_POST['hotels']);
    $Numberoftickets = mysqli_real_escape_string($conn, $_POST['tickets']);

    // SQL query to insert data into database
    $sql = "INSERT INTO `Bookings` (`name`, `email`, `destination`, `Hotels`, `Number_of_tickets`)
            VALUES ('$Name', '$Email', '$Destination', '$Hotels', '$Numberoftickets')";

    if ($conn->query($sql) === TRUE) {
        echo "Booking Successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
