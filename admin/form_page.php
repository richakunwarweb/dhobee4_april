<?php
session_start();

// Check if alert message is set
if (isset($_SESSION['alert_message'])) {
    // Display the alert message
    echo "<script>alert('".$_SESSION['alert_message']."');</script>";
    // Unset the session variable to clear the message
    unset($_SESSION['alert_message']);
}
?>

<!-- Your form HTML goes here -->
<form action="admin/insertdata.php" method="post" class="contact_form">
    <!-- Form fields -->
    <input type="submit" value="Submit" class="form-control2 form-control1" style="background-color: blueviolet;">
</form>
