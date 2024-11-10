<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, email, phone, course FROM student_details";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <style>
        
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        .action-buttons {
            display: flex;
            gap: 5px;
        }
        .btn {
            padding: 5px 10px;
            color: white;
            border: none;
            cursor: pointer;
        }
        .btn-view { background-color: #00aaff; }
        .btn-edit { background-color: #28a745; }
        .btn-delete { background-color: #dc3545; }
        .add-button {
            margin-bottom: 10px;
            padding: 8px 15px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

<h2>Student Details</h2>

<a href="index.html"><button class="add-button">Add Students</button></a>
<table>
    <tr>
        <th>ID</th>
        <th>Student Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Course</th>
        <th>Action</th>
    </tr>

    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['phone']}</td>
                    <td>{$row['course']}</td>
                    <td class='action-buttons'>
                        <button class='btn btn-view'>View</button>
                        <button class='btn btn-edit'>Edit</button>
                        <button class='btn btn-delete'>Delete</button>
                    </td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='6'>No data available</td></tr>";
    }
    $conn->close();
    ?>

</table>

</body>
</html>