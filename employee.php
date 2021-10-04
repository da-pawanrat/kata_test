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
            <a href="./client.php">
              <i class='bx bx-table' ></i>
              <span class="links_name">Client data</span>
            </a>
            <span class="tooltip">Client data</span>
          </li>

          <li>
            <a href="#">
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
              <p id="name_page">EMPLOYEE DATA</p></div>
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
            <div class="col-8 title-name">
              <p id="title-eng">EMPLOYEE DATA</p>
              <p id="title-thai">ข้อมูลพนักงาน</p>
            </div>
            <div class="col-2">
              <div class="dropdown">
                <button class="btn btn-dropdown dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Type(ประเภทของลูกค้า)
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
                <p>Employee Table</p>
              </div>
              <div class="col-2 header-btn">
                <a class="btn btn-add-a" href="./formadd_employee.php" role="button">เพิ่มข้อมูล</a>
              </div>
              <div class="col-2 header-btn">
                <a class="btn btn-edit" href="./formedit_employee.php" role="button">แก้ไขข้อมูล</a>
              </div>
            </div>
              
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Employee ID</th>
                  <th>ID card</th>
                  <th>Position</th>
                  <th>Name</th>
                  <th>Date of birth</th>
                  <th>Email</th>
                  <th>Telephone</th>
                  <th>Address</th>
                  <th>Bank Acoount number</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1001</td>
                  <td>110025634000111</td>
                  <td>Staff</td>
                  <td>Pawanrat Sangmuang</td>
                  <td>12/05/2021</td>
                  <td>pawanrat@gmail.com</td>
                  <td>0995688875</td>
                  <td>Phuket,Thailand</td>
                  <td>1234567890</td>
                </tr>
                <tr>
                  <td>1003</td>
                  <td>11002563665896</td>
                  <td>Maid</td>
                  <td>Atimay Pengchai</td>
                  <td>01/01/2011</td>
                  <td>atimayt@gmail.com</td>
                  <td>0992222275</td>
                  <td>Phuket,Thailand</td>
                  <td>5896542765</td>
                </tr>
                <tr>
                  <td>1004</td>
                  <td>116986354000111</td>
                  <td>Staff</td>
                  <td>Tagolwan Keawmanee</td>
                  <td>03/12/2002</td>
                  <td>tagolwan@gmail.com</td>
                  <td>0995600000</td>
                  <td>Songkla,Thailand</td>
                  <td>5369865421</td>
                </tr>
                <tr>
                  <td>1009</td>
                  <td>110025634000111</td>
                  <td>Staff</td>
                  <td>daada</td>
                  <td>30/03/1999</td>
                  <td>daada@gmail.com</td>
                  <td>0990000000</td>
                  <td>Phuket,Thailand</td>
                  <td>9876543210</td>
                </tr>
                <tr>
                  <td>1011</td>
                  <td>110025634000111</td>
                  <td>Maid</td>
                  <td>Ying</td>
                  <td>27/05/1989</td>
                  <td>ying@gmail.com</td>
                  <td>0999999999</td>
                  <td>Phuket,Thailand</td>
                  <td>1234567890</td>
                </tr>
              </tbody>
            </table>
          </div>


         </div> 
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