<?php
include('config.php');
include('session.php');
$id=$_GET['cources_id'];
$query_db = "DELETE FROM `tbl_cources` WHERE `cources_id`='$id'";
// echo $query_db;
$query=mysqli_query($con, $query_db);
if ($query)
{
    echo '<script>
    window.location="cources_view.php";
    </script>';
}
else {
    'server error';
}
?>