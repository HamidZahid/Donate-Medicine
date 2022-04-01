<!-- this code will simply execute query to delete row -->

<?php
include('dbcon.php');

// code...

// check that get value is of integer type
$id = intval($_GET['id']);


$sql = "Delete from donor where id = $id";
if ($connection->query($sql) === TRUE) {
    echo "Record has been Deleted Successfully";
}else{
    echo "Error in Deleting: ".$connection->error;
}

$connection->close();

?>
