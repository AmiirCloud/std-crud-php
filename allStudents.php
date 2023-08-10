<?php
include './conn.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8 ">
                <table class="table">
                    <tr>
                        
                        <th>ID</th>
                        <th>Name</th>
                        <th>Class</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                    <tbody>
                        <?php 
                        $table  =  "";
                        $query =  "SELECT * FROM sudents ";
                        $result  = $con->query($query);
                        if($result){
                            $table .= '<tr>';
                            while($row  = $result->fetch_assoc()){
                                $table .= "<td>".  $row['std_id']."</td>";
                                $table .= "<td>".  $row['std_name']."</td>";
                                $table .= "<td>".$row['std_class']."</td>";
                                $table .= "<td>".$row['std_phone']."</td>";
                                $table .= "<td>".$row['std_address']."</td>";
                                $formDate  = "
                                form.php?"
                                ."id=".$row["std_id"].
                                "&name=".$row['std_name'].
                                "&class=".$row['std_class'].
                                "&phone=". $row["std_phone"].
                                "&address=".$row['std_address'] ;
                               $table .= "<td><a href = '$formDate' class='btn btn-info text-white'>Update</a></td>";
                               $table .= "<td><a href = '$formDate' class='btn btn-danger text-white'>Delete</a></td>";
                                // <td><button class="btn btn-danger text-white">Delete</button></td>
                                $table .= '</tr>';
                               
                              
                           
                            }
                            echo $table;
                        }
                      
                       
                   ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>