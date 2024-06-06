<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    
    
    $token = bin2hex(random_bytes(16)); 
    
    
    $reset_link = "https://yourwebsite.com/reset.php?token=$token";
    $subject = "Password Reset";
    $message = "Click the following link to reset your password: $reset_link";
    mail($email, $subject, $message);
    
    echo "Password reset instructions sent to your email.";
}
?>