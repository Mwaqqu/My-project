<?php
$name= $_POST["name"];
$Conemail=$_POST["email"];
$message=$_POST["message"];
$username=["username"];
$password=$_POST["password"];
$Email=$_POST["Email"];
$contact=$_POST["contact"];
$gender=$_POST ["gender"];
$conn = new mysqli("localhost","root","",warentdb);
$sql ="INSERT INTO warentdb( name, email, message, username, password, Email, contact, gender) VALUES ('$name', '$Conemail', '$message', '$username', '$password', '$Email', '$contact', '$gender')";
if ($conn->query($sql)===true)
{
    echo "New Record Created Successfully";
}
else
{
    echo "Error" . $sql . "<br/>" . $conn->error;
}

?>

