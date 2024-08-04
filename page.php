<?php
$page = $_GET['page'] ?? 'dashboard';
switch ($page) {
    case 'receiving_form.php':
        // Include about page content
        break;
    case 'dispatch.php':
        // Include contact page content
        break;
    default:
        // Include default page content
        break;
}
?>
