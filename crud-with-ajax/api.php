<?php
include './config.php';
header('Content-type:application/json');
// read 
// update 
// delete 
$action = '';
if(isset($_POST['action'])){

    $action = $_POST['action'];
}
if(isset($GET['id'])){
    $action =  'update';
    // $action = $;_POST['action'];
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
    echo  json_encode($message);
}

function update($con){

    $message  = array();
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $name = $_GET['name'];
        $class = $_GET['class'];
        $phone = $_GET['phone'];
        $address = $_GET['address'];

        $query = "UPDATE sudents set name = '$name',class = '$class' , phone = '$phone' , address = '$address' where id   = '$id'";
        $res = $con->quer($query);
        if($res){
            $message =  array('status',true,'data'=>"Updated Success");

        }else{
            $message  =  array('status',false,'data'=>$con->error);
        }
    }else{
        $message = array('status'=>false,'data'=>'GEt Reuired');
        // echo json_encode($message)
    }
    echo json_encode($message);
}

if(isset($_POST['action'])){
    $action($con);
}else{
    echo 'there is no action';
}


?>