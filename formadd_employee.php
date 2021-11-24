<?php
    session_start();
    require_once "connection.php";

    $insertemployee = new DB_con();

    if (isset($_POST['submit'])){

        $firstname = $_POST['name'];
        $lastname = $_POST['lastname'];
        $idcard = $_POST['idcard'];
        $birthday = $_POST['birthday'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $tel = $_POST['tel'];
        $position = $_POST['position'];
        $type = $_POST['type'];
        $bank = $_POST['bank'];
        $account = $_POST['account'];
        $salary = $_POST['salary'];
        $borrow = $_POST['bmoney'];
        $deposit = $_POST['deposit'];
        $ssp = $_POST['ssp'];
        $fcost = $_POST['fcost'];
        $advance = $_POST['advance'];
        $status = $_POST['status'];
        

        $sql = $insertemployee->insertemployee($firstname,$lastname,$idcard,$birthday,$email,$address,
                                                $tel,$position,$type,$bank,$account,$salary,$borrow,$deposit,
                                                $ssp,$fcost,$advance,$status);

        if($sql){
            echo "<script>alert('Record Inserted Successfully!');</script>";
            echo "<script>window.location.href='./employee.php'</script>";
        }else{
            echo "<script>alert('Something went wrong! Please try again!');</script>";
            echo "<script>window.location.href='./formadd_employee.php'</script>";
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
                        <p>ADD EMPLOYEE DATA -- เพิ่มข้อมูลพนักงาน</p>
                    </div>
                    <!-- Form edit client data to database -->
                    <form action="" method="post">
                    <div class="row">
                    <div class="col-sm-3">
                        <div class="row">
                        <label for="name">Name</label><br>
                            <input type="text" name="name" id="name" class="text" placeholder="Name">
                        </div>
                        <div class="row">
                        <label for="birthday">Date of birth</label><br>
                            <input type="date" name="birthday" id="birthday" class="text">
                        </div>
                        <div class="row">
                        <label for="tel">Tel</label><br>
                            <input type="text" name="tel" id="tel" class="text" placeholder="Telephone">
                        </div>
                        <div class="row">
                        <label for="bank">Bank Name</label><br>
                            <input type="text" name="bank" id="bank" class="text" placeholder="Bank name">
                        </div>
                        <div class="row">
                        <label for="bmoney">Borrow money</label><br>
                            <input type="text" name="bmoney" id="bmoney" class="text" placeholder="Borrow money">
                        </div>
                        <div class="row">
                        <label for="fcost">Facility cost</label><br>
                            <input type="text" name="fcost" id="fcost" class="text" placeholder="facility cost">
                        </div>
                        
                    </div>
                    <div class="col-1"></div>
                    <div class="col-sm-3">
                        <div class="row">
                            <label for="lastname">Lastname</label><br>
                            <input type="text" name="lastname" id="lastname" class="text" placeholder="Lastname">
                        </div>
                        <div class="row">
                        <label for="email">E-mail</label><br>
                            <input type="email" name="email" id="email" class="text" placeholder="Email">
                        </div>
                        <div class="row">
                        <label for="type">Type of Employee</label><br>
                            <select class="form-select text" aria-label="Default select example" id="type" name="type">
                                <option value="fulltime-staff" selected>Full-time Staff</option>
                                <option value="parttime-staff">Part-time Staff</option>
                                <option value="fulltime-maid">Full-time Maid</option>
                                <option value="parttime-maid">Part-time Maid</option>
                            </select>
                        </div>              
                        <div class="row">
                        <label for="account">Bank Account</label><br>
                            <input type="text" name="account" id="account" class="text" placeholder="Bank Account Number">
                        </div>
                        <div class="row">
                        <label for="deposit">Contract deposit</label><br>
                            <input type="text" name="deposit" id="deposit" class="text" placeholder="Contract deposit">
                        </div>
                        <div class="row">
                        <label for="advance">Advance salary</label><br>
                            <input type="text" name="advance" id="advance" class="text" placeholder="Advance salary">
                        </div>
                           
                    </div>
                    <div class="col-1"></div>
                    <div class="col-sm-3">
                        <div class="row">
                        <label for="idcard">ID card/Passport</label><br>
                            <input type="text" name="idcard" id="idcard" class="text" placeholder="ID card or Passport">
                        </div>
                        <div class="row">
                        <label for="address">Address</label><br>
                            <input type="text" name="address" id="address" class="text" placeholder="Address">
                        </div>
                        <div class="row">
                        <label for="position">Position</label><br>
                            <select class="form-select text" aria-label="Default select example" id="position" name="position">
                                <option value="Staff" selected>Staff</option>
                                <option value="Maid">Maid</option>
                            </select>
                        </div>
                        <div class="row">
                        <label for="salary">Salary(BATH)</label><br>
                            <input type="text" name="salary" id="salary" class="text" placeholder="Salary">
                        </div>
                        <div class="row">
                        <label for="ssp">SSP</label><br>
                            <input type="text" name="ssp" id="ssp" class="text" placeholder="Social security payment">
                        </div>
                        <div class="row">
                        <label for="status">Status</label><br>
                            <select class="form-select text" aria-label="Default select example" id="status" name="status">
                                <option value="Active" selected>Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                        </div> 
                        
                    </div>
                    <div class="row">
                    <label for="file">Labor contract</label><br>
                                <div class="col-sm-5 input-group">      
                                <div class="custom-file"> 
                                    <input type="file" class="custom-file-input" name="file" id="inputGroupFile02" accept=".pdf,.doc"/>
                                    <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                </div>
                                </div>
                        </div>
                    </div>

                    <div class="row text-center mt-3">
                        <div class="col-sm-3"></div>
                        
                                <div class="col-sm-3">
                                    <button type="submit" name="submit" class="btn btn-primary">ADD</button>
                                </div>
                                <div class="col-sm-3">
                                <a href="./employee.php"><button type="button" class="btn btn-danger" >CANCLE</button></a>           
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