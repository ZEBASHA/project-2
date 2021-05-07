<?php
 $username = $_POST['username'];
 $email = $_POST['Email'];
 $contect = $_POST['contect'];
 $comment = $_POST['comment'];
  
  $conn = new mysqli('localhost','root','','testuserdata');
  if($conn->connect_error){
	 die('connection failed : '.$conn->connect_error);
  }else{
	  
		$sql = "INSERT INTO userinfodata (username, Email, contect,comment)
		VALUES ('$username', '$email', '$contect','$comment')";

		if ($conn->query($sql) === TRUE) {
		  echo "New record created successfully";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
  }
 
 ?>