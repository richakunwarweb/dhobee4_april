<!DOCTYPE html> 
<html>
   <head>
      <style> table, th, td { border: 1px solid black; border-collapse: collapse; padding: 5px; } </style>

    </head>
   <body>
      <h2>Contact Form Data</h2>
      <table>
         <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Date</th>
            <th>Time</th>
            <th>Service</th>
         </tr>
         

        <?php
        // Database connection details
        // Database connection details
$servername = "goodvibe@localhost";
$username = "root";
$password = "dhobee123";
$dbname = "goodvibe_dhobeedb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
        // Select all data from the form_data table
        $sql = "SELECT * FROM dhobee_contact_form";
        $result = $conn->query($sql);
if (!$result) {
    echo "Error: " . $conn->error;
}

        if ($result && $result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["phone"] . "</td><td>" . $row["date"] . "</td><td>" . $row["time"] . "</td><td>" . $row["service"] . "</td></tr>";
            }
        } else {
            echo "0 results";
        }

        // Close connection
        $conn->close();
        ?>
      </table>
   </body>
</html>
