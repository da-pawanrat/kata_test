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
                <div class="form-add">
                    <div class="header-form">
                        <p>ADD CLIENT DATA -- เพิ่มข้อมูลลูกค้า</p>
                    </div>
                    <!-- Form add client data to database -->
                    <form action="./client.php" id="form1" method="post">
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="name">Name</label><br>
                            <input type="text" name="name" id="name" class="text" placeholder="Name">
                        </div>
                        <div class="col-sm-2"></div>
                        <div class="col-sm-4">
                            <label for="lastname">Lastname</label><br>
                            <input type="text" name="lastname" id="lastname" class="text" placeholder="Lastname">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="idcard">ID card/Passport</label><br>
                            <input type="text" name="idcard" id="idcard" class="text" placeholder="ID card or Passport">
                        </div>
                        <div class="col-sm-2"></div>
                        <div class="col-sm-4">
                            <label for="birthday">Date of birth</label><br>
                            <input type="date" name="birthday" id="birthday" class="text">
                        </div>
                    </div>
                    <div class="row text-box">
                        <div class="col-sm-4">
                        <div class="row">
                        <div class="col">
                            <label for="email">Email</label><br>
                            <input type="email" name="email" id="email" class="text" placeholder="Email">
                        </div>
                        </div>
                        <div class="row">
                        <div class="col">
                            <label for="email">Tel</label><br>
                            <input type="email" name="email" id="email" class="text" placeholder="Telephone number">
                        </div>
                        </div>
                        </div>
                        <div class="col-sm-2"></div>
                        <div class="col-sm-4">
                        <div class="row">
                        <div class="col">
                            <label for="address">Address</label><br>
                            <textarea rows="4" name="address" id="address" class="text">
                            </textarea>
                        </div>
                        </div>
                        </div>
                    </div>
                    
                            <div class="row text-center mt-3">
                                <di class="col-sm-6">
                                    <button type="button" id="next1" class="btn btn-success">NEXT</button>
                                </di>
                                <di class="col-sm-6">
                                <button type="button" id="back1" class="btn btn-danger">CANCLE</button>
                                </di>
                            </div>
                        
                    </div>
                </form>
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