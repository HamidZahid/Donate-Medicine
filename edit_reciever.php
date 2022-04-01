<?php
include('dbcon.php');

// get id value which is send with url
if (isset($_GET["id"]) && $_GET["id"] != "" ) {
    $id = intval($_GET["id"]);

//    echo $id;

// retrive data according to id
    $sql = "Select * from reciever Where re_id = $id";
    $result = $connection -> query($sql);

    if ($result-> num_rows > 0) {
        while ($row = $result -> fetch_assoc()) {
            $reciever=$row['re_reciever'];
            $number=$row['re_number'];
            $medicine=$row['re_medicine'];
            $date=$row['re_date'];
            $company=$row['re_manufacturer'];
            $qty=$row['re_quantity'];
            $city=$row['re_city'];
            $pharmasy=$row['re_pharmacy'];
        }
    }else {
        echo "No Recrd Found".$connection->error;
    }

}else {
    die("No valid user ID found");
}

?>




<!---------------------------->
<!--html start-->
<!---------------------------->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="samra_anwar.css">
</head>

<body>

<!--internal css-->
<style>
    .Donor_bg {
        height: 120vh;
    }
</style>


<div class="Donor_bg">
    <div id="container">
        <div id="header">
            <h1>Donate Medicine or Help Messes </h1>
        </div>
        <div id="nav">
            <ul>
                <li> <a href="dashboard.php"><b>Home</b></a></li>
                <li> <a href="donor.php"><b>Donor</b> </a></li>
                <li><a href="receive.php"><b>Receiver</b> </a></li>
                <li><a href="about.php"> <b>About</b> </a></li>
                <li> <a href="signup.php"><b>login/signup</b> </a></li>
            </ul>
        </div>
    </div>

    <div class="form">
        <form action="update_reciever.php" method="post">

            <input type="hidden" name="id" value="<?php echo $id; ?>">


            <div class="field-wrap">

                <input type="text" name="reciever" value="<?php echo $reciever; ?>" placeholder="name of reciever">
            </div>

            <div class="field-wrap">
                <input type="" name="number" value="<?php echo $number; ?>"  placeholder="number of medicine">
            </div>
            <div class="field-wrap">
                <input type="text" name="medicine" value="<?php echo $medicine; ?>" placeholder="">

            </div>
            <div class="field-wrap">
                <input type="text" value="<?php echo $qty; ?>" name="quantity" placeholder="">
            </div>
            <div class="field-wrap">
                <input type="text" name="date" value="<?php echo $date; ?>" placeholder="">
            </div>
            <div class="field-wrap">
                <input type="text" name="company" value="<?php echo $company; ?>" placeholder="">
            </div>

            <div class="field-wrap">
                <input type="text" name="city" value="<?php echo $city; ?>" placeholder="">
            </div>
            <div class="field-wrap">
                <input type="text" name="pharmasy" value="<?php echo $pharmasy; ?>" placeholder="">
            </div>

            <button type="submit" class="button button-block" name="submit" />Edit Reciever</button>

        </form>

    </div><

</div>

</div>
</div>
</body>


<!---------------------------->
<!--php start-->
<!---------------------------->


<?php
include('dbcon.php');
if(isset($_POST['submit'])){

    $medicine=$_POST['medicine'];
    $edate=$_POST['edate'];
    $company=$_POST['company'];
    $quantity=$_POST['quantity'];
    $city=$_POST['city'];
    $pharmasy=$_POST['pharmasy'];

//    insert data
    $qry1="INSERT INTO `donor`(`do_medicine`, `do_date`,`do_manufacturer`, `do_quantity`,`do_city`, `do_pharmacy`) VALUES ('$medicine','$edate','$company','$quantity','$city','$pharmasy')";



    // execute query and show results or error
    if ($connection->query($qry1) === TRUE) {
        echo "Medicine Donated Successfully";
    }else{
        echo "Error in inserting: ".$connection->error;
    }

}
?>

<!---------------------------->
<!--php end-->
<!---------------------------->

</html>

<!---------------------------->
<!--html end-->
<!---------------------------->