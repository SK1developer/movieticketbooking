<?php
    $server="localhost";
    $username="root";
    $password="";
    $dbname="ticketbooking";

    $con = mysqli_connect($server,$username,$password,$dbname);

    if(!$con){
        die("connection failed" . mysqli_connect_error());
    }
    else{
        
        if (isset($_POST['submit'])) {
            $name = $_POST['sign-up-name'];
            $email = $_POST['sign-up-email'];
            $pass = $_POST['sign-up-passwd'];
          
            $query = "INSERT INTO `account` ( `username`, `email`, `pass`) VALUES ( '$name', '$email', '$pass');";
            $result = mysqli_query($con, $query);

            if ($result == TRUE){
                echo "account created";
                echo "<button><a href='index.html' style='color:black;padding:10px;font-size:20px;text-decoration:none;'>Go Back</a></button>";
            }else{
                echo "unable to create account";
                echo "<button><a href='index.html' style='color:black;padding:10px;font-size:20px;text-decoration:none;'>Go Back</a></button>";
            }
        
        }else{
            echo "<h1 style='color:red;'>Unable to Connect to Database</h1>" . mysqli_connect_error();
            echo "<button><a href='index.html' style='color:black;padding:10px;font-size:20px;text-decoration:none;'>Go Back</a></button>";
        }
    }

    $con -> close();
?>
