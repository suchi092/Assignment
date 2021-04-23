<?php
include('config.php');
include('session.php');
$id=$_GET['news_id'];
$query_db = "DELETE FROM `tbl_news` WHERE `news_id`='$id'";
// echo $query_db;
$query=mysqli_query($con, $query_db);
if ($query)
{
    echo '<script>
    window.location="news_view.php";
    </script>';
}
else {
    'server error';
}
?>