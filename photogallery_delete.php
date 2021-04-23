<?php
include('config.php');
include('session.php');
$id=$_GET['gallery_id'];
$query_db = "DELETE FROM `tbl_gallery` WHERE `gallery_id`='$id'";
// echo $query_db;
$query=mysqli_query($con, $query_db);
if ($query)
{
    echo '<script>
    window.location="photogallery_view.php";
    </script>';
}
else {
    'server error';
}
?>