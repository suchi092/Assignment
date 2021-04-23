<?php
include('config.php');
include('session.php');
$id=$_GET['selected_id'];
$query_db = "DELETE FROM `tbl_selected` WHERE `selected_id`='$id'";
// echo $query_db;
$query=mysqli_query($con, $query_db);
if ($query)
{
    echo '<script>
    window.location="selectedstudent_view.php";
    </script>';
}
else {
    'server error';
}
?>