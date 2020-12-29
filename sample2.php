<?php
//set up static variables
$page_title = "sample page A";
$user_agent = getenv('HTTP_USER_AGENT');
include 'dbcon.php';
doDB();

//create and issue query
$sql = "INSERT INTO access_tracker (page_title,user_agent,date_accessed)
 VALUES ('$page_title', '$user_agent', now())";
$result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));

//close connection to MySQL
mysqli_close($mysqli);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Sample Page B</title>
</head>

<body>
    <h1>Sample Page B</h1>
    <p>SOME DATA</p>
</body>

</html>