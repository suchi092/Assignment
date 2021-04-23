<?php
 
if($_SESSION['status'] == 'Active'){

}else{
    echo '<script>window.location="index.php"</script>';
}
?>