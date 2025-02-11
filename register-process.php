<?php
$conn = new mysqli("localhost", "root", "", "product_db");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $stmt = $conn->prepare("INSERT INTO subscribers (name, email) VALUES (?, ?)");
    
    if ($stmt) { // Check if prepare() was successful
        $stmt->bind_param("ss", $name, $email);
        if ($stmt->execute()) {
            echo "<script>window.location.href='thankyou.php';</script>";
        } else {
            echo "<script>alert('Error occurred. Please try again.'); window.location.href='index.php';</script>";
        }
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }
}

$conn->close();
?>

