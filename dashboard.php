<?php
session_start();
include 'header.php';
if (!isset($_SESSION['admin'])) {
    header("Location: index.php"); 
    exit();
} 
?>
<nav>
    <a href="index.php" class="logout">Logout</a> 
</nav>    

<h2 style="text-align: center; margin-top: 50px;">WELCOME TO BRIGHTWAY ACADEMY!</h2>

<div class="dashboard-links" style="text-align: center;">
    <a href="register.php">Register Student</a>
    <a href="search.php">Search Student</a>
    <a href="update.php">Update Student</a>
    <a href="delete.php">Delete Student</a>
</div>

<?php include 'footer.php'; ?>
