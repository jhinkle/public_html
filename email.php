<?php

if (isset($_POST['inputEmail'])){
    $from = $_POST['inputEmail'];
}

if (isset($_POST['inputMessage'])){
    $message = $_POST['inputMessage'];
}
$to = "mozziter@gmail.com";
$subject = "Form Submission! JH";

$headers = "From: " . $from;
mail($to,$subject,$message,$headers);

/* Redirect to a different page in the current directory that was requested */
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'success.php';
header("Location: http://$host$uri/$extra");
exit;
?>
    

