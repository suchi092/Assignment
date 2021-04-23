<?php
 session_start();
 unset($_SESSION['status']  );
session_destroy();
echo '<script>window.location="index.php"</script>';
?>