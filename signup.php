<?php

    require "database.php";

?>


<?php
    $page_title = "SignUp";
    #$h1_title = "Login";
    include("partials/header.php");
?>
<div class="container">
    <h1>SingUp</h1>
    <span>or <a href="login.php">Login</a></span>
    
    <form action="login.php" method="POST">
        <input type="email" name="email" placeholder="Enter your email">
        <input type="password" name="password" placeholder="Enter your password">
        <input type="password" name="confirm_password" placeholder="Confirm your password">
        <input type="submit" value="Send">
    </form>
</div>
    
<?php
    include("partials/footer.php");
?>