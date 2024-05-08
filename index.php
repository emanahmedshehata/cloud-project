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

<!-- Include the HTML file -->
<?php include 'index.html';?>

