<!doctype html>
<html lang="en">
  <head>
    <title>Kata Top Villa</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Boxicon CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  </head>

  <body>
     
       <!-- Sidebar start -->
       <div class="sidebar">
        <div class="logo_content">
          <div class="logo">
            <div class="logo_name">KATA TOP VILLA</div>
          </div>
          <i class='bx bx-menu' id="btn"></i>
        </div>

        <ul class="nav_list">
          <li>
              <i class='bx bx-search-alt'></i>
              <input type="text" placeholder="Search...." >
            <span class="tooltip">search</span>
          </li>

          <li>
            <a href="./dashboard.php">
              <i class='bx bxs-dashboard'></i>
              <span class="links_name">Dashboard</span>
            </a>
            <span class="tooltip">Dashboard</span>
          </li>

          <li>
            <a href="#">
              <i class='bx bx-table' ></i>
              <span class="links_name">Client data</span>
            </a>
            <span class="tooltip">Client data</span>
          </li>

          <li>
            <a href="./employee.php">
              <i class='bx bx-user'></i>
              <span class="links_name">Employee data</span>
            </a>
            <span class="tooltip">Employee data</span>
          </li>

          <li>
            <a href="./checkin.php">
              <i class='bx bx-qr-scan' ></i>
              <span class="links_name">Checkin</span>
            </a>
            <span class="tooltip">Checkin</span>
          </li>

          <li>
            <a href="./leavework.php">
              <i class='bx bx-calendar-minus' ></i>
              <span class="links_name">Leave working day</span>
            </a>
            <span class="tooltip">Leave working day</span>
          </li>

          <li>
            <a href="./labor.php">
              <i class='bx bx-file' ></i>
              <span class="links_name">Labor contract</span>
            </a>
            <span class="tooltip">Labor contract </span>
          </li>

          <li>
            <a href="./salary.php">
              <i class='bx bxs-bank' ></i>
              <span class="links_name">Salary</span>
            </a>
            <span class="tooltip">Salary</span>
          </li>
      
        </ul>
        <div class="profile_content">
          <div class="profile">
            <div class="profile_details">
              <img src="images/profile.jpg" alt="">
              <div class="name_job">
                <div class="name">Pawanrat Sangmuang</div>
                <div class="job">Admin</div>
              </div>
            </div>
            <i class='bx bx-log-out' id="logout"></i>
          </div>
        </div>
       </div>
       <!-- Sidebar end -->

       <!-- Header of pages  -->
       <div class="home_content" id="clientdata">
         <div class="row">
           <div class="col-sm-8 ">
              <h4 id="title_name">KATA TOP VILLA</h4>
              <p id="name_page">CLIENT DATA</p></div>
           <div class="col-sm-4">
            <div class="input-group rounded">
              <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                aria-describedby="search-addon" />
              <span class="input-group-text border-0" id="search-addon">
                <i class="bx bx-search-alt"></i>
              </span>
            </div>
           </div>
         </div>
        
         <!-- Title of Client data details -->
      <div class="cli-table">
        <div class="title-cli-table row">
            <div class="col-5 title-name">
              <p id="title-eng">CLIENT DATA</p>
              <p id="title-thai">????????????????????????????????????</p>
            </div>
            <div class="col-1">
              <div class="dropdown">
                <button class="btn btn-dropdown dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Year(??????)
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">ALL</a>
                  <a class="dropdown-item" href="#">2021</a>
                  <a class="dropdown-item" href="#">2020</a>
                  <a class="dropdown-item" href="#">2019</a>
                  <a class="dropdown-item" href="#">2018</a>
                  <a class="dropdown-item" href="#">2017</a>
                  <a class="dropdown-item" href="#">2016</a>
                </div>
              </div>
            </div>
            <div class="col-2">
              <div class="dropdown">
                <button class="btn btn-dropdown dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Month(???????????????)
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">ALL</a>
                  <a class="dropdown-item" href="#">??????????????????</a>
                  <a class="dropdown-item" href="#">??????????????????????????????</a>
                  <a class="dropdown-item" href="#">??????????????????</a>
                  <a class="dropdown-item" href="#">??????????????????</a>
                  <a class="dropdown-item" href="#">?????????????????????</a>
                  <a class="dropdown-item" href="#">????????????????????????</a>
                  <a class="dropdown-item" href="#">?????????????????????</a>
                  <a class="dropdown-item" href="#">?????????????????????</a>
                  <a class="dropdown-item" href="#">?????????????????????</a>
                  <a class="dropdown-item" href="#">??????????????????</a>
                  <a class="dropdown-item" href="#">???????????????????????????</a>
                  <a class="dropdown-item" href="#">?????????????????????</a>
                </div>
              </div>
            </div>
            <div class="col-2">
              <div class="dropdown">
                <button class="btn btn-dropdown dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Type(?????????????????????????????????????????????)
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">ALL</a>
                  <a class="dropdown-item" href="#">DAILY</a>
                  <a class="dropdown-item" href="#">MONTHLY</a>
                </div>
              </div>
            </div>
            <div class="col-2">
              <button class="btn btn-click" type="submit">CLICK</button>
            </div>
        </div>

        <!-- Client data details -->
        <div class="client-table"> 
            <div class="row">
              <div class="col-2 header-table">
                <p>KATA TOP VILLA</p>
              </div>
              <div class="col-2 header-btn">
                <a class="btn btn-add" href="./formadd_client.php" role="button">?????????????????????????????????</a>
              </div>
            </div>
              
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Type of Stay</th>
                  <th>Room Number</th>
                  <th>ID card / Passport</th>
                  <th>Customer name</th>
                  <th>Total guest</th>
                  <th>Checkin date</th>
                  <th>Checkout date</th>
                  <th>Price</th>
                  <th>Tel</th>
                  <th>Reservation date</th>
                  <th>Count payment</th>
                  <th>Payment status</th>
                  <th>Booking agent</th>
                  <th>Status</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>

              <?php
                include_once('connection.php');
                $fetchclientdata =  new DB_con();
                $sql = $fetchclientdata->fetchclientdata();
                while($row = mysqli_fetch_array($sql)){

                ?>

                <tr>
                  <td><?php echo $row['cust_id']; ?></td>
                  <td><?php echo $row['type_of_stay']; ?></td>
                  <td><?php echo $row['room_number']; ?></td>
                  <td><?php echo $row['idcard']; ?></td>
                  <td><?php echo $row['cust_fname'].' '.$row['cust_lname']; ?></td>
                  <td><?php echo $row['total_guest']; ?></td>
                  <td><?php echo $row['checkin_date']; ?></td>
                  <td><?php echo $row['checkout_date']; ?></td>
                  <td><?php echo $row['price']; ?></td>
                  <td><?php echo $row['cust_tel']; ?></td>
                  <td><?php echo $row['reser_date']; ?></td>
                  <td><?php echo $row['count_pay_time']; ?></td>
                  <td><?php echo $row['payment_status']; ?></td>
                  <td><?php echo $row['booking_agent']; ?></td>
                  <td><?php echo $row['status']; ?></td>
                  <td><a href="./formedit_client.php?cust_id=<?php echo $row['cust_id']; ?>" style="color: black;"><i class='bx bxs-edit-alt' style="font-size: 22px;"></i></a></td>
                </tr>

                <?php
                }
                ?>

              </tbody>
            </table>
          </div>


         </div> 
       </div>






      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/index.js"></script>
    <script src="https://unpkg.com/boxicons@2.0.9/dist/boxicons.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>