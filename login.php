<?php
    $page_title = "Login";
    #$h1_title = "Login";
    include("header.php");
?>

<form action="login.php" method="POST">
    <input type="email" name="email" placeholder="Enter your email">
    <input type="password" name="password" placeholder="Enter your password">
    <input type="submit" value="Send">
</form>