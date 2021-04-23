<?php
include('config.php');
include('session.php');
$id=$_GET['contact_id'];
$query_db = "DELETE FROM `tbl_contact_us` WHERE `contact_id`='$id'";
// echo $query_db;
$query=mysqli_query($con, $query_db);
if ($query)
{
    echo '<script>
    window.location="contact.php";
    </script>';
}
else {
    'server error';
}
?>