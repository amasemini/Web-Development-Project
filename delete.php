<?php
include 'db.php';
include 'header.php';

if(isset($_POST['delete'])){
    $nic = $_POST['nic'];

    $sql = "DELETE FROM students WHERE nic='$nic'";
    if($conn->query($sql)){
        echo "<p style='color: green; text-align: center; font-weight: bold; font-size: 20px;'>Deleted Successfully!</p>";
    } else {
        echo "<p style='color: red; text-align: center; font-weight: bold;'>Error!</p>";
    }
}
?>

<form method="post">
NIC: <input type="text" name="nic" maxlength="12" placeholder="12 Digits" required><br>
<input type="submit" name="delete" value="Delete">
</form>
