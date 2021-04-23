<?php
// database connectivity
include('config.php');
include('session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fetch</title>
</head>
<body>

    <a href="index.php">Add new record</a>
    <table style="border:1px solid black;">
 
  
    <tr>
                                                        <td>id</td>
                                                        <td>title</td>
                                                        <td>desc</td>
                                                        <td>date</td>
                                                        <td>time</td>


                                                 
       
    </tr>
     <?php
    
     $i=1;
        $query = mysqli_query($con,"SELECT * FROM `tbl_upcoming_batches`");
        while($row = mysqli_fetch_array($query)){
            echo ' <tr>
            <td>'.$i.'</td>
            <td>'.$row['title'].'</td>
            <td>'.$row['desc'].'</td>
            <td>'.$row['date'].'</td>
            <td>'.$row['time'].'</td>
           <td> <a href="delete.php?id='.$row['id'].'">Delete</a></td>
           </tr>
';
            $i++;
        }
        ?>
    
    </table>
</body>

</html>