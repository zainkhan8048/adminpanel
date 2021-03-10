<?php
require_once("signup.php");
// Code for Sign in
if(!empty($_POST["username"])) {
$uname= $_POST["username"];
$sql ="SELECT User_name FROM  userdata WHERE UserName=:uname";



if($query -> rowCount() > 0)
{
echo "<span style='color:red'> Username already exists.</span>";
} else{
echo "<span style='color:green'> Username available for Registration.</span>";
}
}
// Code for checking email availabilty

?>

