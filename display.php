<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap 4 Bordered Table</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style type="text/css">
.bs-example{
margin: 20px;
}
</style>
<script type="text/javascript">
$(document).ready(function(){
$('[data-toggle="tooltip"]').tooltip();   
});
</script>
</head>
<body>
<div class="bs-example">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="page-header clearfix">
<h2 class="pull-left">Contact List</h2>
</div>
<?php
include_once 'main.php';
$result = mysqli_query($conn,"SELECT * FROM myentries");
?>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table class='table table-bordered table-striped'>
<tr>
<td>Sno</td>
<td>First Name</td>
<td>Last Name</td>
<td>Email id</td>
<td>Mobile</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row["Sno"]; ?></td>
<td><?php echo $row["FirstName"]; ?></td>
<td><?php echo $row["LastName"]; ?></td>
<td><?php echo $row["Email"]; ?></td>
<td><?php echo $row["Phone"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
<?php
}
else{
echo "No result found";
}
?>
</div>
</div>        
</div>
</div>
<button onclick="window.location.href='index.html';" style="width: 150px;
        padding: 10px;
        margin-left: 684px;
        background: #054713;
        color: #fff;
        border: solid 1px #054713;
        cursor: pointer;
        transition:  all .38s ease-in-out;">New Entry</button >
</body>
</html>