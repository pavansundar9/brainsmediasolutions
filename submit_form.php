<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "brains_media_solutions";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Thank You! You will receive an update shortly.');</script>";
        echo "<script>window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "');</script>";
        echo "<script>window.location.href='index.html';</script>";
    }

    $conn->close();
}
?>
