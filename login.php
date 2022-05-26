<?php
    session_start();

    require "database.php";

    if (!empty($_POST['email']) && !empty($_POST['password'])){
        $sql = "SELECT id, email, password FROM user WHERE email = :email && status = 1";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $_POST['email']);
        $stmt->execute();

        $results = $stmt->fetch(PDO::FETCH_ASSOC);

        $message = '';

        if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
            $_SESSION['user_id'] = $results['id'];
            header("Location: index.php");
        } else {
            $message = "Invalid credentials";
        }
    }
?>

<?php
    $page_title = "Login";
    #$h1_title = "Login";
    include("partials/header.php");
?>
<div class="container">
    <?php if(!empty($message)): ?>
        <p><?= $message ?></p>
    <?php endif; ?>

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
