<?php
include 'db.php';
include 'header.php';

if(isset($_POST['update'])){
    $nic = $_POST['nic'];
    $name = $_POST['name'];

    $sql = "UPDATE students SET name='$name' WHERE nic='$nic'";
    if($conn->query($sql)){
        echo "<p style='color: green; text-align: center; font-weight: bold; font-size: 20px;'>Update successfully!</p>";
    } else {
        echo "<p style='color: red; text-align: center; font-weight: bold;'>Error!</p>";
    }
}
?>

<form method="post">
NIC: <input type="text" name="nic" maxlength="12" placeholder="12 Digits" required><br>
Name: <input type="text" name="name"><br>
Address: <input type="text" name="address"><br>
Course: 
<select name="course">
<option>Information Communication Technology</option>
<option>Biotechnology</option>
<option>Robotics</option>
<option>Graphic Design</option>
</select><br>
<input type="submit" name="update" value="Update">
</form>