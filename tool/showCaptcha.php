<?php
session_start();

// CAPTCHA settings
$captcha_length = 4; // Number of characters in the CAPTCHA
$font_size = 24;    // Font size of the characters
$image_width = 150; // Width of the CAPTCHA image
$image_height = 50; // Height of the CAPTCHA image

// Generate a random CAPTCHA string
$captcha_string = generateRandomString($captcha_length);

// Store the CAPTCHA string in the session for validation
$_SESSION['captcha'] = $captcha_string;

// Create a blank CAPTCHA image
$image = imagecreatetruecolor($image_width, $image_height);

// Set background and text colors
$background_color = imagecolorallocate($image, 255, 255, 255); // White background
$text_color = imagecolorallocate($image, 0, 0, 0);             // Black text

// Fill the image with the background color
imagefilledrectangle($image, 0, 0, $image_width, $image_height, $background_color);

// Generate the CAPTCHA text on the image
$font_path = 'fonts/times_new_yorker.ttf'; // Replace with the path to your TTF font file
for ($i = 0; $i < $captcha_length; $i++) {
    $x = ($image_width - 80) / $captcha_length * $i + 50;
    $y = $image_height - 20;
    imagettftext($image, $font_size, rand(-10, 10), $x, $y, $text_color, $font_path, $captcha_string[$i]);
}

// Output the CAPTCHA image to the browser
header('Content-type: image/png');
imagepng($image);

// Clean up resources
imagedestroy($image);

// Function to generate a random string of a specified length
function generateRandomString($length) {
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}
?>