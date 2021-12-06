<?php
    $conn = mysqli_connect("localhost","ninh","123456","ninh");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $result_search = $_POST['result_search'];
    $sql = "SELECT * 
            FROM (SELECT nhanvien.manhanvien,nhanvien.tennhanvien,nhanvien.chucvu,nhanvien.gioitinh,nhanvien.ngaysinh,nhanvien.quequan,luong.tienluong,luong.tienthuong 
                FROM nhanvien,luong WHERE nhanvien.manhanvien = luong.manhanvien LIMIT 0,5) AS a 
            WHERE a.manhanvien LIKE '%$result_search%' OR
            a.tennhanvien LIKE '%$result_search%'OR 
            a.chucvu LIKE'%$result_search%'";
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
            <td style=" width: 15px;"><button type="button" class="btn btn-primary colorbutton">chi tiết</button></td></tr>';
        }
        echo '</tbody> </table>'; 
      } else {
        echo "0 results";
      }
      mysqli_close($conn);

?>