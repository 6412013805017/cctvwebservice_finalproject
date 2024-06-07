<?php
  require_once("./template/action/dbconnect.php"); 
  $login_error = isset($_GET['login_error']) ? $_GET['login_error'] : 0;
  

  if($login_error) {
    echo "<script>alert('ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง')</script>";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CCTVWebService</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="static/css/view/sign-in.css" rel="stylesheet">
    <link href="static/css/main.css" rel="stylesheet">
    
</head>
<body>
    <div class="my-form">
     <div class="my-card pt-3 d-flex flex-column">
      <div class="d-flex justify-content-center">
          <img src="static/image/logo-sm.png" height="100">
      </div>
      <form action="./template/action/login.php" class="p-3" method="POST">
          <div class="input-group mb-3">
            <span class="input-group-text"><img src="./static/icon/user.png" width="32"></span>
            <div class="form-floating">
              <input type="text" class="form-control" id="username" name="username" placeholder="ชื่อผู้ใช้">
              <label for="username">Username</label>
            </div>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text"><img src="./static/icon/lock.png" width="32"></span>
            <div class="form-floating">
              <input type="password" class="form-control" id="password" name="password" placeholder="รหัสผ่าน">
              <label for="password">Password</label>
            </div>
          </div>
          <div class="d-grid gap-2">
            <button class="btn btn-primary btn-lg" type="submit">เข้าสู่ระบบ</button>
          </div>
      </form>
     </div> 
    </div>
</body>
</html>