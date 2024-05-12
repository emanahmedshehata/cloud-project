<?php
$connect = mysqli_connect(
    'db', // service name
    'php_docker', // username
    'docker', // password
    'cloud_project' // db table
);

$table_name = "student";
$query = "SELECT * FROM $table_name";

$response = mysqli_query($connect, $query);

if ($response->num_rows > 0) {
    $students = array();
    while ($row = $response->fetch_assoc()) {
        $students[] = $row;
    }
} else {
    $students = array();
}

mysqli_close($connect);
?>

<?php
$connect = mysqli_connect(
    'db', // service name
    'php_docker', // username
    'docker', // password
    'cloud_project' // db table
);

$table_name = "student";
$query = "SELECT * FROM $table_name";

$response = mysqli_query($connect, $query);

if ($response->num_rows > 0) {
    $students = array();
    while ($row = $response->fetch_assoc()) {
        $students[] = $row;
    }
} else {
    $students = array();
}

mysqli_close($connect);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Database</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Student Database</h1>
    <table border="1">
        <tr>
            <th>Student ID</th>
            <th>Student Name</th>
            <th>CGPA</th>
            <th>Age</th>
        </tr>
        <?php foreach ($students as $student) {?>
        <tr>
            <td><?= $student["student_id"]?></td>
            <td><?= $student["student_name"]?></td>
            <td><?= $student["CGPA"]?></td>
            <td><?= $student["age"]?></td> 
        </tr>
        <?php }?>
    </table>
</body>
</html>
