<?php
$conn = mysqli_connect("localhost","root","","login");
    
if(!$conn){
    die("Connection Failed" . mysqli_connect_error($conn));
}else{
    echo "Connection Successfull";
}
    
    
    $id = $_POST["user_id"];
    $name = $_POST["user_name"];
    $email= $_POST["email"];
    
    $sql = "insert into users (id,username,Email) VALUES ('$id','$name','$email')";
    $result = mysqli_query($conn,$sql);

if(!$result){
    echo "Error" . $sql . "<br>" . mysqli_error($conn);
     
}else{
     echo"You have successfully entered a record";
    header("location:web.html");
}




?>