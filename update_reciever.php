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
    $reciever=$_POST['reciever'];
    $number=$_POST['number'];
    $medicine=$_POST['medicine'];
    $edate=$_POST['date'];
    $company=$_POST['company'];
    $quantity=$_POST['quantity'];
    $city=$_POST['city'];
    $pharmasy=$_POST['pharmasy'];



// if(isset($name) && $name != "" && isset($email) && $email != "" && isset($password) && $password != "" && isset($country) && $country != ""){
    // echo "string";

    $sql = "Update reciever set re_reciever = '$reciever',re_number = '$number',re_medicine = '$medicine', re_date = '$edate', re_manufacturer = '$company', re_quantity = '$quantity', re_city = '$city', re_pharmacy = '$pharmasy' where re_id = $id ";
    if ($connection->query($sql) === TRUE) {
        echo "Record has been updated Successfully";
    }else{
        echo "Error in updating: ".$connection->error;
    }

    $connection->close();


}
?>
