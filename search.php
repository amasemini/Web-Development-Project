<?php 
include 'header.php';
include 'db.php'; 
?>

<div class="search-container">
    <form method="post" class="search-form">
        <h3>Search Student</h3>
        Enter NIC: 
        <input type="text" name="nic" maxlength="12" placeholder="12 Digits" required><br>
        <input type="submit" name="search" value="Search">
    </form>

    <?php
    
    if(isset($_POST['search'])) {
        $nic = $_POST['nic'];
        $sql = "SELECT * FROM students WHERE nic = '$nic'";
        $res = mysqli_query($conn, $sql);

        if($row = mysqli_fetch_assoc($res)){        
            echo "
            <div class='result-card'>
            <img src='images/student.png' class='student-icon-img' alt='Student Icon'>
        
                <h3>Student Found</h3>

                <div class='info-item'>
                    <span class='label'>Name:</span>
                    <span class='value'>" . $row['name'] . "</span>
                </div>
        
                <div class='info-item'>
                    <span class='label'>NIC:</span>
                    <span class='value'>" . $row['nic'] . "</span>
                </div>

                <div class='info-item'>
                    <span class='label'>Course:</span>
                    <span class='value-highlight'>" . $row['course'] . "</span>
                </div>

                <div class='info-item'>
                    <span class='label'>Contact:</span>
                    <span class='value'>" . $row['contact'] . "</span>
                </div>
            </div>";
        } else {
            echo "<p style='color:red; text-align:center; margin-top:20px; border: 1px solid #f5c6cb; border-radius: 8px; background-color: #f8d7da; font-weight: bold;'>No Student Found with this NIC!</p>";
        }   
    }
    ?>  
</div>

<?php include 'footer.php'; ?>        