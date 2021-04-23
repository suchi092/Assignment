<?php
include('config.php');
include('session.php');
$id=$_GET['query_id'];
$query_db = "DELETE FROM `tbl_query` WHERE `query_id`='$id'";
// echo $query_db;
$query=mysqli_query($con, $query_db);
if ($query)
{
    echo '<script>
    window.location="query.php";
    </script>';
}
else {
    'server error';
}
?>