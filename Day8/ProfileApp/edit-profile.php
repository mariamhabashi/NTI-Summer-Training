<?php
session_start();
include("header.php");
include("function.php");

// if (!isset($_SESSION['user'])) { header("Location: login.php"); exit(); }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_SESSION['user']['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "UPDATE user SET username = '$username', email = '$email'";
    if (!empty($password)) {
        $query .= ", password = '$password'";
    }
    $query .= " WHERE id = '$id'";
    
    $result = mysqli_query($con, $query);

    if ($result) {
    // تحديث الجلسة بالبيانات الجديدة مباشرة
    $_SESSION['user']['username'] = $username;
    $_SESSION['user']['email'] = $email;
    
    header("Location: profile.php?status=success");
    exit();
    } else {
        $message = "Error updating profile.";
    }
}
?>

<div class="auth-container">
    <div class="auth-card">
        <h1 class="auth-title">Edit Profile</h1>

        <?php if (!empty($message)): ?>
            <div class="alert alert-danger"><?= $message ?></div>
        <?php endif; ?>

        <form method="post" class="auth-form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" value="<?= htmlspecialchars($_SESSION['user']['username']); ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" name="email" id="email" value="<?= htmlspecialchars($_SESSION['user']['email']); ?>" required>
            </div>
            <div class="form-group">
                <label for="password">New Password (leave blank to keep current):</label>
                <input type="password" name="password" id="password">
            </div>
            <button type="submit" class="btn btn-primary">Save Changes</button>
            <a href="profile.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>

<?php include("footer.php"); ?>