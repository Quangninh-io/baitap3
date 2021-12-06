<?php session_start(); ?>

<html>
    <head>
        <title>Bootstrap Theme Company</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript" src="chart.js"></script>
        <script type="text/javascript" src="lineChart.js"></script>
        <link rel="stylesheet" href="index.css">
        

    </head>
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
        <!--thanh bar-->
  
        <nav class="navbar navbar-default">
            <div class="container" >
              <div class="navbar-header">
                <a class="navbar-brand" href="#">Logo</a>
              </div>
              <ul class="nav navbar-nav">
                <li class="active"><a href="">Trang chủ</a></li>
                <li><?php 
                    if(isset($_SESSION["username"])){
                      echo '<a href="manager.php">Quản lý</a>';
                    }
                  ?></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
              <?php 
                if(isset($_SESSION["username"])){
                  
                  echo '<li><a href=""><span class="glyphicon glyphicon-user"></span>'.$_SESSION["username"].'</a> </li> <li><a href="logout.php"><span class="glyphicon glyphicon-user"></span>Đăng xuất</a></li>';
                }
                else{
                  echo '<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Đăng nhập</a></li>';
                }
              ?>   
              </ul>
            </div>
        </nav>
        <!--anhr truot, gioi thieu-->
        <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active text-center jumbotron text-center">
                    <h1>Công ty của chúng ta</h1>
                    <p>Chúng tôi rất yêu bạn</p>
                   
                </div>
                <div class="item jumbotron text-center">
                    <h1>Công ty bạn và tôi</h1>
                    <p>Chúng tôi luôn chào đón bạn</p>
                    
                </div>
                
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
        </div>
        <!--noi dung-->
        <div class="container-fluid bg-grey">
            <div class="row">
                <div class="col-sm-8">
                    <div id="piechart" style="width: 900px; height: 500px;"></div>
                </div>
                <div class="col-sm-4">
                    <br><br><br><br>
                    <h2>Đôi nét về công ty chúng tôi</h2>
                    <p>Thành lập ngày 29/10/2021. Với vốn điều lệ lên tới 10.000 tỉ đồng</p>
                    <p>Công ty đã trở thành kỳ lân mới của việt nam</p>
                </div>
            </div>
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-sm-4">
                        <h2>Sản phẩm chính của công ty</h2>
                        <p>Chúng tôi phân phối và chế tạo ô tô điện,<br> cạnh tranh trực tiếp với test và vifast</p>
                    </div>
                    <div class="col-sm-8">
                        <div id="curve_chart" style="width: 900px; height: 500px"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--bang-->
        <div class="container-fluid">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Tên</th>
                    <th>Chức vụ</th>
                    <th>Email</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>John</td>
                    <td>Giám đốc tài chính</td>
                    <td>john@example.com</td>
                  </tr>
                  <tr>
                    <td>Mary</td>
                    <td>Giám đốc kinh doanh</td>
                    <td>mary@example.com</td>
                  </tr>
                  <tr>
                    <td>July</td>
                    <td>Giám đốc nhân sự</td>
                    <td>july@example.com</td>
                  </tr>
                </tbody>
              </table>
        </div>
        
        <!--anh -->
        <div class="container text-center">
            <h3>Ban quản lý công ty</h3>
            <br>
            <div class="row">
              <div class="col-sm-4">
                  <div class="thumbnail">
                     <img src="staff3.png" alt="Random Name"><br>
                     <p><strong>John</strong></p>
                  </div>
              </div>
              <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="staff2.png" alt="Random Name"><br>
                    <p><strong>Mary</strong></p>
                 </div>
              </div>
              <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="staff1.png" alt="Random Name"><br>
                    <p><strong>July</strong></p>
                 </div>
              </div>
            </div>
            <br><br>
        </div>
        <!--chan trang-->
    
        <footer class="container-fluid text-center infor">
            <div class="row">
                <div class=" col-sm-3">
                    <p>Chính sách chung</p>
                </div>
                <div class="col-sm-3">
                    <p>Mã số thuế</p>
                </div>
                <div class="col-sm-3">
                    <p>Địa chỉ</p>
                </div>
                <div class="col-sm-3">
                    <p>Liên lạc</p>
                </div>
            </div>
            <br><br><br>
            <a href="#myPage" >
              <span class="glyphicon glyphicon-chevron-up"></span>
            </a>
            <p>Author: Bui Quang Ninh</p>
          </footer>
    </body>
</html>