<?php

include 'connection.php';

$id = $_GET['id'];

$deletequery = " delete from users where id=$id ";

if($query){
    ?>

    <script>
        alert("Deleted Successfully");
    </script>

    <?php
}else{
    ?>

    <script>
        alert("Not Deleted");
    </script>

    <?php

}

$query = mysqli_query($con,$deletequery);

header('location:user-database-table-2.php');

?>