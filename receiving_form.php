<?php

session_start();
include './dbConn.php';



// Check if user is logged in, if not, redirect them to the login page
if (!isset($_SESSION['username'])) {
  header("Location: index.php");
  exit;
}

$sql = "SELECT id, detail FROM item_categories";
$result = $conn->query($sql);
$categories = mysqli_fetch_all($result, MYSQLI_ASSOC);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $name = $_POST['name'];
  $date = $_POST['date'];
  $category = $_POST['category'];
  $quantity = $_POST['quantity'];
  $voucher = $_POST['voucher'];
  
  // Insert data into the database
  $sql = "INSERT INTO items (name, date, category, quantity, voucher_no) VALUES ('$name', '$date', '$category', '$quantity', '$voucher')";
  
  
  if ($conn->query($sql) === TRUE) {
    $_SESSION["message"] = ' Record Inserted ';
        
  } else {
    $_SESSION["message"] = ' Error in inserting Record ';
  }
  }



// print_r($table_data);

include("./partials/_header.php");

include("./partials/_navbar.php");

// include("./partials/_receiving_form.php");

?>
<!-- DATA ENTY FORM  -->



<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
        <?php echo $translations['Insert Item Received']; ?>
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
              <label for="name"><?php echo $translations['Insert Name of Item']; ?></label><br>
              <input type="text" class="form-control" id="name" name="name" required><br>
            </div>
            <div class="form-group">
              <label for="date"><?php echo $translations['Date of Purchase']; ?></label><br>
              <input type="date" class="form-control" id="date" name="date" required><br>
            </div>
            <div class="form-group">
              <label for="category"><?php echo $translations['Select Item']; ?></label>
              <select id="category" name="category" required>
                
              <?php foreach ($categories as $item) : ?>
                  
                  
                <option value="<?= $item["id"] ?>"> <?= $translations[$item["detail"]] ?> </option>


              <?php endforeach; ?>

              
              </select> 
            </div><br>
            <div class="form-group">
             <label for="quantity"><?php echo $translations['Total quantity purchased']; ?></label><br>
              <input type="number" class="form-control" id="quantity" name="quantity" required><br>
            </div>
            <div class="form-group">
              <label for="voucher"><?php echo $translations['Voucher Number']; ?></label>
              <input type="text" class="form-control" id="voucher" name="voucher" required><br>
            </div>
            <button type="submit" class="btn btn-primary"><?php echo $translations['Submit']; ?></button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

      <!-- END DATA ENTRY FORM -->



  

<?php
include("./partials/_footer.php");