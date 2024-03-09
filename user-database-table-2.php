<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User report</title>

    <?php include 'link.php'; ?>

<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
h1{
    font-size: 48px;
    color: #000;
    text-align: center;
    margin-top: 20px;
    margin-bottom: 20px;
}
th {
background-color: #588c7e;
color: white;
}
td
tr:nth-child(even) {background-color: #f2f2f2}
.fa-edit{
    color: #63c76a;
}
.fa-trash{
    color: #ff0000;
}
.email-style{
    font-size: 20px;
    color:grey;
    display: inline-block;
    background: #f2f2f2;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    line-height: 30px;
    padding: 0 14px;
}
</style>

</head>
<body> 
<div class="main-div">
    <h1>List of users of Melody Music</h1>
    <div class="center-div">
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>username</th>
                        <th>password</th>
                        <th>email</th>
                        <th colspan="2" >operation</th>
                    </tr> 
                </thead>
                <?php
                    include 'connection.php';
                    $selectquery = " select * from users ";
                    $query = mysqli_query($con,$selectquery);
                    $nums = mysqli_num_rows($query);
                    while($res = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php echo $res['id']; ?> </td>
                    <td><?php echo $res['username']; ?> </td>
                    <td><?php echo $res['password']; ?> </td>
                    <td> <span class="email-style" > <?php echo $res['email']; ?></span></td>
                    <td> <a href="updates.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="Update"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
                    <td><a href="delete.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
</body>
</html>