<?php
session_start();
include './dbConn.php';

//include("./partials/_header.php");

//include("./partials/_navbar.php");


// Check if user is logged in, if not, redirect them to the login page
//if (!isset($_SESSION['username'])) {
//  header("Location: index.php");
// exit;
//}

$sql = "SELECT * from items,item_categories WHERE items.category = item_categories.id LIMIT 15";
$result = $conn->query($sql);
//$table_data = mysqli_fetch_all($result, MYSQLI_ASSOC);

if($result->num_rows >0 ) {
  //Initialise PDF
  require_once("library/tcpdf.php");

  // Create a new PDF instance
  $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
  $pdf->SetCreator(PDF_CREATOR);
  $pdf->SetAuthor('Nazarat Farrukhabad');
  $pdf->SetTitle('Report');
  $pdf->SetSubject('Items Available');
  $pdf->SetKeywords('TCPDF, PDF, database, data, PHP');

  // Add a page
  $pdf->AddPage();

  //$pdf->WriteHTMLCell(190,10,'','','<h1> Nazarat Availability of Items</h1>',0,1);

  $pdf->setPrintHeader(false);
  $pdf->SetPrintFooter(false);



  // Set font
  $pdf->SetFont('helvetica', '', 12);
  $pdf->Cell(190, 10, 'Nazarat Report of Availibility of Items' , 0, 1, 'C');
  $pdf->Cell(30, 10, 'ID' , 1, 0, 'C');
  $pdf->Cell(70, 10, 'Name' , 1, 0, 'C');
  $pdf->Cell(40, 10, 'Date', 1, 0, 'C');
  $pdf->Cell(40,10, 'Category',1,1, 'C');

  // Output data from each row
  while ($row = $result->fetch_assoc()) {
      $pdf->Cell(30, 10, '' . $row['id'], 1, 0, 'C');
      $pdf->Cell(70, 10, '' . $row['name'], 1, 0, 'C');
      $pdf->Cell(40, 10, '' . $row['date'], 1, 0, 'C');
      $pdf->Cell(40,10, ''. $row['category'],1,1, 'C');
  }

  // Close and output PDF document
  $pdf->Output('database_data.pdf', 'I'); // I: send the file inline to the browser
} else {
  echo "No records found";
}

// Close connection
$mysqli->close();





// print_r($table_data);

//include("./partials/_header.php");

//include("./partials/_navbar.php");
// including library
include ('library/tcpdf.php');


//making new pdf object
$pdf = new TCPDF('P', 'mm', 'Legal');


//$pdf->setPrinterHeader(false);
//$pdf->setPrinterFooter(false);

// Adding page
$pdf->AddPage();

// adding content
//$pdf->Cell(190,10,'This is New PDF',0,1,'C');

//using HTML
//$pdf->WriteHTMLCell(190,10,'','','<h1> This is HTML Cell</h1>',1,1);

//cell after html cell
//$pdf->cell(190,10,'This is new Cell',1,1);

// Adding Page
//$pdf->AddPage();

// making output

//$pdf->output();

?>