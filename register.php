<?php
include 'db.php';
include 'header.php';

if(isset($_POST['save'])){
    $nic = $_POST['nic'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $sql = "INSERT INTO students VALUES('$nic', '$name', '$gender', '$address', '$contact', '$email', '$course')";
    if($conn->query($sql)){
        echo "<p style='color: green; text-align: center; font-weight: bold; font-size: 20px'>Student Registered!</p>";     
    } else {
        echo "<p style='color: red; text-align: center; font-weight: bold; font-size: 20px'>Error!</p>";
    }
}
?>

<form method="post">
NIC: <input type="text" name="nic" maxlength="12" placeholder="12 Digits Only" required><br>
Name: <input type="text" name="name" placeholder="T.G.A Semini" required><br>
Gender:
<div class="gender-selection">
    <input type="radio" name="gender" value="Male" id="male" required>
    <label for="male">Male</label>
    
    <input type="radio" name="gender" value="Female" id="female">
    <label for="female">Female</label>
</div><br>
Address: <input type="text" name="address" placeholder="Colombo" required><br>
Contact: <input type="text" name="contact" maxlength="10" placeholder="07xxxxxxxx" required><br>
Email: <input type="email" name="email" placeholder="example@mail.com" required><br>
Course:
<select name="course">
<option>Information Communication Technology</option>
<option>Biotechnology</option>
<option>Robotics</option>
<option>Graphic Design</option>
</select><br>

<input type="submit" name="save" value="Register">
</form>