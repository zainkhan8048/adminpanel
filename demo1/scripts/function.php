<?php

//include '../../../../../db/conn.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//Db Connection
function db()
{
    static $conn;

    if($conn===NULL)
    {
		$servername = "localhost";
		$username = "root";
		$password = "";

		try 
		{
		  $conn = new PDO("mysql:host=$servername;dbname=technager_db", $username, $password);
		  // set the PDO error mode to exception
		  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  echo "Connected successfully";
		} 
		catch(PDOException $e) 
		{
		  echo "Connection failed: " . $e->getMessage();
		}
    }
    return $conn;
}


//Sign In Function
function login($user_email, $passwordAttempt)
{
	
	$conn = db();
	//Retrieve the subscriber account information for the given user_email.
	$sql = "SELECT u.`user_id`, u.`user_first_name`, u.`user_last_name`, u.`user_email`, u.`user_phone`, u.`user_password`, u.`user_login_time`, u.`user_logout_time`, r.`role_id` ,r.role_type
			FROM `tbl_user` u, tbl_role r
			WHERE u.role_id = r.role_id
			AND u.user_email = :user_email";
	//echo $sql;
	//die();
	$stmt = $conn->prepare($sql);
	$stmt->bindValue(':user_email', $user_email);
	$stmt->execute();
	$row = $stmt->fetch(PDO::FETCH_ASSOC);

	//Fetch db row username.
	$dbuser_email = $row['user_email'];

	//If $row is FALSE.
	if($dbuser_email !== $user_email)
	{
		//Could not find a subscriber with that username!
		//header("Location: /msgs/msg_invalid_username.php");
		echo "invalid_username";
		
	}
	else
	{
		
		//subscriber account found. Check to see if the given password matches the
		//password hash that we stored in our subscriber table.
		
		//Compare the passwords.
		$validPassword = password_verify($passwordAttempt, $row['user_password']);
		

		//If $validPassword is TRUE
		if($validPassword === true)
		{
			//Provide the subscriber with a login session.
			echo $_SESSION['user_id'] = $row['user_id'];
			echo $_SESSION['user_email'] = $row['user_email'];
			echo $_SESSION['role_type'] = $row['role_type'];


			//die();

			$sql = "UPDATE tbl_user
					SET user_login_time = Now()
					WHERE user_email = :user_email";

			$stmt = $conn->prepare($sql);
			$stmt->bindValue(':user_email', $user_email);

			//Execute.
			$result = $stmt->execute();
			
			if($result > 0)
			{
				header('Location: ../../../apps/projects/add-project.php');
				exit;
			}
		}
		else
		{
			//Password was FALSE. Passwords do not match.
			echo "Invalid Password";
		}

	}
}




//////////////////////////Projet Module / Sales Module Fuctions////////////////////////////////////////


//Add Project Function...
function add_project($project_title, $project_source, $project_cost, $currency_id, $project_type_id, $project_technology, $project_deadline, $user_id)
{
	//$user_id = $_SESSION['user_id'];
	//$role_type = $_SESSION['role_type'];	
	
	
	$conn = db();

	//Prepare our INSERT statement.
	$sql = "INSERT INTO 
	     tbl_project (project_title, project_source, project_cost, currency_id, project_type_id, project_technology, project_deadline, project_status, project_decision_status, project_received_datetime, user_id) 
	   VALUES 
	   (:project_title, :project_source, :project_cost, :currency_id, :project_type_id, :project_technology, :project_deadline, 'active', 'pending', Now(), :user_id)";

	$stmt = $conn->prepare($sql);

	//Bind our variables.
	$stmt->bindValue(':project_title', $project_title);
	$stmt->bindValue(':project_source', $project_source);
	$stmt->bindValue(':project_cost', $project_cost);
	$stmt->bindValue(':currency_id', $currency_id);
	$stmt->bindValue(':project_type_id', '1');
	$stmt->bindValue(':project_technology', $project_technology);
	$stmt->bindValue(':project_deadline', $project_deadline);					
	$stmt->bindValue(':user_id', $user_id);

	//Execute the statement and insert the new account.
	$result = $stmt->execute();
	//$subscriber_id = $conn->lastInsertId();


	//If the signup process is successful.
	if($result > 0)
	{

	//Email
		echo "Inserted";
	}
	else 
	{
		echo "Not Inserted";
	}
}

?>