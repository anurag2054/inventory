<?php
// functions.php
function translate($text, $language) {
    $translations = include($language . '.php');
    
    return $translations[$text] ?? $text; // Return translated text if exists, else original text
}
?>