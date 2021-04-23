<?php
include('config.php');
include('session.php');
$id=$_GET['test_series_id'];
$query_db = "DELETE FROM `tbl_test_series` WHERE `test_series_id`='$id'";
// echo $query_db;
$query=mysqli_query($con, $query_db);
if ($query)
{
    echo '<script>
    window.location="testseries_view.php";
    </script>';
}
else {
    'server error';
}
?>