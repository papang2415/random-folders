<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        table {

            border-style: solid;

            border-width: 2px;

            border-color: pink;

        }
    </style>

    </head>

    <body bgcolor="#EEFDEF">

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "papang";
        
     $conn = new mysqli($servername, $username, $password, $dbname);
     // Check connection
     if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
     }
       // mysql_select_db("papang", $con);
    //$result = mysql_query("SELECT * FROM users");
        echo "<table border='1'>
        <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Status</th>
        </tr>";

        //while($row = mysql_fetch_array($result)) {
          echo "<tr>";
          echo "<td>" . $row['UserID'] . "</td>";
          echo "<td>" . $row['Username'] . "</td>";
          echo "<td>" . $row['Status'] . "</td>";
          echo "</tr>";
        }
        echo "</table>";
        mysql_close($con);
        ?>
    </body>

</html>