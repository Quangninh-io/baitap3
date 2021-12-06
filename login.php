<?php session_start(); ?>
<?php 
  $remember_username ="";
  $remember_password ="";
  if(isset($_SESSION["username"])){
    header("Location: index.php");
  }
  if(isset($_COOKIE["username"])){
    $remember_username = $_COOKIE["username"];
    $remember_password = $_COOKIE["password"];
  }
?>
<html>
  <head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <style>
      body {
        margin: 0;
        padding: 0;
        background-color: #03191b;
        height: 100vh;
      }
      #login .container #login-row #login-column #login-box {
        margin-top: 120px;
        max-width: 600px;
        height: 350px;
        border: 1px solid #03191b;
        background-color: #ffffff;
      }
      #login .container #login-row #login-column #login-box #login-form {
        padding: 20px;
      }
      #login .container #login-row #login-column #login-box #login-form #register-link {
        margin-top: -85px;
      }
      .textcolor{
        color: #ef1aff;
      }
      .colorbutton{
        background-color:#054146 ;
      }
      .btn:hover{
        background-color: rgb(255, 255, 255);
        color: #ef1aff;
      }
      .error {color: #FF0000;}
    </style>
    
  </head>
  <body>
    <?php
    // test password and user 
    // define variables and set to empty values
    $username = $password = $error = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $username = $_POST["username"];
      $password = $_POST["password"];
      $conn = mysqli_connect("localhost","ninh","123456","ninh");
      if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
      }
      $stmt = $conn->prepare( "SELECT * FROM taikhoan WHERE ten=? AND matkhau=?");
      //$result = $conn->query($sql);
      $stmt->bind_param("ss",$username,$password); 
      $stmt->execute();
      $result = $stmt->get_result();
      if($result->num_rows > 0){
          // set session 
        $_SESSION["username"] = $username;
          header("Location: index.php");
          if(isset($_POST['remember'])){
            setcookie("username",$username, time() + (86400 * 30));
            setcookie("password",$password, time() + (86400 * 30));
          }
      }else{
          $error = "Mật khẩu hoặc tên người sử dụng không đúng vui lòng thử lại";
      }
      $stmt->close();
      $conn->close();
    }
    ?>
    <div id="login">
      <h3 class="text-center text-white pt-5">Đăng nhập</h3>
      <div class="container">
          <div id="login-row" class="row justify-content-center align-items-center">
              <div id="login-column" class="col-md-6">
                  <div id="login-box">
                      <form id="login-form" class="form" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
                          <h3 class="text-center textcolor" style="color: #054146;">Đăng nhập</h3>
                          <div class="form-group">
                              <label for="username" class="textcolor">Tên:</label><br>
                              <input type="text" name="username" id="username" class="form-control" value="<?php echo $remember_username ?>" >
                          </div>
                          <div class="form-group">
                              <label for="password" class="textcolor">Mật khẩu:</label><br>
                              <input type="password" name="password" id="password" class="form-control" value="<?php echo $remember_password ?>">
                          </div>
                          <span class="error"><?php echo $error;?></span>
                          <div class="form-group">
                              <label for="remember-me" class="textcolor" ><span>Nhớ mật khẩu</span> <span><input id="remember" name="remember" type="checkbox"></span></label><br>
                              <br><input type="submit" value="Đăng nhập" class="btn btn-primary colorbutton" style="padding: 10px;">
                          </div>
                          <div id="register-link" class="text-right">
                              <a href="register.html" class="textcolor">Đăng ký</a>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>

  </body>
</html>