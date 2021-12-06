<?php session_start(); ?>
<?php 
    if(!isset($_SESSION["username"])){
        header("Location: index.php");
    }
?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="index.css">
        <style>
            
            .table-sortable tbody tr {
                cursor: move;
            }
            .navbar {
            margin-bottom: 0;
            background-color: #054146;
            border: 0;
            font-size: 12px !important;
            line-height: 1.42857143 !important;
            letter-spacing: 4px;
            border-radius: 0;
            }

            .navbar-nav li a:hover, .navbar-nav li.active a {
            color: #ef1aff !important;
            background-color: #fff !important;
            }

            .navbar-default .navbar-toggle {
            border-color: transparent;
            color: #fff !important;
            }
            .container{
                padding: 35px 10px;
            }
            .colorbutton{
                background-color:#054146 ;
            }
            .btn:hover{
                background-color: rgb(255, 255, 255);
                color: #ef1aff;
            }
        </style>
    </head>
    <body style="background-color: #f1f1f1;" id="myManager">
        <!--noi dung-->
        <div >
            <!--dieu huong-->
            <nav class="navbar navbar-default">
                <div class="container">
                  <div class="navbar-header">
                    <a class="navbar-brand" href="#">Logo</a>
                  </div>
                  <ul class="nav navbar-nav">
                    <li><a href="index.php">Trang chủ</a></li>
                    <li class="active"><a href="manager.php">Quản lý</a></li>
                  </ul >
                </div>
            
             </nav>
            <!--tim-->
            <div class="container">
                <div class="row" >
                    <div class="col-md-6 ">
                        <input type="text" class="form-control input-lg timkiem" placeholder="Nhân viên cần tìm" value="" name="" />
                    </div>
                </div>
              </div>
            <!--quan ly nut-->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-primary colorbutton" style="height: 50px;" data-toggle="modal" data-target="#exampleModal">Thêm nhân viên</button>
                        <button class="btn btn-primary colorbutton export_excel" style="height: 50px;" >Xuất excel</button>
                    </div>
                </div>
              </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm nhân viên</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <form method="POST" id="insert_data_hoten">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="inputdefault">Mã nhân viên</label>
                                <input  class="form-control" id="manhanvien" type="text">
                            </div>
                            <div class="form-group">
                                <label for="inputdefault">Tên nhân viên</label>
                                <input class="form-control" id="tennhanvien" type="text">
                            </div>
                            <div class="form-group">
                                <label for="inputdefault">Giới tính</label>
                                <input class="form-control" id="gioitinh" type="text">
                            </div>
                            <div class="form-group">
                                <label for="inputdefault">Ngày sinh</label>
                                <input class="form-control" id="ngaysinh" type="text">
                            </div>
                            <div class="form-group">
                                <label for="inputdefault">Chức vụ</label>
                                <input class="form-control" id="chucvu" type="text">
                            </div>
                            <div class="form-group">
                                <label for="inputdefault">Quê quán</label>
                                <input class="form-control" id="quequan" type="text">
                            </div>
                            <div class="form-group">
                                <label for="inputdefault">Tiền lương</label>
                                <input class="form-control" id="tienluong" type="text">
                            </div>
                            <div class="form-group">
                                <label for="inputdefault">Tiền thưởng</label>
                                <input class="form-control" id="tienthuong" type="text">
                            </div>
                        
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary colorbutton" data-dismiss="modal">Đóng</button>
                            <button type="button" class="btn btn-primary colorbutton" id="button_insert"   name="insert_data">Lưu</button>
                        </div>
                    </form>
                </div>
                </div>
              </div>
            <!--bang, chuyen trang-->
            <div class="container" style="background-color: #fff;">
                <div class="row">
                    <div class="table-responsive col-md-12">
                        <div id="loaddata"></div>
                    </div>
                </div>
             </div>
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
            <br><br><br>
            <div>
                <a href="#myManager">
                    <span class="glyphicon glyphicon-chevron-up"></span>
                </a>
                  <p>Author: Bui Quang Ninh</p>
              </div>
          </footer>
        <!--xu ly-->
        <script type="text/javascript">
            $(document).ready(function(){
                //lay dulieu
                function fetch_data(page){
                    $.ajax({
                        url:"manager_show.php",
                        method:"POST",
                        data:{page:page},
                        success:function(data){
                            $('#loaddata').html(data);
                        }
                        });
                }
                fetch_data();
                //doi trang 
                $(document).on('click','.pagination_link',function(){
                    var page = $(this).attr("id");
                    fetch_data(page);
                });
                //xoa du lieu
                $(document).on('click','.delete_data',function(){
                    var manhanvien = $(this).data('id3');
                    $.ajax({
                        url:"manager_delete.php",
                        method:"POST",
                        data: {manhanvien:manhanvien},
                        success:function(data){
                        alert('Xóa thành công');
                        fetch_data();
                        }
                    });
                });
                // xuat ra excel
                $(document).on('click','.export_excel',function(){
                    $.ajax({
                        url:"manager_export_excel.php",
                        method:"POST",
                        success:function(data){
                            alert('Xuất thành công')
                        }
                    });
                });
                

                //sua du lieu trong chi tiet
                $(document).on('click','.update_data',function(){
                    var manhanvien = $(this).data('id4');
                    var manhanvien_update   = $("#manhanvien_update"+manhanvien).val();
                    var tennhanvien_update  = $("#tennhanvien_update"+manhanvien).val();
                    var chucvu_update       = $("#chucvu_update"+manhanvien).val();
                    var tienluong_update    = $("#tienluong_update"+manhanvien).val();
                    var tienthuong_update   = $("#tienthuong_update"+manhanvien).val();
                    var gioitinh_update     = $("#gioitinh_update"+manhanvien).val();
                    var ngaysinh_update     = $("#ngaysinh_update"+manhanvien).val();
                    var quequan_update      = $("#quequan_update"+manhanvien).val();
                    $.ajax({
                        url:"manager_update_detail.php",
                        method:"POST",
                        data: {manhanvien:manhanvien,
                            manhanvien_update   :manhanvien_update,
                            tennhanvien_update  :tennhanvien_update,
                            chucvu_update       :chucvu_update,
                            tienluong_update    :tienluong_update,
                            tienthuong_update   :tienthuong_update,
                            gioitinh_update     :gioitinh_update,
                            ngaysinh_update     :ngaysinh_update,
                            quequan_update      :quequan_update,
                        },
                        success:function(data){
                            alert('Đổi dữ liệu thành công');
                            fetch_data();
                        }
                    });
                });

                // sua du lieu 
                function edit_data(manhanvien,text,colum_name){
                    $.ajax({
                        url:"manager_update.php",
                        method:"POST",
                        data: {manhanvien:manhanvien,text:text,colum_name:colum_name},
                        success:function(data){
                        alert('edit du lieu thanh cong');
                        fetch_data(page);
                        }
                    });
                    }
                    //sua ma nhan vien
                    $(document).on('blur','.manhanvien',function(){
                    var manhanvien = $(this).data('id_manhanvien');
                    var text = $(this).text();
                    edit_data(manhanvien,text,"manhanvien");
                    })
                    //sua ten nhan vien
                    $(document).on('blur','.tennhanvien',function(){
                    var manhanvien = $(this).data('id_tennhanvien');
                    var text = $(this).text();
                    edit_data(manhanvien,text,"tennhanvien");
                    })
                    //sua chuc vu
                    $(document).on('blur','.chucvu',function(){
                    var manhanvien = $(this).data('id_chucvu');
                    var text = $(this).text();
                    edit_data(manhanvien,text,"chucvu");
                    })
                    //sua tien luong
                    $(document).on('blur','.tienluong',function(){
                    var manhanvien = $(this).data('id_tienluong');
                    var text = $(this).text();
                    edit_data(manhanvien,text,"tienluong");
                    })
                    //sua tien thuong
                    $(document).on('blur','.tienthuong',function(){
                    var manhanvien = $(this).data('id_tienthuong');
                    var text = $(this).text();
                    edit_data(manhanvien,text,"tienthuong");
                })
                //tim kiem du lieu
                $('.timkiem').keyup(function(){
                    var result_search = $('.timkiem').val();
                    if(result_search==""){
                        fetch_data();
                    }else{
                        $.ajax({
                        url:"manager_search.php",
                        method:"POST",
                        data: {result_search:result_search},
                        success:function(data){
                        $('#loaddata').html(data);
                        }
                    });
                    }
                });
                // insert du lieu
                $('#button_insert').on('click',function(){
                var manhanvien = $('#manhanvien').val();
                var tennhanvien = $('#tennhanvien').val();
                var gioitinh = $('#gioitinh').val();
                var ngaysinh = $('#ngaysinh').val();
                var chucvu = $('#chucvu').val();
                var quequan = $('#quequan').val();
                var tienluong = $('#tienluong').val();
                var tienthuong = $('#tienthuong').val();
                if(manhanvien == ''||tennhanvien==''||gioitinh==''||ngaysinh==''||chucvu==''||quequan==''||tienluong==''||tienthuong==''){
                    alert('Không được bỏ trống các mục');
                }
                else{
                $.ajax({
                    url:"manager_add.php",
                    method:"POST",
                    data: {manhanvien:manhanvien,tennhanvien:tennhanvien,gioitinh:gioitinh,ngaysinh:ngaysinh,
                        chucvu:chucvu,quequan:quequan,tienluong:tienluong,tienthuong:tienthuong},
                    success:function(data){
                    alert('Lưu thành công');
                    fetch_data();
                    }
                });
                }
                });
            }); 
        </script>  
    </body>
</html>