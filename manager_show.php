<?php
    $conn = mysqli_connect("localhost","ninh","123456","ninh");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // lay du lieu
    $record_per_page = 5;
    if(isset($_POST["page"])){
        $page = $_POST["page"];
    }else{
        $page = 1;
    }
    $start_from = ($page-1)*$record_per_page;
    

    $sql = "SELECT * FROM nhanvien,luong WHERE nhanvien.manhanvien=luong.manhanvien ORDER BY nhanvien.manhanvien DESC  LIMIT $start_from,$record_per_page";
    
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo '<table id="sort2" class="grid table table-bordered table-sortable"> 
        <thead>
            <tr>
                <th>Mã nhân viên</th>
                <th>Tên</th>
                <th>Chức vụ</th>
                <th>Mức lương</th>
                <th>Tiền thưởng</th>
                <th colspan ="2" class ="text-center">Quản lý</th>            
            </tr>
        </thead>
        <tbody>';
        
        while($row = mysqli_fetch_assoc($result)) {
            echo '<tr>
            <td data-id_manhanvien=     '.$row["manhanvien"].' contenteditable  class="manhanvien">     '. $row["manhanvien"].' </td>
            <td data-id_tennhanvien=    '.$row["manhanvien"].' contenteditable  class="tennhanvien">    '. $row["tennhanvien"].'</td>
            <td data-id_chucvu=         '.$row["manhanvien"].' contenteditable  class="chucvu">         '. $row["chucvu"].'     </td> 
            <td data-id_tienluong=      '.$row["manhanvien"].' contenteditable  class="tienluong">      '. $row["tienluong"].'  </td>
            <td data-id_tienthuong=     '.$row["manhanvien"].' contenteditable  class="tienthuong">     '. $row["tienthuong"].' </td>
            <td style=" width: 15px;"><button data-id3='.$row["manhanvien"].' type="button" class="delete_data btn btn-primary colorbutton" name ="delete_data">xóa</button></td>
            <td style=" width: 15px;"><button data-toggle="modal" data-target="#id'.$row["manhanvien"].'detail" type="button" class="btn btn-primary colorbutton">chi tiết</button></td></tr>
            
            <div id="id'.$row["manhanvien"].'detail" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Chi tiết </h4>
                </div>
                <form enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Mã nhân viên</label>
                            <input id=manhanvien_update'.$row["manhanvien"].' type="text" class="form-control" value ="'. $row["manhanvien"].'" ><br>
                            <label>Tên nhân viên</label>
                            <input id=tennhanvien_update'.$row["manhanvien"].' type="text" class="form-control" value ="'. $row["tennhanvien"].'" ><br>
                            <label>Chức vụ</label>
                            <input id=chucvu_update'.$row["manhanvien"].' type="text" class="form-control" value ="'. $row["chucvu"].'" ><br>
                            <label>Tiền lương</label>
                            <input id=tienluong_update'.$row["manhanvien"].' type="text" class="form-control" value ="'. $row["tienluong"].'" ><br>
                            <label>Tiền thưởng</label>
                            <input id=tienthuong_update'.$row["manhanvien"].' type="text" class="form-control" value ="'. $row["tienthuong"].'" ><br>
                            <label>Giới tính</label>
                            <input id=gioitinh_update'.$row["manhanvien"].' type="text" class="form-control" value ="'. $row["gioitinh"].'" ><br>
                            <label>Ngày sinh</label>
                            <input id=ngaysinh_update'.$row["manhanvien"].' type="text" class="form-control" value ="'. $row["ngaysinh"].'" ><br>
                            <label>Quê quán</label>
                            <input id=quequan_update'.$row["manhanvien"].' type="text" class="form-control" value ="'. $row["quequan"].'" ><br>
                            
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                    <button type="button" data-id4='.$row["manhanvien"].' class="btn btn-default update_data" data-dismiss="modal">Lưu</button>
                    </div>
                </form>
                </div>

            </div>
            </div>

            
            ';
        }
        echo '</tbody> </table>';  
        
      } 


        $sql2 = "SELECT * FROM nhanvien";
        $result2 = mysqli_query($conn, $sql2);
        $total_pages = floor(mysqli_num_rows($result2)/$record_per_page)+1;

        echo "<div class='row'><div class='col text-center'> <ul class='pagination pager pagination-lg'>";
        for ($i =1 ; $i<=$total_pages;$i++){
            echo "<li><span class ='pagination_link' id='".$i."'>".$i."</span></li>";
        }
        echo "</ul></div></div>";
      
      mysqli_close($conn);

      

?>