<?php
session_start();
include 'db.php'; 

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){
        // 2. Data match wenawa nam userwa athulath karaganna
        $_SESSION['admin'] = "yes";
        header("Location: dashboard.php");
        exit();
    } else {
        // 3. Data match nathnam "Invalid Login" kiyala pennanna
        $error = "Invalid Login!";   
    }
}
?>

<html>
<head>
    <title>Login - BrightWay Academy</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="login-body">

<form method="post">
    <h2>Admin Login</h2>
    
    <?php if(isset($error)) echo "<p style='color:red; text-align:center;'>$error</p>"; ?>

    Username:
    <input type="text" name="username" required>
    
    Password:
    <input type="password" name="password" required>
    
    <input type="submit" name="login" value="Login">
</form>

<?php include 'footer.php'; ?>