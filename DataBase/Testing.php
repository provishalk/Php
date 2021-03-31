$dbname = 'testingfromphp2';  
$sql = 'CREATE Database testingfromphp11';
 
if(mysqli_query( $conn,$sql)){  
  echo "Database created successfully.";  
}else{  
echo "Sorry, database creation failed ".mysqli_error($conn);  
}  
 
$sql = "create table if not exists testingfromphp11.test(id INT AUTO_INCREMENT,name VARCHAR(20) NOT NULL,  
emp_salary INT NOT NULL,primary key (id))";  
 
if(mysqli_query($conn, $sql)){  
 echo "Table emp5 created successfully";  
}else{  
echo "Could not create table: ". mysqli_error($conn);  
}  


 
mysqli_close($conn);  
 
<?php  
$host = 'localhost:3306';  
$user = 'pma';  
$pass = '';  
$conn = mysqli_connect($host, $user, $pass);  
if(! $conn )  
{  
  die('Could not connect: ' . mysqli_error());  
}  
?> 