<?php
include('config.php');
include('session.php');
$id=$_GET['batche_id'];
$query_db = "DELETE FROM `tbl_upcoming_batches` WHERE `batche_id`='$id'";
// echo $query_db;
$query=mysqli_query($con, $query_db);
if ($query)
{
    echo '<script>
    window.location="upcomingbatch_view.php";
    </script>';
}
else {
    'server error';
}
?>