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



if(isset($action)){
    $action($con);
}else{
    echo 'action is required';
}

?>