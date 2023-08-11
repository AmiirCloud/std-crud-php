<?php
$con = new mysqli("localhost",'root','','mydb');
if($con->connect_error){
    echo 'There is something wrong '. $con->connect_error;
}

?>