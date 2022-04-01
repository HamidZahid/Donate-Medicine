<!-- this code will simply execute query to update row -->


<?php
include('dbcon.php');

$error = $name = $email = $password = $message = $country = "";

// check if we get request (called on submit)
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    function clean_inputs($field){
        $field = trim($field);
        $field = stripslashes($field);
        $field = htmlspecialchars($field);
        return $field;
    }

// get values of sended inputs
    $id = clean_inputs($_POST['id']);
    $medicine=$_POST['medicine'];
    $edate=$_POST['edate'];
    $company=$_POST['company'];
    $quantity=$_POST['quantity'];
    $city=$_POST['city'];
    $pharmasy=$_POST['pharmasy'];


// if(isset($name) && $name != "" && isset($email) && $email != "" && isset($password) && $password != "" && isset($country) && $country != ""){
    // echo "string";

    $sql = "Update donor set do_medicine = '$medicine', do_date = '$edate', do_manufacturer = '$company', do_quantity = '$quantity', do_city = '$city', do_pharmacy = '$pharmasy' where id = $id ";
    if ($connection->query($sql) === TRUE) {
        echo "Record has been updated Successfully";
    }else{
        echo "Error in updating: ".$connection->error;
    }

    $connection->close();


}
?>
