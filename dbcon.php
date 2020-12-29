 <?php
    function doDB()
    {
        global $mysqli;
        $mysqli = mysqli_connect("localhost", "root", "") or die("DB Server is down");
        mysqli_select_db($mysqli, "logging") or die("DB not available");
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
    }
    ?>