<?php
    session_start();
    require_once "connection.php";

    $insertcheckin = new DB_con();

    if (isset($_POST['submit'])){

        $no = $_POST['no'];
        $date = $_POST['date'];
        $id = $_POST['id'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $timeto = $_POST['time'];
        
        

        $sql = $insertcheckin->insertcheckin($no,$date,$id,$fname,$lname,$timeto,
                                                $timeoff,$leaveday,$remark);

        if($sql){
            echo "<script>alert('Record Inserted Successfully!');</script>";
            echo "<script>window.location.href='./checkin.php'</script>";
        }else{
            echo "<script>alert('Something went wrong! Please try again!');</script>";
            echo "<script>window.location.href='./formcheckin.php'</script>";
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Boxicon CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="form-page"><br>
        <div class="headname" style="margin-left:8px">
            <h3>KATA TOP VILLA</h3>

        </div>

        <section>
            <div class="container">
                <div class="form-add" style="width: 680px;">
                    <div>
                        <h2>KATA<br>TOP<br>VILLA</h2>
                        <h6>CHECK IN</h6><br>
                    </div>

                    <!-- Form add employee data to database -->
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-sm-5" style="margin-left:25px">
                                <div class="row">
                                    <label for="id">STAFF ID</label><br>
                                    <input class="form-control" type="text" placeholder="id" name="id" id="id">

                                </div>
                                <div class="row">
                                    <label for="fname">Name</label><br>
                                    <input class="form-control" type="text" placeholder="name" name="fname" id="fname">

                                </div>

                                <div class="row">
                                    <label for="date">Date</label><br>
                                    <input type="date" name="date" id="date" class="form-control">
                                </div>
                            </div>
                            <div class="col-1"></div>
                            <div class="col-sm-5" style="margin-top:70px">

                                <div class="row">
                                    <label for="lname">Lastname</label><br>
                                    <input class="form-control" type="text" placeholder="lastname" name="lname"
                                        id="lname">

                                </div>

                                <div class="row">
                                    <label for="time">Time</label><br>
                                    <input type="time" name="time" id="time" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row text-center mt-3">

                            <div class="col-sm-3" style="margin-top: 10px;margin-left:150px">
                                <button type="submit" id="submit" name="submit" class="btn btn-success">CHECK
                                        IN</button>
                            </div>
                            <div class="col-sm-3" style="margin-top: 10px">
                            <a href="./checkin.php"><button type="button" id="back1" class="btn btn-danger">BACK</button></a>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>