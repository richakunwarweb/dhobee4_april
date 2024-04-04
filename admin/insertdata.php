
<?php

// Database connection details
$servername = "localhost:3306";
$username = "goodvibe";
$password = "";
$dbname = "goodvibe_dhobeedb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all form fields are set
    if (isset($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['date'], $_POST['time'], $_POST['service'])) {
        // Prepare the form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $service = $_POST['service'];
        
        // Prepare the query
        $sql = "INSERT INTO dhobee_contact_form (name, email, phone, date, time, service) VALUES ('$name', '$email', '$phone', '$date', '$time', '$service')";

        if ($conn->query($sql) === TRUE) {
            echo '<script>
            alert("Alstublieft alle velden invullen");<script>';
        } 
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
     else 
     {
        echo "Error: Required form fields are missing";
    }
} 
else {
    echo "Error: Form not submitted";
}

$conn->close();
?>
