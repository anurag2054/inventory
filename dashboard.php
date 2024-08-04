<?php

session_start();
include './dbConn.php';



// Check if user is logged in, if not, redirect them to the login page
if (!isset($_SESSION['username'])) {
  header("Location: index.php");
  exit;
}



$sql = "SELECT * from items,item_categories WHERE items.category = item_categories.id LIMIT 15";
$result = $conn->query($sql);
$table_data = mysqli_fetch_all($result, MYSQLI_ASSOC);

// print_r($table_data);

include("./partials/_header.php");

include("./partials/_navbar.php");

?>



  

  <div class="container">
  
    
      <div class="col-12">
      <?php echo $translations['Stock Available']; ?>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col"><?php echo $translations['Item']; ?></th>
              <th scope="col"><?php echo $translations['Category']; ?></th>
              <th scope="col"><?php echo $translations['Quantity']; ?></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($table_data as $new_row) : ?>

              <tr>
                <th scope="row"></th>
                <td><?= $translations[$new_row["name"]] ?></td>
                <td><?= $translations[$new_row["detail"]] ?></td>
                <td><?= $new_row ["quantity"] ?></td>
              </tr>

            <?php endforeach; ?>

          </tbody>
        </table>
      </div>

      

    </div>
  </div>
 

<!-- Use any element to open the sidenav -->


<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
<div id="main">
  ...
</div>


<?php
include("./partials/_footer.php");