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
                    <li> <a href="login.php"><b>LogOut</b> </a></li>
            </ul>
            </div>
        </div>

        <div class="form">
            <form action="donor.php" method="post">

                <div class="field-wrap">

                    <input type="text" name="medicine" placeholder="name of medicine">
                </div>

                <div class="field-wrap">
                    <input type="date" name="edate" placeholder="exp date of medicine">
                </div>
               
                <div class="field-wrap">
                    <input type="text" name="quantity" placeholder="quantity of medicine">
                </div>
                <div class="field-wrap">
                    <input type="text" name="city" placeholder="name of city">
                </div>
                <div class="field-wrap">
                    <input type="text" name="pharmasy" placeholder="name of pharmasy">
                </div>

                <button type="submit" onclick="myFunction()" class="button button-block" name="submit" />Donate</button>

            </form>

        </div><

    </div>

    </div>
    </div>
</body>

<script>
function myFunction() {
  alert("Thank You For Donating");
}
</script>
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