<?php
include("horizontal.php");
include("vertical1.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Table</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Data Table</h2>
        <div class="table-responsive">
            <?php
            // Database connection parameters
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "nazarat";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // SQL query to fetch data
            $sql = "SELECT * from items,item_categories WHERE items.category = item_categories.id LIMIT 15";
            $result = $conn->query($sql);
            // Check if any rows were returned
            if ($result->num_rows > 0) {
                echo "<table class='table table-bordered'>";
                echo "<thead class='thead-dark'><tr><th>ID</th><th>Name</th><th>Category</th><th>Date Of Purchase</th><th>Quantity</th><th>Voucher Number</th></tr></thead>";
                echo "<tbody>";
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["category"]."</td><td>".$row["date"]."</td><td>".$row["quantity"]."</td><td>$row[voucher_no]</td></tr>";
                }
                echo "</tbody>";
                echo "</table>";
            } else {
                echo "0 results";
            }

            // Close connection
            $conn->close();
            ?>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>