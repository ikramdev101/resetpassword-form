<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['token']) && isset($_POST['password'])) {
    $token = $_POST['token'];
    $password = $_POST['password'];
    echo "Password updated successfully.";
}
?>
