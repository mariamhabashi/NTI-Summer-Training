<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile App</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class="navbar">
    <div class="nav-container">
        <div class="nav-brand">
            <h2><a href="home.php" class="nav-link">MyApp</a></h2>
        </div>
        <ul class="nav-menu">
            <li><a href="home.php" class="nav-link">Home</a></li>
            <?php if (isset($_SESSION['user'])): ?>
                <li><a href="profile.php" class="nav-link">Profile</a></li>
                <li><a href="logout.php" class="nav-link">Logout</a></li>
            <?php else: ?>
                <li><a href="signup.php" class="nav-link">Sign Up</a></li>
                <li><a href="login.php" class="nav-link">Login</a></li>
            <?php endif; ?>
        </ul>
    </div>
</header>
<main class="container">