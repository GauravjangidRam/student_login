<?php 
//     include_once "connection.php";
//     $data = stripslashes(file_get_contents("php://input"));
// $mydate = json_decode($data,true);
// $name = $mydate['name'];
// $email = $mydate['email'];
// $phone = $mydate['phone'];
// $password = $mydate['password'];


// if(!empty($name) && !empty($email) && !empty($password))
// {
//     $sql = "INSERT INTO `student_details`(name, email, phone_num, password)
//     VALUES ('$name','$email','$phone','$password')";
//     if($conn->query($sql)== TRUE)
//     {
//         echo "Data Inserted";
//     }
//     else{
//         echo "Error";
//     }
    
// }







    include_once "connection.php";

$postData = json_decode(file_get_contents('php://input'), true);

$name = $postData['name'];
$email = $postData['email'];
$phone = $postData['phone'];
$password = $postData['password'];

if(!empty($name) && !empty($email) && !empty($password))
{
    $sql = "INSERT INTO student_details (name, email, phone_num, password) VALUES ('$name', '$email', '$phone', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
else{
    echo "All Fields are Required";
}



$conn->close();
?>