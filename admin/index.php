<?php 
session_start(); 
if(isset($_SESSION['login'])){
  //session has not started
  header("location: ./edit.php");
}
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Login Template</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/login.css" />
</head>

<body>
  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 login-section-wrapper">
          <div class="brand-wrapper">
            <img src="assets/images/logo.svg" alt="logo" class="logo" />
          </div>
          <div class="login-wrapper my-auto">
            <h1 class="login-title"><a href="/login_form/">Log in</a></h1>
            <form action="index.php" method="post">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="username" id="email" class="form-control" placeholder="email@example.com" />
              </div>
              <div class="form-group mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="enter your passsword" />
              </div>
              <button name="login" id="login" class="btn btn-block login-btn" type="submit"> Login</button>
                <?php if(isset($_GET['msg'])){
                  ?>
                  <div class="alert-danger p-2"><?=$_GET['msg']?></div>
                  <?php
                }?>
            </form>
            </div>
          </div>  
          <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="assets/images/login.jpg" alt="login image" class="login-img" />
        </div>
        <?php
        // session_start();
        include 'dbconn.php';
        if (isset($_POST['login'])) {
          $username = $_POST['username'];
          $password = $_POST['password'];

          $sql = "SELECT * FROM `loginform` WHERE `username`='$username' AND `password` ='$password'";

          $result = mysqli_query($conn, $sql);

          $data = mysqli_fetch_assoc($result);

          if (mysqli_num_rows($result) > 0) {
            $_SESSION['login'] = true;
            $_SESSION['id'] = $data['id'];
            $_SESSION['username'] = $data['username'];
            header("location: ./edit.php");
          } else {
            $msg = "Wrong credentials or maybe you not activated";
            header("location: index.php?msg=$msg");
          }
        } else {
          // exit("Please fill details");
        }

        ?>

      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>