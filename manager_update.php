<?php 
    $conn = mysqli_connect("localhost","ninh","123456","ninh");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    //edit du lieu
    if(isset($_POST['manhanvien'])){
        if($_POST['colum_name']=='manhanvien'){
            $manhanvien = $_POST['manhanvien'];
            $text = $_POST['text'];
            $column_name = $_POST['colum_name'];
            $sql = "UPDATE nhanvien SET $column_name ='$text' WHERE manhanvien='$manhanvien'";
            mysqli_query($conn, $sql);

            $sql1 = "UPDATE luong SET $column_name ='$text' WHERE manhanvien='$manhanvien'";
            mysqli_query($conn, $sql1);
            mysqli_close($conn);
        }else if($_POST['colum_name']=='tienluong' || $_POST['colum_name']=='tienthuong'){
            $manhanvien = $_POST['manhanvien'];
            $text = $_POST['text'];
            $column_name = $_POST['colum_name'];
            $sql = "UPDATE luong SET $column_name ='$text' WHERE manhanvien='$manhanvien'";
            mysqli_query($conn, $sql);
            mysqli_close($conn);
        }else{
            $manhanvien = $_POST['manhanvien'];
            $text = $_POST['text'];
            $column_name = $_POST['colum_name'];
            $sql = "UPDATE nhanvien SET $column_name ='$text' WHERE manhanvien='$manhanvien'";
            mysqli_query($conn, $sql);
            mysqli_close($conn);
        }
    }
?>