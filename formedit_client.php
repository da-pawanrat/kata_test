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
                        <p>EDIT CLIENT DATA -- แก้ไขข้อมูลลูกค้า</p>
                    </div>
                    <!-- Form edit client data to database -->
                    <form action="./client.php" method="post">
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
                        <label for="reserve">Reservation Date</label><br>
                            <input type="date" name="reserve" id="reserve" class="text">
                        </div>
                        <div class="row">
                        <label for="total">Total Guest</label><br>
                            <input type="text" name="total" id="total" class="text" placeholder="Total Guest">
                        </div>
                        <div class="row">
                        <label for="paystatus">Payment status</label><br>
                            <input type="text" name="paystatus" id="paystatuse" class="text" placeholder="Payment status">
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
                            <label for="checkin">Check In Date</label><br>
                            <input type="date" name="checkin" id="checkin" class="text">
                        </div>
                        <div class="row">
                        <label for="typestay">Type of Stay</label><br>
                            <select class="form-select text" aria-label="Default select example" id="typestay" name="typestay">
                                <option selected>Daily</option>
                                <option value="monthly">Monthly</option>
                            </select>
                        </div>
                        <div class="row">
                        <label for="price">Price</label><br>
                            <input type="text" name="price" id="price" class="text" placeholder="Price">
                        </div>
                        <div class="row">
                        <label for="booking">Booking Agent</label><br>
                            <select class="form-select text" aria-label="Default select example" id="booking" name="tbooking">
                                <option value="walkin" selected>Walk in</option>
                                <option value="airbnb">Airbnb</option>
                                <option value="agoda">Agoda</option>
                                <option value="expedia">Expedia</option>
                            </select>
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
                        <label for="checkout">Check Out Date</label><br>
                            <input type="date" name="checkout" id="checkout" class="text">
                        </div>
                        <div class="row">
                        <label for="room">Room Number</label><br>
                            <select class="form-select text" aria-label="Default select example" id="room" name="room">
                                <option value="1R" selected>1R</option>
                                <option value="2R">2R</option>
                                <option value="1L">1L</option>
                                <option value="2L">2L</option>
                            </select>
                        </div>
                        <div class="row">
                        <label for="payment">Count payment</label><br>
                            <input type="text" name="payment" id="payment" class="text" placeholder="Count payment time">
                        </div>
                        <div class="row">
                        <label for="status">Status</label><br>
                            <select class="form-select text" aria-label="Default select example" id="status" name="status">
                                <option value="active" selected>Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                    </div>
                    </div>

                    <div class="row text-center mt-3">
                        <div class="col-sm-3"></div>
                        
                                <div class="col-sm-3">
                                    <a href="./client.php"><button type="button" id="next1" class="btn btn-success">COMFIRM</button></a>
                                </div>
                                <div class="col-sm-3">
                                <button type="button" id="back1" class="btn btn-danger" >CANCLE</button>
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