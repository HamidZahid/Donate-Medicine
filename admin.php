

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="samra_anwar.css">



    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 80%;
            margin-left: 10%;
            /*margin-right: 20px;*/
        }

        thead{
            background: #1ab188;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        h2{
            text-align: center;
            /*align-content: center;*/
            margin-top: 30px;
        }

        *{
            font-family: 'Franklin Gothic', 'Arial Narrow', Arial, sans-serif;
        }
    </style>
</head>
<body>

<div id="">
    <div id="header">
        <h1>Donate Medicine or Help Messes (Admin Panel)</h1>
    </div>
<!--    <div id="nav">-->
<!--        <ul>-->
<!--            <li> <a href="dashboard.php"><b>Home</b></a></li>-->
<!--            <li> <a href="donor.php"><b>Donor</b> </a></li>-->
<!--            <li><a href="receive.php"><b>Receiver</b> </a></li>-->
<!--            <li><a href="about.php"> <b>About</b> </a></li>-->
<!--            <li> <a href="admin.php"><b>Admin</b> </a></li>-->
<!--            <li> <a href="signup.php"><b>login/signup</b> </a></li>-->
<!--        </ul>-->
<!--    </div>-->
</div>




<h2>User Report</h2>
<!-- ============================================== -->
<!-- Table -->
<!-- ============================================== -->
<table>
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
<!--        <th scope="col">Date</th>-->
<!--        <th scope="col">Actions</th>-->
    </tr>
    </thead>
    <tbody>

    <?php

    include('dbcon.php');
    // make query
    $sql="Select * from signup_form";
    $sql2="Select * from donor";
    $sql3="Select * from reciever";

    // execute query and store result in $result
    $result = $connection->query($sql);
    $result2 = $connection->query($sql2);
    $result3 = $connection->query($sql3);




    // check if query is not empty
    if ($result->num_rows > 0) {
        // retrive each row of query one by one
        while ($row = $result->fetch_assoc()) {
            // code...
            ?>
            <tr>
                <th scope="row"> <?php echo $row['id']; ?> </th>
                <td><?php echo $row['first_name']; ?> </td>
                <td><?php echo $row['last_name']; ?> </td>
                <td><?php echo $row['email']; ?> </td>
                <td><?php echo $row['password']; ?> </td>
<!--                <td>--><?php //echo $row['user_country']; ?><!-- </td>-->
<!--                <td>--><?php //echo $row['register_date']; ?><!-- </td>-->
<!--                 we will also send id within query to retrive it on next page and perform operations(update and delete) -->
<!--                <td><a href="user_details.php?id=--><?php //echo $row['user_id']; ?><!--">Update</a>  &nbsp &nbsp &nbsp &nbsp <a href="delete_user.php?id=--><?php //echo $row['user_id']; ?><!--">Delete</a> </td>-->
            </tr>

        <?php    }
    }else { ?>
        No Records Found
    <?php } ?>



    </tbody>
</table>





<h2>Donor Report</h2>
<!-- ============================================== -->
<!-- Table -->
<!-- ============================================== -->
<table>
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Medicine</th>
        <th scope="col">Manufacturer</th>
        <th scope="col">Quantity</th>
        <th scope="col">City</th>
        <th scope="col">Pharmacy</th>
        <th scope="col">Date</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>

    <?php
    // check if query is not empty
    if ($result2->num_rows > 0) {
        // retrive each row of query one by one
        while ($row = $result2->fetch_assoc()) {
            // code...
            ?>
            <tr>
                <th scope="row"> <?php echo $row['id']; ?> </th>
                <td><?php echo $row['do_medicine']; ?> </td>
                <td><?php echo $row['do_manufacturer']; ?> </td>
                <td><?php echo $row['do_quantity']; ?> </td>
                <td><?php echo $row['do_city']; ?> </td>
                <td><?php echo $row['do_pharmacy']; ?> </td>
                <td><?php echo $row['do_date']; ?> </td>
                <td><a href="edit_donor.php?id=<?php echo $row['id']; ?>">Update</a>  &nbsp &nbsp &nbsp &nbsp <a href="delete_donor.php?id=<?php echo $row['id']; ?>">Delete</a> </td>

            </tr>

        <?php    }
    }else { ?>
        No Records Found
    <?php } ?>



    </tbody>
</table>






<h2>Reciever Report</h2>
<!-- ============================================== -->
<!-- Table -->
<!-- ============================================== -->
<table>
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Reciever</th>
        <th scope="col">Number</th>
        <th scope="col">Medicine</th>
        <th scope="col">Manufacturer</th>
        <th scope="col">Quantity</th>
        <th scope="col">City</th>
        <th scope="col">Pharmacy</th>
        <th scope="col">Date</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>

    <?php
    // check if query is not empty
    if ($result3->num_rows > 0) {
        // retrive each row of query one by one
        while ($row = $result3->fetch_assoc()) {
            // code...
            ?>
            <tr>
                <th scope="row"> <?php echo $row['re_id']; ?> </th>
                <td><?php echo $row['re_reciever']; ?> </td>
                <td><?php echo $row['re_number']; ?> </td>
                <td><?php echo $row['re_medicine']; ?> </td>
                <td><?php echo $row['re_manufacturer']; ?> </td>
                <td><?php echo $row['re_quantity']; ?> </td>
                <td><?php echo $row['re_city']; ?> </td>
                <td><?php echo $row['re_pharmacy']; ?> </td>
                <td><?php echo $row['re_date']; ?> </td>
                <td><a href="edit_reciever.php?id=<?php echo $row['re_id']; ?>">Update</a>  &nbsp &nbsp &nbsp &nbsp <a href="delete_reciever.php?id=<?php echo $row['re_id']; ?>">Delete</a> </td>
            </tr>

        <?php    }
    }else { ?>
        No Records Found
    <?php } ?>



    </tbody>
</table>



</body>
</html>
