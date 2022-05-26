<?php
    session_start();
    require "database.php";

    if (isset($_SESSION['user_id'])) {
        $sql = "SELECT id, email, password FROM user WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $_SESSION['user_id']);
        $stmt->execute();

        $results = $stmt->fetch(PDO::FETCH_ASSOC);

        $user = null;

        if (count($results) > 0) {
            $user = $results;
        }

    }
?>

<?php
    $page_title = "Rumbos y Mundos";
    include("partials/header.php");
?>
<div class="container">

<?php if(!empty($user)): ?>

    <p>Welcome <?= $user['email'] ?></p>
    <a href="logout.php">Logout</a>

<?php else: ?>

    <h1>Please Login or SingUp</h1>
    <a href="login.php">LogIn</a>
    <a href="signup.php">SignUp</a>
        
<?php endif; ?>
</div>

<?php
    include("partials/footer.php");
?>