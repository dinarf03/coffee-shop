<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <meta name="viewport" content="initial-scale=1.0, width=device-width" />
  <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="icon" href="asset/kopi.png">
  <style type="text/css">
      .card{
        margin-top: 120px;
      }
      body{
        font-family: -apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;
        background-image: url(asset/cafe.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
      }
      #p1{
        font-size: 20px;
      }
      #button1{
        margin-top: 25px;
      }
      .logo{
        position: absolute;
        height: 170px;
        width: 170px;
        top: -75px;
        border-radius: 50%;
        padding: 10px;
        left: 100px;
        text-align: center;
      }
      .logo img{
        height: 180px;
        width: 180px;
        border-radius: 50%;
        border: 2px solid white;
      }
      #login1{
        padding-top: 100px;
        font-size: 30px;
        transition: 1s;
      }
  </style>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
        <article class="card col-sm-4">
            <div class="card-body">
                <div class="d-flex justify-content-center logo">
                    <img src="asset/kopi.png" alt="" style="border-radius: 25%;"></a>
                </div>
                <h4 class="card-title text-center mb-4 mt-1" id="login1">Login User</h4>
                <hr>
                <p class="text-success text-center" id="p1">Welcome To Coffee</p>
                <?php if (isset($_SESSION["message"])): ?>
                  <div class="alert alert-<?=($_SESSION["message"]["type"])?>">
                    <?php echo $_SESSION["message"]["message"]; ?>
                    <?php unset($_SESSION["message"]); ?>
                  </div>
                <?php endif; ?>
                <form id="login" method="post" action="valid2.php">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fas fa-user"></i> </span>
                            </div>
                            <input name="username" id="username" class="form-control" placeholder="Username or Email" type="text" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fas fa-lock"></i> </span>
                            </div>
                            <input class="form-control" name="password" id="password" placeholder="Password" type="password" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info btn-block" id="button1">Login</button>
                    </div>
                    <div class="form-group">
                        <a href="register_pembeli.php"><button type="button" class="btn btn-info btn-block" id="button1">Register</button></a>
                    </div>
                </form>
            </article>
        </div>
    </div>
</body>
</html>
