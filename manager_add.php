<?php
    $conn = mysqli_connect("localhost","ninh","123456","ninh");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // them du lieu
    if(isset($_POST['manhanvien'])){
        $manhanvien = $_POST['manhanvien'];
        $tennhanvien = $_POST['tennhanvien'];
        $gioitinh = $_POST['gioitinh'];
        $ngaysinh = $_POST['ngaysinh'];
        $chucvu = $_POST['chucvu'];
        $quequan = $_POST['quequan'];
        $tienluong = $_POST['tienluong'];
        $tienthuong = $_POST['tienthuong'];

        $sql1 = "INSERT INTO nhanvien (manhanvien,tennhanvien, gioitinh, ngaysinh,chucvu,quequan) 
        VALUES ('$manhanvien','$tennhanvien','$gioitinh','$ngaysinh','$chucvu','$quequan')";
        mysqli_query($conn, $sql1);

        $sql2 = "INSERT INTO luong (manhanvien,tienluong, tienthuong) 
        VALUES ('$manhanvien','$tienluong','$tienthuong')";
        mysqli_query($conn, $sql2);
        
        mysqli_close($conn);
       
    }
?>