<?php
$conn=mysqli_connect("localhost", "root", "", "portal");
if(!$conn){
    die(" can't connect" );
}

$name=$_POST['name'];
$password=$_POST['password'];

$sql="SELECT* FROM 'instructors' WHERE name= '$name' AND password= '$password'";
$result=mysqli_query($conn,$sql);

if (mysql_num_rows($result)>0){
    echo"success";
    exit();

}else{
    echo "try again";
}
mysqli_close($conn);
?>