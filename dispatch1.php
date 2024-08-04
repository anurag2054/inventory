<?php
session_start();
include './dbConn.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

include("./partials/_header.php");

include("./partials/_navbar.php");

// Fetch court names from database
$court_query = "SELECT DISTINCT court_name FROM court";
$court_result = $conn->query($court_query);

// Fetch office names from database
$office_query = "SELECT id, detail FROM item_categories";
$result = $conn->query($office_query);
$categories = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $court_name = $_POST["court"];
    $office = $_POST["office"];
    $items = $_POST["item"];
    $user_name = $_POST["name"];
    $remarks = $_POST["remarks"];

    // Insert data into the table
    $insert_query = "INSERT INTO dispatch (court_name, office, item, user_name, remarks) VALUES ('$court_name', '$office', '$items', '$user_name', '$remarks')";

    if ($conn->query($insert_query) === TRUE) {
        $_SESSION["message"] = "New record created successfully";
    } else {
        $_SESSION["message"] = "Error in inserting record";
    }
}

?>
<!-- DATA ENTY FORM  -->
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          Items to be dispatched
        </div>
        <div class="card-body">
        <?php if(isset($_SESSION["message"])): ?>
            <div class="alert alert-info" role="alert">
<?= $_SESSION["message"] ?>
</div>
<?php unset($_SESSION['message']); ?>

<?php endif; ?>
    
    

        <form method="POST" action="">
            <div class="form-group">
                <label for="court">Select Court From List:</label>
                <select id="court" class="form-control" name="court">
                    <?php
                    if ($court_result->num_rows > 0) {
                        while($row = $court_result->fetch_assoc()) {
                            echo "<option value='" . $row["court_name"] . "'>" . $row["court_name"] . "</option>";
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="office">Select Office or Court From List:</label>
                <select class="form-control" id="office" name="office">
                    <option value="Office">Office</option>
                    <option value="Court">Court</option>
                    </select>
            </div>
            <div class="form-group">
                <label for="item">Select items to be given:</label>
                <select class="form-control" id="item" name="item">
                <?php foreach ($categories as $item) : ?>
                  
                  
                  <option value="<?= $item["detail"] ?>"> <?= $item["detail"] ?> </option>
  
  
                <?php endforeach; ?>
                </select>
            <div class="form-group">
                <label for="user_name">Receiver Name:</label>
                <input type="text" id="name" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label for="remarks">Remarks if any:</label>
                <input type="text" class="form-control" name="remarks"><br>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>

<?php
// Close connection
$conn->close();
?>
