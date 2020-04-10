<?php require 'server.php' ?>
<html>
<head>
    <title>
        Sourav
    </title>
</head>
<style>
    body, html {
        height: 100%;
        width: 100%;
    }

    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
<body>
<table>
    <tr>
        <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
    </tr>
    <?php
    $result = $conn->query("SELECT * FROM users ORDER BY first_name DESC");

    foreach ($result as $row) {
        echo "<tr>
        <td>$row[id]</td>
        <td>$row[first_name]</td>
        <td>$row[last_name]</td>
        <td>$row[email]</td>
    </tr>";
    }

    ?>
</table>

</table>
</body>
</html>
