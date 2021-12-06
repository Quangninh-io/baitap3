<?php 
    $conn = mysqli_connect("localhost","ninh","123456","ninh");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    if(isset($_POST['manhanvien'])){
        //edit du lieu
        $manhanvien         =  $_POST["manhanvien"];
        $manhanvien_update  = $_POST['manhanvien_update'];
        $tennhanvien_update = $_POST['tennhanvien_update'];
        $chucvu_update      =  $_POST['chucvu_update'];
        $tienluong_update   =  $_POST['tienluong_update'];
        $tienthuong_update  =  $_POST['tienthuong_update'];
        $gioitinh_update    =  $_POST['gioitinh_update'];
        $ngaysinh_update    =  $_POST['ngaysinh_update'];
        $quequan_update     =  $_POST['quequan_update'];

        
        $sql1 = "UPDATE nhanvien SET 
            manhanvien ='$manhanvien_update',
            tennhanvien ='$tennhanvien_update',
            chucvu='$chucvu_update',
            gioitinh='$gioitinh_update',
            ngaysinh='$ngaysinh_update',
            quequan='$quequan_update'

            WHERE manhanvien='$manhanvien'";
        mysqli_query($conn, $sql1);
        
        $sql2 = "UPDATE luong SET 
            manhanvien ='$manhanvien_update',
            tienluong ='$tienluong_update',
            tienthuong='$tienthuong_update'
            WHERE manhanvien='$manhanvien'";
        mysqli_query($conn, $sql2);

        mysqli_close($conn);

    }
?>