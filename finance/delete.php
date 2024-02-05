<?php
require_once "conn.php";

if (isset($_GET['Tid'])) {
    $Tid = $_GET['Tid'];
    $Tid = mysqli_real_escape_string($conn, $Tid);
    $sql_teamdetails = "DELETE FROM teamdetails WHERE team_name = '$Tid'";
    $sql_bills = "DELETE FROM bills WHERE team_name = '$Tid'";
    if ($conn->query($sql_teamdetails) === TRUE && $conn->query($sql_bills) === TRUE) {
        header("Location: startup.php");
    }
    else 
    {
        echo "Error: " . $conn->error;
    }
}
?>
