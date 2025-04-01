<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "cmrcentralstudy";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Extract form data
    $regulation = mysqli_real_escape_string($conn, $_POST["regulation"]);
    $branch = mysqli_real_escape_string($conn, $_POST["branch"]);
    $year = mysqli_real_escape_string($conn, $_POST["year"]);
    $subject = mysqli_real_escape_string($conn, $_POST["subject"]);

    // File upload handling
    $target_dir = "uploads/";

    // Create the "uploads" directory if it doesn't exist
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0755, true);
    }

    // Ensure the directory is writable
    if (!is_writable($target_dir)) {
        die("Error: The 'uploads' directory is not writable.");
    }

    $target_file = $target_dir . uniqid() . basename($_FILES["fileInput"]["name"]);

    if (move_uploaded_file($_FILES["fileInput"]["tmp_name"], $target_file)) {
        // File uploaded successfully, now insert data into the database
        $sql = "INSERT INTO `uploading_data` (regulation, branch, year, subject, file_path) 
                VALUES ('$regulation', '$branch', '$year', '$subject', '$target_file')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('New record inserted successfully')</script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Error uploading file.";
    }

    // Close the connection
    mysqli_close($conn);
}
?>