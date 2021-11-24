<?php
    session_start();
    require_once "connection.php";

    if (isset($_POST['submit'])){

        $username = $_POST['username'];
        $password = $_POST['password'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];

        $user_check = "SELECT * FROM user WHERE username = '$username' LIMIT 1";
        $result = mysqli_query($conn, $user_check);
        $user = mysqli_fetch_assoc($result);

        if ($user['username'] === $username){
            echo "<script>alert('Username already exits');</script>";
        } else {
            $passwordenc = md5($password);

            $query = "INSERT INTO user (username, password, firstname, lastname, userlevel)
                        VALUES ('$username', '$passwordenc', '$firstname', '$lastname', 'm')";
            $result = mysqli_query($conn, $query);
            
            if ($result){
                $_SESSION['success'] = "Insert user succesfully";
                header("Location: loginpage.php");
            }else{
                $_SESSION['error'] = "Something went wrong";
                header("Location: loginpage.php");
            }
        
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

  <body class="background">

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
            <a href="#">
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
            <a href="#">
              <i class='bx bx-qr-scan' ></i>
              <span class="links_name">Checkin</span>
            </a>
            <span class="tooltip">Checkin</span>
          </li>

          <li>
            <a href="#">
              <i class='bx bx-calendar-minus' ></i>
              <span class="links_name">Leave working day</span>
            </a>
            <span class="tooltip">Leave working day</span>
          </li>

          <li>
            <a href="#">
              <i class='bx bx-file' ></i>
              <span class="links_name">Labor contract</span>
            </a>
            <span class="tooltip">Labor contract </span>
          </li>

          <li>
            <a href="#">
              <i class='bx bxs-bank' ></i>
              <span class="links_name">Salary</span>
            </a>
            <span class="tooltip">Salary</span>
          </li>
      
        </ul>
       </div>
       <!-- Sidebar end -->

       <div class="login-content">
           <div class="login">
             <div class="form-groups">
               <div class="form-login">
                <div class="blank">blank</div>
                <div class="authen-login-subheader">REGISTER</div>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                <div class="input-container">
                  <input type="text" name="username"  required=""/>
                  <label>USERNAME</label>		
                </div>

                <div class="input-container">
                  <input type="password" name="password"  required=""/>
                  <label>PASSWORD</label>		
                </div>

                <div class="input-container">
                  <input type="text" name="firstname"  required=""/>
                  <label>FIRSTNAME</label>		
                </div>

                <div class="input-container">
                  <input type="text" name="lastname"  required=""/>
                  <label>LASTNAME</label>		
                </div>

                
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="a">
                  <label class="form-check-label" for="admin">Admin</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="s">
                  <label class="form-check-label" for="staff">Staff</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="m">
                  <label class="form-check-label" for="maid">Maid</label>
                </div>
                
                

                <div class="blank">blank</div>   <div class="blank">blank</div>

                  <!-- 
                    <label for="username">USERNAME</label>
                    <input type="text" name="username" placeholder="Enter your username" require>
                    <br>
                    <label for="password">PASSWORD</label>
                    <input type="password" name="password" placeholder="Enter your password" require>
                    <br>
                    <label for="firstname">FIRSTNAME</label>
                    <input type="firstname" name="firstname" placeholder="Enter your firstname" require>
                    <br>
                    <label for="lastname">LASTNAME</label>
                    <input type="lastname" name="lastname" placeholder="Enter your lastname" require>
                    <br>
                     -->
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary">

                </form>
           </div>
           <br>
           <p>Back to  <a href="./loginpage.php">LOGIN</a></p>
           <br>
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