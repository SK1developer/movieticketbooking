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
            $emal = $_POST['sign-in-email'];
            $pas = $_POST['sign-in-passwd'];
          
            $query = "SELECT * FROM account WHERE email = '$emal' AND pass = '$pas'";
            $result = mysqli_query($con, $query);
            if($result == TRUE){
                echo "logged in";         
                header('Location:index.html');   
            }

        
        }else{
            echo "<h1 style='color:red;'>Unable to Connect to Database</h1>" . mysqli_connect_error();
            echo "<button><a href='index.php' style='color:black;padding:10px;font-size:20px;text-decoration:none;'>Go Back</a></button>";
        }
    }

    $con -> close();
?>
