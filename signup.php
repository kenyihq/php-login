<?php
    require "database.php";

    $message = '';

    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $sql = "INSERT INTO user (email, password) VALUES (:email, :password)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $stmt->bindParam(':password', $password);

        if ($stmt->execute()) {
            $message = "Successfully created new user";
        } else {
            $message = "Error creating new user";
        }
    }
?>


<?php
    $page_title = "SignUp";
    #$h1_title = "Login";
    include("partials/header.php");
?>

<div class="container">

<?php if(!empty($message)): ?>
    <p><?= $message ?></p>
<?php endif; ?>

    <h1>SingUp</h1>
    <span>or <a href="login.php">Login</a></span>
    
    <form action="signup.php" method="POST">
        <input type="email" name="email" placeholder="Enter your email">
        <input type="password" name="password" placeholder="Enter your password">
        <input type="password" name="confirm_password" placeholder="Confirm your password">
        <input type="submit" value="Send">
    </form>
</div>
    
<?php
    include("partials/footer.php");
?>