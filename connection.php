<?php

$server = 'localhost';
$username = "root";
$password = "";
$db = 'melody_music_database';

$con = mysqli_connect($server,$username,$password,$db);

if($con){
    //echo "Connection Successful";
    ?>

    <script>
        alert('Connection Successful');
    </script>
    <?php
}else{
    //echo "NO connection";
    die("NO Connection" .mysqli_connect_error());
}

?>