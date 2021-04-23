<?php
include('config.php');
include('session.php');
$id=$_GET['feedback_id'];
$query_db = "DELETE FROM `tbl_feedback` WHERE `feedback_id`='$id'";
// echo $query_db;
$query=mysqli_query($con, $query_db);
if ($query)
{
    echo '<script>
    window.location="feedback.php";
    </script>';
}
else {
    'server error';
}
?>