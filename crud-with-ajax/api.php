<?php
include './config.php';
header('Content-type:application/json');
// read 
// update 
// delete 
// $action = '';
if(isset($_POST['action'])){

    $action = $_POST['action'];
}
// write readAll Student api 
function readAllStd($conn){
  $data  = array();
  $message = array();
    $query = 'SELECT * FROM sudents';
    $result   = $conn->query($query);
    if($result){
        while($row  =$result->fetch_assoc()){
            $data[] = $row;
        }
        $message = array('status'=>true,'data'=>$data);
    }else{
        $message =  array('status'=>false,'data'=>$conn->error);
    }
    echo json_encode($message);
}

function register($con){
    $data  = array();
    $message = array();
    if(isset($_POST['action'])){
        $name = $_POST['name'];
        $class = $_POST['class'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        // $name = $_POST['name'];
        $query = "INSERT INTO sudents values (null,'$name','$class','$phone','$address')";
        $res = $con->query($query);
        if($res){
          $message =  array('status'=>true,'data'=>'Student Registered Success');

        }else{
            $message =  array('status'=>false,'data'=>$con->error);
        }
    }
    echo json_encode($message);
}

if(isset($action)){
    $action($con);
}else{
    echo 'action is required';
}

?>