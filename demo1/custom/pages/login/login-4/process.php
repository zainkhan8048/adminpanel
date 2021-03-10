<?php

include_once("conn.php");



if(isset($_POST['signup']))
{
    $conn = config::conect();
    $user_category_id = $_POST['user_category_id'];
    $user_first_name = $_POST['user_first_name'];
    $user_last_name = $_POST['user_last_name'];
    $user_gender = $_POST['user_gender'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $user_image = $_POST['user_image'];
    $user_phone = $_POST['user_phone'];
   
if(insertDetails($conn,$user_category_id,$user_first_name,$user_last_name,$user_gender,$user_email,$user_password,$user_image,$user_phone));
{
    echo "details Inserted successfully";
}

}

    function insertDetails($conn,$user_category_id,$user_first_name,$user_last_name,$user_gender,$user_email,$user_password,$user_image,$user_phone)

    {
        $query = $conn->prepare("
        
        INSERT INTO user (user_category_id,user_first_name,user_last_name,user_gender,user_email,user_password,user_image,user_phone)
        
        ");

        $query->bindParam(":user_category_id",$user_category_id);
        $query->bindParam(":user_first_name",$user_first_name);
        $query->bindParam(":user_last_name",$user_last_name);
        $query->bindParam(":user_gender",$user_gender);
        $query->bindParam(":user_email",$user_email);
        $query->bindParam(":user_password",$user_password);
        $query->bindParam(":user_image",$user_image);
        $query->bindParam(":user_phone",$user_phone);

        return $query->execute();

    }

?>