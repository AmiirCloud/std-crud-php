<?php

include './conn.php';
if(isset($_POST['insert'])){
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
?>