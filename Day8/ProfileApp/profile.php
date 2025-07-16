<?php
session_start();
include("header.php");
include("function.php");

// if (!isset($_SESSION['user'])) { header("Location: login.php"); exit(); }

$currentUser = $_SESSION['user'];
?>

<div class="profile-container">
    <?php if (isset($_GET['status']) && $_GET['status'] == 'success'): ?>
        <div class="alert alert-success">
            Profile updated successfully!
        </div>
    <?php endif; ?>

    <div class="profile-header">
        <div class="profile-avatar">
            <div class="avatar-circle">
                <img src="<?= "pexels-bhuyan-30802272.jpg" ?>" alt="User Avatar">
            </div>
        </div>
        <div class="profile-info">
            <h1><?= htmlspecialchars($currentUser['username']); ?></h1>
            <p class="profile-email"><?= htmlspecialchars($currentUser['email']); ?></p>
            <span class="profile-badge">Active Member</span>
        </div>
    </div>

    <div class="profile-content">
        <div class="profile-card">
            <div class="card-header">
                <h3>Account Information</h3>
            </div>
            <div class="card-body">
                <div class="info-grid">
                    <div class="info-item">
                        <label>Username</label>
                        <span><?= htmlspecialchars($currentUser['username']); ?></span>
                    </div>
                    <div class="info-item">
                        <label>Email Address</label>
                        <span><?= htmlspecialchars($currentUser['email']); ?></span>
                    </div>
                    <div class="info-item">
                        <label>Member Since</label>
                        <span><?= date('F j, Y', strtotime($currentUser['date'])); ?></span>
                    </div>
                    <div class="info-item">
                        <label>Account Status</label>
                        <span class="status-active">Active</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="profile-actions">
            <a href="edit-profile.php" class="btn btn-primary">Edit Profile</a>
            <a href="home.php" class="btn btn-secondary">Back to Home</a>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>