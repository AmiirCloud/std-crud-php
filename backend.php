<?php

include './conn.php';
if(isset($_POST['insert'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $class = $_POST['class'];
    $phone = $_POST['phone'];
    $adress= $_POST['adress'];
    // $address = $_POST['address'];
    $query =  "INSERT  into sudents VALUES(null,'$name','$class',' $phone','$adress')";
    $result  = $con->query($query);
    if($result){
        echo 'Inserted Success';
    }else{
        echo "Failed";
    }

}
else if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $class = $_POST['class'];
    $phone = $_POST['phone'];
    $adress= $_POST['adress'];
    $query  = "UPDATE sudents set std_name  = '$name',std_class='$class',std_phone = '$phone' , std_address =  '$adress' where std_id = '$id'";
    $result  = $con->query($query);
    if($result){
        echo 'Updated Success';

    }else{
        echo "Failed";
    }
}
else if(isset($_GET['delete'])){
    
        $id = $_GET['id'];
       $query  = "DELETE FROM sudents where std_id  = '$id'";
       $result  = $con->query($query);
       if($result){
        echo "Deleted Success";
       }else{
        echo "Failed To Delete";
       }
        // alert("hllow");
    
}

?>