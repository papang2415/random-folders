<?php
    // $id  = $_GET["thisUser"];
    //$passW  = $_GET["thisPass"];
    

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sd204";
    ////specifying the credentials for connection
    //$servername = "192.168.254.100";
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

   $sql = "SELECT * FROM mogamitay";
   $result = $conn->query($sql);

   
   if ($result->num_rows > 0) {

    echo '<table>';
            echo '<tr style  = "width:50%">';

                echo "<th>Id</th>";
                echo "<th>Username</th>";
                echo "<th>Password</th>";

            echo "</tr>";
        
        while($row = $result->fetch_assoc()) {
                
            echo '<tr  style = "width:50%" "border:2px>';
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
            echo "</tr>";

        }

    echo "</table>";
    
}

$conn->close();

?>