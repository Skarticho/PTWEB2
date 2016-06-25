<?php
$TO = "blanche.antonin@gmail.com";

$h = "From: " . $TO;

$message = "";

while (list($key, $val) = each($HTTP_POST_VARS)) {
$message .= "$key : $val\n";
}

mail($TO, $subject, $message, $h);

Header("Location: https://tp.iha.unistra.fr/~blanche/Test_formulaire/index.html");

?>