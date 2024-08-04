<?php


include("./dbConn.php");
session_start();
// Database connection details

// Check if user is logged in,  redirect them to the dashboard page
if (isset($_SESSION['username'])) {
    header("Location: ./dashboard.php");
    exit;
  }

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    include("./login_form.php");
}


// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hash= password_hash($password, PASSWORD_BCRYPT);

    

    // Retrieve the hashed password from the database
    $sql = "SELECT Password FROM reg WHERE Email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($hashed_password_from_db);

           if ($stmt->fetch())
        {
          if (password_verify($password, $hashed_password_from_db)) {
        $_SESSION['username'] = $username;
        header("Location: ./dashboard.php");
          
        exit;
    }
     else {
        // Username and password do not match
       // echo "Invalid username or password";
       $_SESSION["Error"] = "Invalid credentials";
    //    header("Location: ./login_form.php");
    //     exit;
    
    include("./login_form.php");
    }
}
}





// Close database connection
$conn->close();
?>