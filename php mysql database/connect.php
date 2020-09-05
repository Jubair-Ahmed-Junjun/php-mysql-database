<?php
     
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "student_info";
      $conn = new mysqli($servername,$username,$password,$database);
      if ($conn->connect_error) {
      	die("Failed to connect".$conn->connect_error);
      }
 

      $sql = "INSERT INTO users(first_name,last_name,email)VALUES('naser','akber','akaber@gmail.com')";

      $result = $conn->query($sql);
      if ($result===TRUE) {
            $last_id = $conn->insert_id;
            echo "New record created successfully.last record is :".$last_id;
      }else{
            echo "Error";
      }

                         //update 

$sql = "INSERT INTO users (first_name, last_name, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
  $last_id = $conn->insert_id;
  echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


                        
                             //Delete Data 

      $sql = "DELETE FROM users WHERE id = 7 ";
      if ($conn->query($sql)===TRUE) {
            echo "Data Deteted Successfully";
      }else{
            echo "Error";
      }

                                
                                //ORDER BY
      $sql = "SELECT id,first_name,last_name FROM users ORDER BY last_name";
      $result = $conn->query($sql);
      if ($result->num_rows>0) {
            while ($row = $result->fetch_assoc()) {
                  
                  echo "id : ".$row['id'] . " " . " Name :" . " ". $row['first_name']. " " . " " . $row['last_name']. " ";
            }
      }else
      {
            echo "Error";
      }



                                  //WHERE

      $sql = "SELECT id,first_name,last_name,email FROM users WHERE last_name = 'rashid' ";
      $result = $conn->query($sql);
      if($result->num_rows > 0)
      {
            while ($data = $result->fetch_assoc()) {
                  echo "id : ".$data['id']."".""."Name :"."".$data['first_name']."".$data['last_name'].""."Email : "."".$data['email'];
            }
      }
      else{
            echo "Error";
      
     
                       //select
           
      $sql = "SELECT id,first_name,last_name,email FROM users";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      	while ($row = $result->fetch_assoc()) {
      		echo "id : ". $row['id']."-Name :"."".$row['first_name']." ".$row['last_name']." . ".$row['email']."<br>";
      	}
      }else
      {
      	echo "error";
      }




               //Multiple Data insert

      $sql = "INSERT INTO users(first_name,last_name,email)VALUES('mamun','rashid','mamun@gmail.com'),('adi','rahman','adi@gmail.com'),('priam','boss','priam@gmail.com')";
      if($conn->query($sql)===TRUE)
      {
      	echo "Multiple Data Insert Successfully";
      }else{
      	echo "Error";
      }


                   // insert data

      $sql = "INSERT INTO users(first_name,last_name,email)VALUES('Emon','Alam','emon@gmail.com')";
      if($conn->query($sql)=== TRUE)
      {
      	$last_id = $conn->insert_id;
      	echo "New Record Created Successfully.New record is :".$last_id;
      }else{
      	echo "Error";
      }
                   


                 //Data Table

      $sql = "CREATE TABLE users(
      id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      first_name VARCHAR(255) NOT NULL,
      last_name VARCHAR(255) NOT NULL,
      email VARCHAR(255) NOT NULL

       )";

       if($conn->query($sql)===TRUE)
       {
       	echo "Data table created Successfully";
       }else{
       	echo "Failed to crating database";
       }

                   


                  //Create Database
 

      $sql = "CREATE DATABASE student_info";
      if($conn->query($sql)===TRUE)
      {
      	echo "Database Created Successfully";
      }
      else
      {
      	echo "Failed to creating database";
      }


?>
