<?php
// Database connection parameters
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "nazarat"; // Your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $agree = $_POST["agree"];
    $hash= password_hash($password, PASSWORD_BCRYPT);
   
    // Insert data into database
    $sql = "INSERT INTO reg (Name, Email, Password, Agree) VALUES ('$name', '$email', '$hash', '$agree')";
    if ($conn->query($sql) === TRUE) {
        
        echo "<script>alert('Registration successful! Please Go to Login Page')</script>";

    // Redirect to another page after 2 seconds
    echo "<script>setTimeout(function(){ window.location.href = 'reg.html'; }, 0000);</script>";

    // Exit to prevent further execution of PHP code
    exit;

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
