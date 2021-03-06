<?php
    session_start();
    require_once "connection.php";

    $insertleave = new DB_con();

    if (isset($_POST['submit'])){

        $firstname = $_POST['name'];
        $lastname = $_POST['lastname'];
        $begin = $_POST['begin'];
        $due = $_POST['due'];
        $summary = $_POST['sum'];
        $type = $_POST['type'];
        $remark = $_POST['remark'];

        $sql = $insertleave->insertleave($firstname,$lastname,$begin,$due,$summary,$type,$remark);

        if($sql){
            echo "<script>alert('Record Inserted Successfully!');</script>";
            echo "<script>window.location.href='./leavework.php'</script>";
        }else{
            echo "<script>alert('Something went wrong! Please try again!');</script>";
            echo "<script>window.location.href='./formadd_leave.php'</script>";
        }

    }
?>


<!doctype html>
<html lang="en">
  <head>
    <title>Kata Top Villa</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Boxicon CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  </head>

  <body>

     <div class="form-page">
        <section>
            <div class="container">
                <div class="form-add" style="width: 800px;">
                    <div class="header-form">
                        <p>ADD LEAVE WORK DATA -- เพิ่มข้อมูลการลางาน</p>
                    </div>
                    <!-- Form edit client data to database -->
                    <form action="" method="post">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="row">
                            <label for="name">Name</label><br>
                                <input type="text" name="name" id="name" class="text" placeholder="Name">
                            </div>
                            <div class="row">
                            <label for="begin">Begin date</label><br>
                                <input type="date" name="begin" id="begin" class="text" placeholder="Begin date">
                            </div>
                            <div class="row">
                            <label for="sum">Summary</label><br>
                                <input type="text" name="sum" id="sum" class="text" placeholder="Summary">
                            </div>
                            <div class="row">
                            <label for="remark">Remark</label><br>
                                <input type="text" name="remark" id="remark" class="text" placeholder="Remark">
                            </div>
                        </div>
                        <div class="col-sm-2"></div>
                        <div class="col-sm-4">
                            <div class="row">
                            <label for="lastname">Lastname</label><br>
                                <input type="text" name="lastname" id="lastname" class="text" placeholder="Lastname">
                            </div>
                            <div class="row">
                            <label for="due">Due date</label><br>
                                <input type="date" name="due" id="due" class="text" placeholder="Due date">
                            </div>
                            <div class="row">
                                <label for="type">Type</label><br>
                                <select class="form-select text" aria-label="Default select example" id="type" name="type">
                                <option value="sick leave" selected>Sick leave</option>
                                <option value="personal leave">Personal leave</option>
                                <option value="vacation leave">Vacation leave</option>
                            </select>
                            </div>
                        </div>
                    </div>


                    <div class="row text-center mt-5">
                        <div class="col-sm-3"></div>
                        
                                <div class="col-sm-3">
                                    <button type="submit" name="submit" class="btn btn-primary">ADD</button>
                                </div>
                                <div class="col-sm-3">
                                <a href="./leavework.php"><button type="button" class="btn btn-danger" >CANCLE</button></a>
                                </div>
                            </div>
                        <div class="col-sm-3"></div>
                    </form>

                    
                </div>
            </div>
        </section>
     </div>

     
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/index.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>