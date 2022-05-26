<?php
    $page_title = "Login";
    #$h1_title = "Login";
    include("partials/header.php");
?>
<div class="container">
    <h1>Login</h1>
    <span>or <a href="signup.php">SignUp</a></span>
    
    <form action="login.php" method="POST">
        <input type="email" name="email" placeholder="Enter your email">
        <input type="password" name="password" placeholder="Enter your password">
        <input type="submit" value="Send">
    </form>
</div>
    
<?php
    include("partials/footer.php");
?>
