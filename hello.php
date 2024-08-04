<?php
// Set the default language to English
$lang = 'en';

// Check if the 'lang' parameter is set in the URL and if it's either 'en' or 'hi'
if (isset($_GET['lang']) && in_array($_GET['lang'], ['en', 'hi'])) {
    $lang = $_GET['lang'];
}

// Load the appropriate language file
$translations = require "$lang.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $translations['welcome']; ?></title>
</head>
<body>
    <nav>
        <!-- Language selection links -->
        <a href="?lang=en">Translate to English</a>
        <a href="?lang=hi">Translate to Hindi</a>
    </nav>
    <h1><?php echo $translations['E Nazarat']; ?></h1>
    <p><?php echo $translations['Receiving']; ?></p>
</body>
</html>
