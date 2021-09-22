
<html>

             <head>

                   <title> Standard College </title>
                   <link rel="stylesheet" type="text/css" href="Mainpage.css"><br>

             
             
             
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
    border-bottom: 1px solid #1a1a1a;
    width: 5%;
    height: 5%;
}

tr:nth-child(even){background-color:none}
tr:hover {background-color:#202020;}

th {
  background-color:none;
  color:#00bcd4;
}
</style>
</p>
</head>
<body bgcolor="#101010">
<h2 style="color:#00bcd4;text-align:center;font-family:Gotham;background-color:none;"><hr color="#202020" size="1">
       STANDARD COLLEGE STUDENT-DATA<hr color="#202020" size="1"></h2><br><br><br>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "website";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT SID, Name, City, Mobile, DOB, Email, Fees FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
        echo "<table><tr><th>SID</th><th>NAME</th><th>CITY</th><th>MOBILE</th><th>DOB</th><th>EMAIL</th><th>FEES</th></tr>";

    // output data of each row
    while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["SID"]. "</td><td> ".$row["Name"]."</td><td>".$row["City"]."</td><td>"
         . $row["Mobile"] ."</td><td>" .$row["DOB"] ."</td><td>". $row["Email"] ."</td><td>". $row["Fees"] ."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();

?>


</body>
</html>