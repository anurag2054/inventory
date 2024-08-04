<?php
require 'vendor/autoload.php';

use Google\Cloud\Translate\V2\TranslateClient;

// Your Google Cloud API key
$apiKey = 'YOUR_API_KEY';

// Create a new TranslateClient instance
$translate = new TranslateClient([
    'key' => $apiKey
]);

// Function to translate text
function translateText($text, $targetLanguage, $translate) {
    $result = $translate->translate($text, [
        'target' => $targetLanguage
    ]);

    return $result['text'];
}

// Example text to translate
$englishText = "Hello, welcome to my website!";
$hindiText = translateText($englishText, 'hi', $translate);

echo "Original text: " . $englishText . "<br>";
echo "Translated text: " . $hindiText;
?>
