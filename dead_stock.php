<?php

session_start();
include './dbConn.php';



// Check if user is logged in, if not, redirect them to the login page
if (!isset($_SESSION['username'])) {
  header("Location: index.php");
  exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $date = $_POST['date'];
  $goods = $_POST['goods'];
  $price = $_POST['price'];
  $inspection = $_POST['date1'];
  $cancel = $_POST['cancel'];
  $detail = $_POST['item'];
  $edate = $_POST['ending'];
  $amt = $_POST['amt_rec'];
  $tnumber = $_POST['cnumber'];
  $sign =$_POST['sign'];
  $remark = $_POST['remarks1'];
  
  // Insert data into the database
  $sql = "INSERT INTO dead_stock (rec_date, number_of_goods, price_of_goods, inspection_date, cancel_order, items_details, ending_date, amt_rec, treassuary_chalan_no, officer_sig, remarks) VALUES ( '$date', '$goods', '$price', '$inspection', '$cancel', '$detail', '$edate', '$amt', '$tnumber', '$sign', '$remark')";
  

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
          <?php echo $translations['Dead Stock Register']; ?>
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
              <label for="date"><?php echo $translations['Date of Receiving']; ?></label><br>
              <input type="date" class="form-control" id="date" name="date" required><br>
            </div>
            <div>
              <label for="category"><?php echo $translations['Quantity of Goods']; ?></label>
              <input type="text" class="form-control" id="goods" name="goods" required><br>
            </div>
            <div class="form-group">
             <label for="quantity"><?php echo $translations['Price of goods']; ?></label><br>
              <input type="number" class="form-control" id="price" name="price" required><br>
            </div>
            <div class="form-group">
              <label for="date"><?php echo $translations['Inspection Date']; ?></label><br>
              <input type="date" class="form-control" id="date1" name="date1" required><br>
            </div>
            <div class="form-group">
              <label for="voucher"><?php echo $translations['Is order cancel?']; ?></label>
              <input type="text" class="form-control" id="cancel" name="cancel" required><br>
            </div>
            <div class="form-group">
              <label for="voucher"><?php echo $translations['Item Details']; ?></label>
              <input type="text" class="form-control" id="item" name="item" required><br>
            </div>
            <div class="form-group">
              <label for="date"><?php echo $translations['Ending Date']; ?></label><br>
              <input type="date" class="form-control" id="ending" name="ending" required><br>
            </div>
            <div class="form-group">
             <label for="quantity"><?php echo $translations['Ammount Received']; ?></label><br>
              <input type="number" class="form-control" id="amt_rec" name="amt_rec" required><br>
            </div>
            <div class="form-group">
             <label for="quantity"><?php echo $translations['Treassury Challan Number']; ?></label><br>
              <input type="number" class="form-control" id="cnumber" name="cnumber" required><br>
            </div>
            <div class="form-group">
              <label for="sign"><?php echo $translations['Officer Sign']; ?></label>
              <input type="text" class="form-control" id="sign" name="sign" required><br>
            </div>
            <div class="form-group">
              <label for="remark"><?php echo $translations['Remarks']; ?></label><br>
              <input type="text" class="form-control" id="remarks1" name="remarks1" required><br>
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