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
        max-width: 800px;
        height: 500px;
        border: 1px solid #03191b;
        background-color: #ffffff;
      }
      #login .container #login-row #login-column #login-box #login-form {
        padding: 20px;
      }
      #login .container #login-row #login-column #login-box #login-form #register-link {
        margin-top: -85px;
      }
      .colorbutton{
        background-color:#054146 ;
      }
      .btn:hover{
        background-color: rgb(255, 255, 255);
        color: #ef1aff;
      }
      .textcolor{
        color: #ef1aff;
      }
    </style>
    
  </head>
  <body>
    <div id="login">
      <h3 class="text-center text-white pt-5">Đăng ký</h3>
      <div class="container">
          <div id="login-row" class="row justify-content-center align-items-center">
              <div id="login-column" class="col-md-6">
                  <div id="login-box" class="col-md-12">
                      <form id="login-form" class="form" action="" method="post">
                        <h3 class="text-center " style="color: #054146;">Tạo tài khoản</h3>
                        <div class="form-group">
                            <label for="ten" class="textcolor">Tên đăng nhập:</label><br>
                            <input type="text" name="ten" id="ten" class="form-control">
                            <br>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="matKhau" class="textcolor">Mật khẩu:</label><br>
                                        <input type="password" name="matKhau" id="matKhau" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="nhapLaiMatKhau" class="textcolor">Nhập lại mật khẩu:</label><br>
                                        <input type="password" name="nhapLaiMatKhau" id="nhapLaiMatKhau" class="form-control">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="email" class="textcolor">Địa chỉ email:</label><br>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>
                                
                                
                            <div class="form-group">
                                <label for="sdt" class="textcolor">Số điện thoại:</label><br>
                                <input type="tel" name="sdt" id="sdt" class="form-control">
                            </div>
                            <br>  
                            <br>
                            <div class="form-group">
                              <a href="#" class="btn btn-primary colorbutton" style="padding: 10px;">Đăng ký </a>
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="login.html" class="textcolor">Đăng nhập</a>
                            </div>
                        </div>

                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
  </body>
</html>