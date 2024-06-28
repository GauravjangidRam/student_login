<?php
// include_once "connection.php";

// $sql = "SELECT * FROM `student_details`";
// $result = $conn->query($sql);
// if($result->num_rows>0)
// {
//     $data = array();
//     while($row = $result->fetch_assoc())
//     {
//         echo "Name:-".$row['name']."<br>Email:- ".$row['email']."<br>";
//     }
// }

// echo json_encode($data);


include_once "connection.php";

$sql = "SELECT * FROM `student_details`";
$result = $conn->query($sql);

$data = array();
if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

echo json_encode($data);


?>