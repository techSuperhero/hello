<?php

function UserTable($value) {
    require_once './config.php';

    $i=0;
    $query = "SELECT * FROM user where Role_id = $value";
    $result = mysqli_query($conn, $query);
    echo "<table>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>ID</th><th>Name</th><th>Email</th><th>ID</th><th>Name</th><th>Email</th><th>ID</th></tr>";
    
    while ($row = mysqli_fetch_assoc($result)) {
        $i++;
        echo "<tr>";
        echo "<td>".$i."</td>";
        echo "<td>".$row['address']."</td>";
        echo "<td>".$row['city']."</td>";
        echo "<td>".$row['country']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['firstname']."</td>";
        echo "<td>".$row['lastlogin']."</td>";
        echo "<td>".$row['lastname']."</td>";
        echo "<td>".$row['password']."</td>";
        echo "<td>".$row['phoneno']."</td>";
        echo "</tr>";
    }
    
    echo "</table>";
    mysqli_close($conn);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #f2f2f2;
    color: #333;
}
</style>

<body>
    
</body>
</html>