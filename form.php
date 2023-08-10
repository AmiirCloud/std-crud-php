<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
</head>
<body>
    <?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $name = $_GET['name'];
        $class = $_GET['class'];
        $phone = $_GET['phone'];
        $adress= $_GET['address'];
        // alert("hllow");
    }
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1 class="fw-light ">Student Registration</h1>
                <div class="card p-4">
                    <h3 class="fw-normal p-2 mb-2 ">Fill This From CareFully !!</h3>
                    <div class="form-group ">
                        <form action="backend.php"method="post" class="row">
                          <div class="col-2">
                            <label for="">ID</label>
                        </div>
                        <div class="col-10 mb-2">
                            <input
                             type="text"
                             class='form-control col-8'
                             placeholder='Enter Student Id'
                             name="id"
                             value="<?php
                               if(isset($id)){
                                echo $id;
                               }
                             
                              ?>"
>
                        </div>
                        <div class="col-2">
                            <label for="">Name</label>
                        </div>
                        <div class="col-10 mb-2">
                            <input
                             type="text"
                             class='form-control col-8'
                             placeholder='Enter Student Name'
                             name="name"
                            value="<?php    if(isset($name)){
                                echo $name;
                               }?>">
                             

                        </div>      <div class="col-2">
                            <label for="">Class</label>
                        </div>
                        <div class="col-10 mb-2">
                            <input
                             type="text"
                             class='form-control col-8'
                             placeholder='Enter Student Class'
                             name="class"
                            value="<?php    if(isset($class)){
                                echo $class;
                               }?>">
                             
                             

                        </div>      <div class="col-2">
                            <label for="">Phone</label>
                        </div>
                        <div class="col-10 mb-2">
                            <input 
                            type="text"
                            class='form-control col-8'
                            placeholder='Enter Student Phone'
                            name="phone"
                            value="<?php     if(isset($phone)){
                                echo $phone;
                               }?>">

                        </div>      <div class="col-2">
                            <label for="">Address</label>
                        </div>
                        <div class="col-10 mb-3">
                            <input 
                            type="text"
                            class='form-control col-8'
                            placeholder='Enter Student Address'
                            name='adress'
                            value="<?php    if(isset($adress)){
                                echo $adress;
                               }?>">

                            

                        </div>
                        <div class="row">
                            <div class="col-6">

                                <button type="submit" name="insert" class="btn btn-success text-white w-100 col-6">Regiser</button>
                            </div>
                            <div class="col-6">

                                <button type="submit" name="update" class="btn btn-info text-white w-100 col-6">Update</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>