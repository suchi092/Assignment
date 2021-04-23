<?php
include('config.php');
include('session.php');
$id=$_GET['story_id'];
// $query_db = "DELETE FROM `tbl_story` WHERE `story_id`='$id'";
$query_db = "DELETE FROM `tbl_story` WHERE `story_id` = '".$id."'";
// echo $query_db;
$query=mysqli_query($con, $query_db);
if ($query)
{
    echo '<script>
    window.location="successstory_view.php";
    </script>';
}
else {
    'server error';
}
?>