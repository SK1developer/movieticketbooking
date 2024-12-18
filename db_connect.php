<?php
$servername= "localhost";
$username = "root";
$password = "";
$database = "users";

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
    echo "not connect";

}
else
{
    echo "conected sucessfully";
}
 $sql = "INSERT FROM table($username,$password,$database) values ('deep', 'ssssss', 'dhhd'); "
 if($sql){
    echo "insert data success"
 }
 else
 {
    die(".$sql");
    echo "not insert";
 }

?>