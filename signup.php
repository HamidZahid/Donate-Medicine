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
    #container {
        background-color: white;
        height: 30px;
        width: 100%;
    }
</style>



    <div class="Donor_bg">
        <div id="container">
            <div id="header">
                <h1>Donate Medicine or Help Messes </h1>
            </div>
<!--            <div id="nav">-->
<!--            <ul>-->
<!--                    <li> <a href="samra_anwar.php"><b>Home</b></a></li>-->
<!--                    <li> <a href="donor.php"><b>Donor</b> </a></li>-->
<!--                    <li><a href="receive.php"><b>Receiver</b> </a></li>-->
<!--                    <li><a href="about.php"> <b>About</b> </a></li>-->
<!--                    <li> <a href="signup.php"><b>login/signup</b> </a></li>-->
<!--                    <li><a href="logout.php">logout</a></li>-->
<!--                    -->
<!--                </ul>-->
<!--            </div>-->
        </div>
            <div class="form">

                <ul class="tab-group">
                    <li class="tab"><a href="login_about.php" style="margin-left: 90px;">About Us</a></li>
                    <li class="tab active"><a href="signup.php">Sign Up</a></li>
                    <li class="tab "><a href="login.php">Log In</a></li>
                </ul>
                <div class="tab-content">
                    <div id="signup">
                        <h1>Sign Up for Free</h1>

                        <form action="signup.php" method="post">

                            <div class="top-row">
                                <div class="field-wrap">
                                    <input type="text" required autocomplete="off" name="firstname" placeholder="First Name *" />
                                </div>

                                <div class="field-wrap">
                                   
                                    <input type="text" required autocomplete="off" name="lastname" placeholder="Last Name *" />
                                </div>
                            </div>

                            <div class="field-wrap">
                               
                                <input type="email" required autocomplete="off" name="email" placeholder="Email Address *" />
                            </div>

                            <div class="field-wrap">
                               
                                <input type="password" required autocomplete="off" name="password" placeholder=" Set A Password*"/>
                            </div>

                            <button type="submit" class="button button-block" name="submit">Get Started</button>

                        </form>

                    </div>

                

                </div><!-- tab-content -->

            </div> <!-- /form -->

    </div>
    
</body>

<!---------------------------->
<!--php start-->
<!---------------------------->

<?php
         include('dbcon.php');
        if(isset($_POST['submit'])){
            $f_name=$_POST['firstname'];
            $l_name=$_POST['lastname'];
            $email=$_POST['email'];
            $password=$_POST['password'];



            $qry1="INSERT INTO `signup_form`(`first_name`, `last_name`,`email`, `password`) VALUES ('$f_name','$l_name','$email','$password')";



            // execute query and show results or error
            if ($connection->query($qry1) === TRUE) {
                echo "Thanks for creating Account";

            ?>
            <script>
                // alert("Data added successfully !");
                window.open('login.php','_self');
            </script>
        <?php


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