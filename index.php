<?php session_start(); ?>

 <h2>Welcome to Digital Art Store</h2>

<?php if(isset($_SESSION['user'])): ?>

p>Logged in as <?php echo $_SESSION['user']['email']; ?></p>

<a href="logout.php">Logout</a>

<?php else: ?>

<a href="login.php">Login</a>

<?php endif; ?>

<?php

define('WP_USE_THEMES', true);

require_DIR_ /wp-blog-header.php';
