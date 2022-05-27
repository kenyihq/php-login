<?php
    // local
    // require "database.php";
    // cloud
    require "database_cloud.php";

    $message = '';

    if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_confirmation'])) {

        $sql_validate = "SELECT email FROM user WHERE email = :email";
        $stmt = $conn->prepare($sql_validate);
        $stmt->bindParam(':email', $_POST['email']);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $message = "Email already exists";
        } else {

            if ($_POST['password'] == $_POST['password_confirmation']) {
                
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
    
            } else {
                $message = "Passwords don't match";
            }
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
        <input type="email" name="email" placeholder="Enter your email" required>
        <input type="password" name="password" placeholder="Enter your password" required>
        <input type="password" name="password_confirmation" placeholder="Confirm your password" required>
        <input type="submit" value="Send">
    </form>
</div>
    
<?php
    include("partials/footer.php");
?>