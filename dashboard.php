

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

          <li >
            <a href="#">
              <i class='bx bxs-dashboard'></i>
              <span class="links_name">Dashboard</span>
            </a>
            <span class="tooltip">Dashboard</span>
          </li>

          <li >
            <a href="./client.php">
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

       <!-- Dashboard details -->
       <div class="home_content" id="dashboard">
         <h4 id="title_name">KATA TOP VILLA</h4>
         <p id="name_page">HOME</p>
         <div class="container">
           <div class="dashboards text-center">
             <div class="title_dash">
             <p>RECENT ROOM STATUS - สถานะห้องพักล่าสุด</p>
             </div>
            
            <div class="body_dash">
              <div class="row">
                <p style="color: gray;">KATA VILLA HOTEL</p>
                <div class="col-6" id="room_status_available">
                    <h3>2</h3>
                    <h6>AVAILABLE ROOMS</h6>
                </div>
                <div class="col-6" id="room_status_not_available">
                  <h3>2</h3>
                  <h6>UNAVAILABLE ROOMS</h6>
              </div>
              </div>
              <div class="row">
                <p style="color: gray;">KATA YOKA APARTMENT</p>
                <div class="col-6" id="room_status_available">
                    <h3>2</h3>
                    <h6>AVAILABLE ROOMS</h6>
                </div>
                <div class="col-6" id="room_status_not_available">
                  <h3>2</h3>
                  <h6>UNAVAILABLE ROOMS</h6>
              </div>
              </div>
            </div>
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