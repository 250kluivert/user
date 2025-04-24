<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $feedback = htmlspecialchars($_POST['feedback']);

    // Save feedback to a file (feedback.txt)
    $file = 'feedback.txt';
    $current = file_get_contents($file);
    $current .= "$name: $feedback\n";
    file_put_contents($file, $current);

    // Redirect back to the main page
    header("Location: index.html");
    exit();
}
?>